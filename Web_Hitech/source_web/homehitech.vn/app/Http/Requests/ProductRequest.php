<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'ten_sanpham'=>'required',
            'ma_sanpham' =>'required',
            'category_id'=>'required',
            'thong_so'   =>'required',
            'gia'        =>'required|numeric',

        ];
    }
    public function messages()
    {
        return [
            'ten_sanpham.required' =>'Tên sản phẩm không được để trống',
            'ma_sanpham.required'  =>'Mã sản phẩm không được để trống',
            'category_id.required' =>'Danh mục không được để trống',
            'thong_so.required'    =>'Thông số không được để trống',
            'gia.required'         =>'Giá tiền không được để trống',
            'gia.numeric'          =>'Giá tiền phải là số',

        ];
    }
}
