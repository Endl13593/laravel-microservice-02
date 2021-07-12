<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreEvaluation
 * @package App\Http\Requests
 * @property string company
 * @property string comment
 * @property int stars
 */
class StoreEvaluation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'company' => 'required',
            'comment' => 'required|min:3,max:99999',
            'stars'   => 'required|min:1,max:5',
        ];
    }
}
