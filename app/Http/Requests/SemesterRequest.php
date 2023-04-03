<?php

namespace App\Http\Requests;

use App\Http\Requests\CustomRulesRequest;

class SemesterRequest extends CustomRulesRequest
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
            'year' => 'required|size:4',
            'semester' => 'required|in:1,2',
        ];
    }

    /**
     * @return Array
     */
    public function validateToUpdate(): array
    {
        return [
            'year' => 'size:4',
            'semester' => 'in:1,2',
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

    /**
     * @return Array
     */
    public function attributes(): array
    {
        return [
            // 'name' => 'nome',
        ];
    }
}
