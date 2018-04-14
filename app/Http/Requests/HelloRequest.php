<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'hello') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tall' => 'required|numeric|between:90,140',
            'age' => 'required|numeric|max:16',
            'cup' => 'required|regex:/^[A-B]$/',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->sometimes('age', 'max:12', function($input) {
            return $input->cup === 'A';
        });

        $validator->after(function ($validator) {
            if ( $validator->fails()) {

                if ($this->input('cup') == 'B') {
                    $validator->errors()->add('cup', 'ロリコンにBカップは大きすぎますよ');
                };
            }
        });
    }

    // private function isCrazyAge($validator)
    // {
    //     $rule = [
    //         'age' => 'required|max:12',
    //     ];
    //     // $validator_temp = Validator::make($this->request->all(), $rule);
    //     $validator->sometimes('age', 'max:12', function($input) {
    //         return 12 < $input->age;
    //     });
    //     return $validator->fails();
    // }
}
