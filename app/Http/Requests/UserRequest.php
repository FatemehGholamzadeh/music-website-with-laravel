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
        $rules =[
            'F_name' => 'required',
            'username' => 'required',
            'E_name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required|min:6|max:12',
        ];
        if (request()->route('user_id') && intval(request()->route('user_id')) > 0 ){
            unset($rules['password']);
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'F_name.required'=>'لطفا نام کامل فارسی را وارد نمایید.',
            'E_name.required'=>'لطفا نام کامل انگلیسی را وارد نمایید.',
            'username.required'=>'وارد کردن نام کاربری الزامی می باشد.',
            'role.required'=>'وارد کردن نقش کاربری الزامی می باشد.',
            'password.required'=>'وارد کردن کلمه عبور الزامی می باشد.',
            'password.min'=>'کلمه عبور حداقل باید دارای 6 کاراکتر باشد.',
            'password.max'=>'کلمه عبور حداکثر می تواند دارای 12 کاراکتر باشد.',
            'email.required'=>'وارد کردن ایمیل الزامی می باشد.',
            'email.email'=>'ایمیل وارد شده معتبر نمی باشد.',
        ];
        
    }
}
