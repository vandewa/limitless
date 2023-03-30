<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EkrafStoreValidation extends FormRequest
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
            'nama_pemilik' => 'required',
            'nik' => 'required|numeric',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'jenis_barang_jasa' => 'required',
            'nama_usaha' => 'required',
            'nama_merek' => 'required',
            'hki_status' => 'required',
            'nomor_hp' => 'required|numeric',
            'jml_tenaga_laki' => 'required|numeric',
            'jml_tenaga_perempuan' => 'required|numeric',
            'nib' => 'required'
        ];
    }
}
