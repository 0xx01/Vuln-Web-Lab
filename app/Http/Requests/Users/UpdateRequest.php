<?php

namespace App\Http\Requests\Users;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'  => ['string', 'max:50'],
            'email' => ['email', 'max:255'],
            'current_password'  => ['required', 'current-password'],
        ];
    }

    public function updateinfo(){
        $user = User::all()->where('id',auth()->user()->id)->first();
        $user->update($this->all());
    }
}
