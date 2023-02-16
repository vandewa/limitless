<?php

if (!function_exists('get_kab')) {
    function get_kab()
    {
        return \App\Models\ComRegion::where("region_root", 33)->pluck('region_nm', 'region_cd');

    }
}
if (!function_exists('get_kec')) {
    function get_kec()
    {
        return \App\Models\ComRegion::where("region_root", 3307)->pluck('region_nm', 'region_cd');
    }
}
if (!function_exists('get_kel')) {
    function get_kel($code)
    {
        return \App\Models\ComRegion::where("region_root", $code)->pluck('region_nm', 'region_cd');
    }
}

if (!function_exists('get_code_group')) {
    function get_code_group($code)
    {
        return \App\Models\ComCode::where('code_group', $code)->pluck('code_nm', 'code_cd');
    }
}


