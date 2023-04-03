<?php

namespace App\Http\Requests;

use App\Http\Requests\CustomRulesRequest;

class UserRequest extends CustomRulesRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return Bool
     */
    public function authorize(): Bool
    {
        return true;
    }

    /**
     * @return Array
     */
    public function validateDefault(): array
    {
        return [
            // Your default validation
        ];
    }

    /**
     * @return Array
     */
    public function validateToStore(): array
    {
        return [
            'name'     => 'required',
            'cpf'      => 'required|size:11',
            'email'    => 'required|email',
            'password' => 'required',
        ];
    }

    /**
     * @return Array
     */
    public function validateToUpdate(): array
    {
        return [
            'name'     => 'string',
            'cpf'      => 'string|size:11',
            'email'    => 'string|email',
            'password' => 'string',
        ];
    }

    /**
     * @return Array
     */
    public function validateToDestroy(): array
    {
        return [
            // 'id' => 'required',
        ];
    }

    /**
     * @return Array
     */
    public function messages(): array
    {
        return [
            // 'id.required' => 'O id é obrigatório!',
        ];
    }
}
