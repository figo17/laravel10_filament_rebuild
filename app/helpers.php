<?php

use App\Models\section;
use App\Models\Setting;
use App\Models\Partner;

if (!function_exists('get_setting_value')) {
    function get_setting_value($key) {
        $data = Setting::where('key', $key)->first();
        return $data->value ?? 'empty';
    }
}

function get_section_data($key){
    $data = section::where('post_as',$key)->first();
    if(isset($data)){
        return $data;
    }
}
function get_partner(){
    $data= partner::all();
    return $data;
}