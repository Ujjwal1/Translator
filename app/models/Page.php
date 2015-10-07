<?php
/**
 * Created by IntelliJ IDEA.
 * User: k-kuwana
 * Date: 15/02/11
 * Time: 16:25
 */

class Page extends Eloquent{

    protected $table = 'rechnr_page';

    public function urls()
    {
        return $this->hasMany('Url');
    }
    
    public function translateKey($title){
        return "page_" . $this->id . "_" . $title;
    }
}