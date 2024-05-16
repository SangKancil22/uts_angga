<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenyewaRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_pemasok' => ['required'],
            'notelp' => ['required'],
            'alamat' => ['nullable'],
        ];
    }
}