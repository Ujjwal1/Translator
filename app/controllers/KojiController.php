<?php
class KojiController extends BaseController {
    
    public function showProfile() {


        /**
         * Actually you can get a domain name with the following command.
         * $domainName = Input::server('SERVER_NAME')
         * When user access to this page via "www.rechnr.com", $domainName is "www.rechnr.com" of course.
         * When user access to this page via "www.rechnr.de", $domainName is "www.rechnr.de" of course.
         * When YOU access to this page via "localhost", $domainName is "localhost" of course.
         */
        // get domain info
        $domains = array("com" => 1 ,"de" => 2);

        $greeting = Translate::whereRaw(
            'domain_id = ? and title = ?', array($domains[Input::get('domain')], 'greeting')
        )->get()->first();
        
        $currencyTitle = Translate::whereRaw(
            'domain_id = ? and title = ?', array($domains[Input::get('domain')], 'currency_title')
        )->get()->first();

        $currencyValue = Translate::whereRaw(
            'domain_id = ? and title = ?', array($domains[Input::get('domain')], 'currency_value')
        )->get()->first();
        
        return View::make('koji.index')->with(array(
            "domainName" => Input::server('SERVER_NAME'),
            "greeting" => $greeting,
            "currencyTitle" => $currencyTitle,
            "currencyValue" => $currencyValue,
        ));
        
    }
    
}