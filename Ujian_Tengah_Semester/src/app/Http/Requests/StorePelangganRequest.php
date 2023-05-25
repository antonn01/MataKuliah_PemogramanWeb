<?php

namespace App\Http\Requests;

use App\Models\Pelanggan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePelangganRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pelanggan_create');
    }

    public function rules()
    {
        return [
            'pelangganname' => [
                'string',
                'required',
            ],
            'id_pelanggan' => [
                'string',
                'required',
            ],
            'nama_pelanggan' => [
                'string',
                'required',
            ],
            'email_pelanggan' => [
                'string',
                'required',
            ],
            'no_pelanggan' => [
                'string',
                'required',
            ],
            'jenis_kelamin' => [
                'string',
                'required',
            ],
            'alamat_pelanggan' => [
                'string',
                'required',
            ],
        ];
    }
}
