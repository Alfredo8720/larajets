<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\metodosController;
use App\Models\Matematica;
class Storejet extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
        'email'=>'required',
        'm1'=>'required',
        'm2'=>'required',
        'm3'=>'required',
        'm4'=>'required',
        'm5'=>'required',
        'm6'=>'required',
        'm7'=>'required',
        'm8'=>'required',
        'm9'=>'required',
        'm10'=>'required',
        'm11'=>'required',
        'm12'=>'required',
        'm13'=>'required',
        'm14'=>'required',
        'm15'=>'required',
        'r16'=>'required',
        'm17'=>'required',
        'm18'=>'required',
        'm19'=>'required',
        'm20'=>'required',
        'm21'=>'required',
        'm22'=>'required',
        'm23'=>'required',
        'm24'=>'required',
        'm25'=>'required',
        'm26'=>'required',
        'm27'=>'required',
        'm28'=>'required',
        'm29'=>'required',
        'm30'=>'required',
        ];
    }
}
