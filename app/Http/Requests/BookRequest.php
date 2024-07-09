<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cover' => 'image',
            'judul' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tempat_terbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
            'bahasa' => 'required|string|max:255',
            'jumlah_halaman' => 'required|integer|min:1',
            'sinopsis' => 'required|string',
            'stok' => 'required|integer|min:0',
        ];
    }
}
