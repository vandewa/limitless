<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LokasiStoreValidation extends FormRequest
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
            'name' => 'required',
            'lokasi_wisata_tp' => 'required',
            'alamat' => 'required',
            'contact_person' => 'required',
            'no_wa' => 'required|numeric',
            'email' => 'required|email|unique:lokasi_wisatas,email'
        ];
    }
}
