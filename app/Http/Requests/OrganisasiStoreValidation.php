<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganisasiStoreValidation extends FormRequest
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
            'nama' => 'required',
            'alamat' => 'required',
            'ketua' => 'required',
            'contact' => 'required|numeric',
            'jenis_legal_formal' => 'required',
            'nomor_legal_formal' => 'required',
            'lembaga_yang_mengeluarkan' => 'required',
            'anggota_lelaki' => 'required|numeric',
            'anggota_perempuan' => 'required|numeric',
        ];
    }
}
