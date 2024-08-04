<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'danh_muc_id' => 'required|exists:danh_mucs,id',
            'ma_san_pham' => 'required|max:255|unique:san_phams,ma_san_pham,' . $this->route('id'),
            'ten_san_pham'  => 'required',
            'gia_san_pham'  => 'required|numeric|min:0',
            'gia_khuyen_mai'  => 'numeric|min:0|lt:gia_san_pham',
            'hinh_anh'  => 'image|mimes:png,jpg,jpeg,gif|max:2048',
            'mo_ta_ngan'  => 'required',
            'so_luong'  => 'integer|min:0',
            'ngay_nhap'  => 'required|date'
        ];
    }

    public function messages(): array
    {
        return [
            'danh_muc_id.required' => 'Danh mục không được để trống.',
            'danh_muc_id.exists' => 'Danh mục không tồn tại.',
            'ma_san_pham.required' => 'Mã sản phẩm không được để trống.',
            'ma_san_pham.max' => 'Mã sản phẩm không được vượt quá 255 ký tự.',
            'ma_san_pham.unique' => 'Mã sản phẩm đã tồn tại.',
            'ten_san_pham.required' => 'Tên sản phẩm không được để trống.',
            'gia_san_pham.required' => 'Giá sản phẩm không được để trống.',
            'gia_san_pham.numeric' => 'Giá sản phẩm phải là số.',
            'gia_san_pham.min' => 'Giá sản phẩm phải lớn hơn hoặc bằng 0.',
            'gia_khuyen_mai.numeric' => 'Giá khuyến mại phải là số.',
            'gia_khuyen_mai.min' => 'Giá khuyến mại phải lớn hơn hoặc bằng 0.',
            'gia_khuyen_mai.lt' => 'Giá khuyến mại phải nhỏ hơn giá sản phẩm.',
            'hinh_anh.image' => 'Hình ảnh phải là tệp hình ảnh.',
            'hinh_anh.mimes' => 'Hình ảnh phải có định dạng png, jpg, jpeg hoặc gif.',
            'hinh_anh.max' => 'Hình ảnh không được vượt quá 2048KB.',
            'mo_ta_ngan.required' => 'Mô tả ngắn không được để trống.',
            'so_luong.integer' => 'Số lượng phải là số nguyên.',
            'so_luong.min' => 'Số lượng phải lớn hơn hoặc bằng 0.',
            'ngay_nhap.required' => 'Ngày nhập không được để trống.',
            'ngay_nhap.date' => 'Ngày nhập phải là ngày hợp lệ.',
        ];
    }
}
