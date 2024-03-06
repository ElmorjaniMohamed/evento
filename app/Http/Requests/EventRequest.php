<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'location' => 'required|string',
            'image' => 'required|string',
            'places_available' => 'required|integer|min:0',
            'tickets_booked' => 'integer|min:0',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Pending,Accepted,Rejected',
            'type_reservation' => 'required|in:manual,automatic',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
            'date.required' => 'The date field is required.',
            'date.after_or_equal' => 'The date must be today or in the future.',
            'location.required' => 'The location field is required.',
            'image.required' => 'The image field is required.',
            'places_available.required' => 'The places available field is required.',
            'places_available.integer' => 'The places available must be an integer.',
            'places_available.min' => 'The places available must be at least :min.',
            'tickets_booked.integer' => 'The tickets booked must be an integer.',
            'tickets_booked.min' => 'The tickets booked must be at least :min.',
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least :min.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The selected status is invalid.',
            'type_reservation.required' => 'The type reservation field is required.',
            'type_reservation.in' => 'The selected type reservation is invalid.',
            'category_id.required' => 'The category field is required.',
            'category_id.exists' => 'The selected category is invalid.'
        ];
    }
}
