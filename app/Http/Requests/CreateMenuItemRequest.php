<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateMenuItemRequest extends FormRequest
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
            //-----------------------TODO: Add unique validation to the name with exception------------
            'name'=>['required','min:3','max:50'],
            'category_id'=>['required'],
            'image'=>['mimes:jpg,jpeg,png'],
            'price'=>['required','min:0.01','numeric'],
            'description'=>['required','min:3','max:50'],
        ];
    }


}
