<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'artiste_name' => 'required|string',
            'date' => 'required|date_format:Y-m-d',
            'scene' => 'required|string',
            'description' => 'required|string',
            'horaire' => 'required|string',
            'category_id' => 'required|exists:category,id',
        ];
    }
}
