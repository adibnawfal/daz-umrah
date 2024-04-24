<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class AddressUpdateRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  // public function authorize(): bool
  // {
  //   return false;
  // }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'address1' => ['nullable', 'string', 'max:255'],
      'address2' => ['nullable', 'string', 'max:255'],
      'postal_code' => ['nullable', 'integer', 'min:0'],
      'city' => ['nullable', 'string', 'max:255'],
      'state' => ['nullable', 'string', 'max:255'],
    ];
  }
}
