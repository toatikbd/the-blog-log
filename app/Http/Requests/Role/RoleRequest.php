<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
        $on_update = $this->method() == "PUT" ? "": "|unique:roles,name";
        return [
            'name' => 'required|string'.$on_update,
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Role name is required',
            'name.string' => "Role name should in character"
        ];
    }
}
