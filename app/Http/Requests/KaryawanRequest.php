<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class KaryawanRequest extends Request
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
        $validate = [
        'nama'=>'required',
        'alamat'=>'required',
        'no_hp'=>'required',
        'jenis_kelamin'=>'required',
        'username'=>'required',
        'password'=>'required',
        ];

        
              

        return $validate;
            //
        
    }
}
