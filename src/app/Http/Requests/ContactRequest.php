<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => ['required', 'string', 'max:8'],
            'first_name' => ['required', 'string', 'max:8'],
            'gender' => ['required', 'in:1,2,3'],
            'email' => ['required', 'email'],
// 'tel' => ['required', 'numeric', 'regex:/^0\d{1,4}\d{1,4}\d{4}$/'],
            // 'tel_1' => ['bail', 'required', 'numeric', 'max:4'],
            // 'tel_2' => ['bail', 'required', 'numeric', 'max:4'],
            // 'tel_3' => ['bail', 'required', 'numeric', 'max:4'],
            'address' => ['required'],
            'category_id' => ['required'],
            'detail' => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.*' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
// 'tel.required' => '電話番号を入力してください',
// 'tel.numeric' => '電話番号は 半角英数字で入力してください',
// 'tel.regex' => '電話番号は 5桁まで数字で入力してください',
            // 'tel_1.required' => '電話番号を入力してください',
            // 'tel_1.numeric' => '電話番号は 半角英数字で入力してください',
            // 'tel_1.max' => '電話番号は 5桁まで数字で入力してください',
            // 'tel_2.required' => '電話番号を入力してください',
            // 'tel_2.numeric' => '電話番号は 半角英数字で入力してください',
            // 'tel_2.max' => '電話番号は 5桁まで数字で入力してください',
            // 'tel_3.required' => '電話番号を入力してください',
            // 'tel_3.numeric' => '電話番号は 半角英数字で入力してください',
            // 'tel_3.max' => '電話番号は 5桁まで数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
