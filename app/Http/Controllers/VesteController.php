<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Veste;
use Illuminate\Http\Request;

use App\Funcionario;

class VesteController extends Controller
{


    public function getEntregarveste()
    {
        $funcionarios = Funcionario::all()->sortBy('nome');

        $vestes = Veste::all();

        return view('veste/entregarVeste', compact('funcionarios', 'vestes'));
    }

    public function postStoreentregarveste(Request $request)
    {

        echo 'aqui';
        die();
        //echo $_POST['data'];

        $imageEncoded = str_replace("data:image/png;base64,", "", file_get_contents("php://input"));

        $imageDecoded = base64_decode($imageEncoded);

        // Salva a imagem
        file_put_contents("image_screenshotwed.png", print_r($imageDecoded, true));

        $usuario = $request->input('idusuario');
        $funcionario = $request->input('idfuncionario');
        $veste = $request->input('idveste');
        $obs = $request->input('obs');

        dump($request->request);


        die();
    }

    public function getDevolverveste()
    {
        return view('veste/devolverVeste');

    }

    public function getListarentregarveste()
    {
        return view('veste/listarEntregarVeste');

    }

    public function getListardevolverveste()
    {
        return view('veste/listarDevolverVeste');

    }

    //CRUD VESTE
    public function getCrudveste()
    {
        $vestes = Veste::all();
        return view('veste/crudVeste', compact('vestes'));
    }


    //Gravar Tipo Veste
    public function postStoreveste(Request $request)
    {
        $veste = new Veste();
        $veste->tipo = $request->input('tipoveste');
        $veste->save();
        return redirect('/veste/crudveste');

    }

    //Deleta Tipo Veste
    public function getDeleteveste($id)
    {
        $veste = Veste::find($id);
        $veste->delete();
        return redirect('/veste/crudveste');
    }

    //Atualiza Tipo Veste
    public function postUpdateveste()
    {
        //ajax
        return redirect('/veste/crudveste');

    }


    //isso vai morrer
    public function getAssinatura()
    {
        return view('/veste/assinatura');
    }

    public function Assinaturapost(Request $request)
    {
        dd($request->request);
    }

}
