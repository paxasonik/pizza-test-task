<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        return [
            'total_price' => 'required',
            'total_count' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits_between:5,12',
            'address' => 'required',
            'comment' => '',
            'products' => '',
        ];
    }
}
