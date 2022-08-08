<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SachRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return[
            'ten_sach'=>'required',
            'so_trang' =>'required',
            'nam_xuat_ban'=>'required',
            'tac_gia'=>'required',
            'the_loai'=>'required',
            'ma_sach'=>'required',

    ];
    }
}
