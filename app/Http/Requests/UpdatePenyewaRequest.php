<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePenyewaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_penyewa' => ['required'],
            'notelp' => ['required'],
            'alamat' => ['nullable'],
        ];
    }
}
