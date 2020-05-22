<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaValidation extends FormRequest
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
            'nome'                  => ['required', 'string', 'max:255', 'unique:pessoas'],
            'cpf'                   => ['required', 'string', 'unique:pessoas'],
            'email'                 => ['required', 'string', 'email', 'max:255', 'unique:pessoas'],
            'data_nasc'             => 'required',
            'nacionalidade'         => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Favor informar o nome da pessoa.',
            'nome.unique' => 'Este nome já se encontra registrado no sistema.',
            'nome.max' => 'O nome não pode ter mais que 255 caracteres.',
            'cpf.required' => 'Favor infomar o cpf.',
            'cpf.unique' => 'Este cpf já se encontra registrado no sistema.',
            'email.required' => 'Favor infomar o email.',
            'email.email' => 'Favor infomar um email válido.',
            'email.unique' => 'Este e-mail já se encontra registrado no sistema.',
            'data_nasc.required' => 'Favor infomar a data de nascimento.',
            'nacionalidade.required' => 'Favor infomar a nacionalidade.',
        ];
    }
}
