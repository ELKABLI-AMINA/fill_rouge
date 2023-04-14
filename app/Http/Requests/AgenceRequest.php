<?php

namespace App\Http\Requests;

use App\Rules\OneAgencePerOwner;
use Illuminate\Foundation\Http\FormRequest;

class AgenceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $userId = auth()->id();
        return [
            'name'=>'required',
            'description'=>'required',
            'logo'=>'required',
            'address'=>'required',
            'ville_id' => 'required',
            // 'city'=>'required',
            // 'one_agence' => [new OneAgencePerOwner($userId)]
        ];
    }
}
