<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesaWisataValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'jenis' => 'required',
            'strata' => 'required',
            'region_kec' => 'required',
            'region_kel' => 'required',
            'telepon' => 'required',
            'email' => 'required|email',
            'nama_pengelola' => 'required',
            'nama_desa' => 'required',
            // 'website' => 'required',
            'tahun_dibentuk' => 'required',
            'jumlah_pemandu' => 'required|numeric',
            'jumlah_pemandu_bersertifikat' => 'required|numeric',
            // 'fb' => 'required',
            // 'ig' => 'required',
            // 'tiktok' => 'required',
            // 'youtube' => 'required',
        ];
    }
}
