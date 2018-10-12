<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class VisitaRequest extends Request
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
            'idposto' => 'required',
            'horainicio' => 'required',
            'horasaida' => 'required',
            'descricao' => 'required',
            /*'pendencias' => 'required',*/
            'status' => 'required',
            'geolocalizacao' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'idposto.required' => 'O Campo POSTO é obrigatório!',
            'horainicio.required' => 'O Campo horainicio é obrigatório!',
            'horasaida.required' => 'O Campo horasaida é obrigatório!',
            'descricao.required' => 'O Campo descricao é obrigatório!',
            /* 'pendencias.required' => 'O Campo pendencias é obrigatório!',*/
            'status.required' => 'O Campo status é obrigatório!',
            'geolocalizacao.required' => 'É preciso autorizar a LOCALIZAÇÃO no navegador para continuar!'

        ];
    }

}
