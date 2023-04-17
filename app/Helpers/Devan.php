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

if (!function_exists('get_organisasi')) {
    function get_organisasi()
    {
        return \App\Models\Organisasi::pluck('nama', 'id');
    }
}

if (!function_exists('get_bulan')) {
    function get_bulan($code)
    {
        switch ($code) {
            case  1:
                return  "Januari";
                break;
            case  2:
                return  "Februari";
                break;
            case  3:
                return  "Maret";
                break;
            case  4:
                return  "April";
                break;
            case  5:
                return  "Mei";
                break;
            case  6:
                return  "Juni";
                break;
            case  7:
                return  "Juli";
                break;
            case  8:
                return  "Agustus";
                break;
            case  9:
                return  "September";
                break;
            case  10:
                return  "Oktober";
                break;
            case  11:
                return  "November";
                break;
            case  12:
                return  "Desember";
                break;
        }
    }
}

if (!function_exists('konversi_nomor')) {
    function konversi_nomor($nohp) {
    // kadang ada penulisan no hp 0811 239 345
    $nohp = str_replace(" ","",$nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace("(","",$nohp);
    // kadang ada penulisan no hp (0274) 778787
    $nohp = str_replace(")","",$nohp);
    // kadang ada penulisan no hp 0811.239.345
    $nohp = str_replace(".","",$nohp);

    // cek apakah no hp mengandung karakter + dan 0-9
    if(!preg_match('/[^+0-9]/',trim($nohp))){
        // cek apakah no hp karakter 1-3 adalah +62
        if(substr(trim($nohp), 0, 3)=='+62'){
            $hp = trim($nohp);
        }
        // cek apakah no hp karakter 1 adalah 0
        elseif(substr(trim($nohp), 0, 1)=='0'){
            $hp = '+62'.substr(trim($nohp), 1);
        }
        return $hp??'';
    }
}
}
