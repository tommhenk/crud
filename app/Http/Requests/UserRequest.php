<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = isset($this->route()->parameter('user')->id) ? $this->route()->parameter('user')->id : null;
        return [
            'name'=>'required|max:255|min:3',
            'email'=>'required|min:3|max:255|email|unique:users,email,'.$id
        ];
    }
}
