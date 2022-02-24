<?php

if (! function_exists('set_option')){
    function set_option($key,$value){
    if ($setting = get_item($key))
        return \App\Setting::find($setting->id)->update(['meta_value'=>$value]);
    return \App\Setting::create(["meta_key"=>$key,"meta_value"=>$value]);
    }
}

if (! function_exists('get_option')){
    function get_option($key){
     $record = \App\Setting::where("meta_key",$key)->first();
     if ($record)
         return $record->meta_value;
     return null;
    }
}

if (! function_exists('get_item')){
    function get_item($key){
        $record = \App\Setting::where("meta_key",$key)->first();
        if ($record)
            return $record;
        return null;
    }
}
