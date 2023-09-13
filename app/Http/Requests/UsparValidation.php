<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsparValidation extends FormRequest
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
            'master_data_usaha_pariwisata_id' => 'required',
            'nama_usaha' => 'required',
            'nama_pemilik' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'tenaga_l' => 'required',
            'tenaga_p' => 'required',
            'izin_dimiliki' => 'required',
        ];
    }
}
