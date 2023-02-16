<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComRegion;   

class RegionController extends Controller
{
    public function kelurahan(Request $request)
    {
        $kelurahan = ComRegion::where("region_root", $request->kelurahan)->pluck('region_nm', 'region_cd');
        return response()->json($kelurahan);
    }
}
