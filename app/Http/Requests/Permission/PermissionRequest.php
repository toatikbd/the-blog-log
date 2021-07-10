<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
        $on_update = $this->method() == "PUT" ? "": "|unique:permissions,name";
        return [
            'name' => 'required|string'.$on_update,
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Permission name is required',
            'name.string' => "Permission name should in character"
        ];
    }
}
