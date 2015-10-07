<?php

class Slider extends Eloquent{


    protected $table = 'text_slider';
    public function domain()
    {
        return $this->belongsTo('Domain');
    }

    public static function slider1($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->slider1;
    }  

     public static function slider2($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->slider2;
    }  

     public static function slider3($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->slider3;
    }  

     public static function slider4($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->slider4;
    }  


     public static function slider5($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->slider5;
    }  

     public static function slider6($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->slider6;
    }  


    public static function popular1($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->popular1;
    }  

    public static function popular2($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->popular2;
    }  

    public static function popular3($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->popular3;
    }  

    public static function popular4($domain_id){  
        $slide = Slider::where('domain_id', '=', $domain_id)->first();
        return $slide->popular4;
    }  

    
}