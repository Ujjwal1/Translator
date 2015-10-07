<?php

class URIController  extends RechnrController {
 
    /**
     * @return mixed|static
     * Select domain object from database by domain name(xxx.de, xxx.com so on)
     */
    /*private function getDomain() {
        $thisDomainName = explode(":", Input::server('HTTP_HOST'));
        return Domain::where('name', '=', $thisDomainName[0])->first();
    }*/

    

 
    public function main() {

        $domain_id = parent::tld();
        if(Session::has('domain_id'))
            Session::forget('domain_id');
        Session::put('domain_id',$this->tld());
        if(Request::path()==="/"){
            $link = "/";
        }else{
            $link = '/'.Request::path();
        }
        
        $url = DB::table('rechnr_url')->
                     where('domain_id' , "=", $domain_id)->where('url' , '=', $link)->first();
         

        if ($url == null) {
            $controller = 'RechnrController';
            $action = 'Four_O_Four';
        } else {
            
            $page= DB::table('rechnr_page')->
                    where('id' , "=", $url->page_id)->first();
            //print_r($page->controller_name);
            $controller =  $page->controller_name;
            $action = $page->action_name;
           
        }
        return App::make($controller)->$action(Input::all());
 
    }

    public function select_lang(){
        $result = DB::table('rechnr_domain')
                ->get();
        return View::make('rechnr/editing_forms/url_lang_admin')
            ->with('results',$result)
            ->with('link_url',Url::getUrl(parent::tld(), 'URIController', 'edit_url'));
    }

    public function edit_url(){
        if(Auth::check()){
                $domain_id          = Input::get('domain_id');
                $language    = DB::table('rechnr_domain')
                                ->where('domain_id',$domain_id)
                                ->pluck('language');
                $result=DB::table('rechnr_url')
                        ->where('as','not like','admin%')
                        ->where('domain_id',$domain_id)
                        ->get();
        
                        return View::make('rechnr/editing_forms/url_admin')
                        ->with('results',$result)
                        ->with('language',$language)
                        ->with('link_url',Url::getUrl(parent::tld(), 'URIController', 'update'));

        }
    }


    public function update(){
        if(Auth::check()){
                    $domain_id          = Input::get('id');
                    $memo               = Input::get('memo');
                    $url                = Input::get('url');
                    $as                 = Input::get('as');
                  
                    try{            
                        if(DB::table('rechnr_url')
                            ->where('domain_id',$domain_id)
                            ->where('as',$as)
                            ->update(array(
                                    'memo'              =>  $memo,
                                    'url'               =>  $url
        
                                ))){

                                        $result=DB::table('rechnr_url')
                                                    ->where('as','not like','admin%')
                                                    ->where('domain_id',$domain_id)
                                                    ->get();
                                    
                                        return Redirect::to(parent::getUrlForRoute('admin_edit_url'))
                                            ->with('link_url',Url::getUrl(parent::tld(), 'URIController', 'edit_url'))
                                            ->with('domain_id',$domain_id)
                                            ->with('updation','URL Updated Successfully');
                            }
                            else{
                                 return Redirect::to(parent::getUrlForRoute('admin_edit_url'))
                                            ->with('link_url',Url::getUrl(parent::tld(), 'URIController', 'edit_url'))
                                            ->with('domain_id',$domain_id)
                                            ->with('updation','Already up to date');   
                            }
                    }catch(Exception $e){
                        return Redirect::to(parent::getUrlForRoute('admin_edit_url'))
                            ->with('updation',$e);
                    }
                }

    
    }
}