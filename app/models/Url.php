<?php
/**
 * Created by IntelliJ IDEA.
 * User: k-kuwana
 * Date: 15/02/11
 * Time: 16:25
 */

class Url extends Eloquent{


    protected $table = 'rechnr_url';

    public function domain()
    {
        return $this->belongsTo('Domain');
    }

    public function page()
    {
        return $this->belongsTo('Page');
    }
    
    public static function getUrl($domainId, $controller, $action){
        $page = Page::where('controller_name', '=', $controller)->where('action_name', '=', $action)->first();
        $url = Url::where('page_id', '=', $page->id)->where('domain_id', '=', $domainId)->first();
        return $url->url;
    }
    
    
}