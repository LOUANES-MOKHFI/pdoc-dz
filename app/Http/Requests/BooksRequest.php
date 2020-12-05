<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'titre' => 'required',
            'auteur' => 'required',
            'editeur' => 'required',
            'langue' => 'required',
            'isbn' => 'required',
            'sujet' => 'required',
            'image' => 'required',
            'livre_pdf' => 'mimes:pdf',
            ];
    }
}
