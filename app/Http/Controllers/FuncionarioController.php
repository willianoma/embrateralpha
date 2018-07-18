<?php namespace App\Http\Controllers;

use App\FuncionariosFilhos;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use DB;
use App\Funcionario;
use App\Posto;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Schema;


// include composer autoload


use Intervention\Image\ImageManagerStatic as Image;
use PhpParser\Node\Expr\Array_;

class FuncionarioController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index(Posto $postos, Request $request)
    {
        //para o select de busca
        $postos = $postos->all();

        $posto = $request->input('postoselecionado');

        $nome = $request->input('buscanome');
        if ($nome == '') {
            $nome = 'vazio';
        }

        $status = $request->input('status');

        /*var_dump($posto);
        var_dump($nome);
        var_dump($status);*/

        //Clicou no menu listar funcionarios (listar todos)
        if (!isset($posto) and $nome == 'vazio' and !isset($status)) {
            $funcionarios = Funcionario::orderBy('nome', 'asc')->where('status', 'Ativo')->paginate(20);
            $render = true;
        } else

            //Busca Posto
            if ($posto != "vazio" and $nome == "vazio" and $status == "vazio") {
                //echo 'Busca Posto';
                $funcionarios = DB::table('funcionarios')->where('posto', $posto)->orderBy('nome', 'asc')->get();
                $render = false;
            } else

                //Busca Posto+Nome
                if ($posto != "vazio" and $nome != "vazio" and $status == "vazio") {
                    //echo 'Busca Posto+Nome';
                    $funcionarios = DB::table('funcionarios')->where('nome', 'like', "%" . $nome . "%")->where('posto', $posto)->orderBy('nome', 'asc')->get();
                    $render = false;
                } else

                    //Busca Posto+Status
                    if ($posto != "vazio" and $nome == "vazio" and $status != "vazio") {
                        //echo 'Busca Posto+Status';
                        $funcionarios = DB::table('funcionarios')->where('posto', $posto)->where('status', $status)->orderBy('nome', 'asc')->get();
                        $render = false;
                    } else

                        //Busca Por Nome
                        if ($posto == "vazio" and $nome != "vazio" and $status == "vazio") {
                            //echo "Busca Por Nome";
                            $funcionarios = DB::table('funcionarios')->where('nome', 'like', "%" . $nome . "%")->orderBy('nome', 'asc')->get();
                            $render = false;
                        } else

                            //Busca Por Nome+Status
                            if ($posto == "vazio" and $nome != "vazio" and $status != "vazio") {
                                //echo "Busca Por Nome";
                                $funcionarios = DB::table('funcionarios')->where('nome', 'like', "%" . $nome . "%")->where('status', $status)->orderBy('nome', 'asc')->get();
                                $render = false;
                            } else

                                //Busca Por Status
                                if ($posto == "vazio" and $nome == "vazio" and $status != "vazio") {
                                    //echo "Busca Por Status";
                                    $funcionarios = DB::table('funcionarios')->where('status', $status)->orderBy('nome', 'asc')->get();
                                    $render = false;
                                } else

                                    //busca Em Branco
                                    if ($posto == "vazio" and $nome == "vazio" and $status == "vazio") {
                                        $funcionarios = Funcionario::orderBy('nome', 'asc')->where('status', 'Ativo')->paginate(20);
                                        $render = true;
                                    } // Nome+Status ou Posto+Nome+Status
                                    else {
                                        $funcionarios = Funcionario::orderBy('nome', 'asc')->where('status', 'Ativo')->paginate(20);
                                        $render = true;

                                    }


        return view('funcionarios.index', compact('funcionarios', 'postos', 'render'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Posto $postos)
    {
        $postos = $postos->all();
        return view('funcionarios.create')->with('postos', $postos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $funcionario = new Funcionario();

        //$funcionario->profleimage = $request->input("profleimage");
        $funcionario->nome = $request->input("nome");
        $funcionario->sexo = $request->input("sexo");
        $funcionario->posto = $request->input("posto");
        $funcionario->cpf = $request->input("cpf");
        $funcionario->rg = $request->input("rg");
        $funcionario->ctps = $request->input("ctps");
        $funcionario->endereco = $request->input("endereco");
        $funcionario->nascimento = $request->input("nascimento");
        $funcionario->pis_pasep = $request->input("pis_pasep");
        $funcionario->reservista = $request->input("reservista");
        $funcionario->titulo_eleitor = $request->input("titulo_eleitor");
        $funcionario->telefone = $request->input("telefone");
        $funcionario->email = $request->input("email");
        $funcionario->data_admissao = $request->input("data_admissao");
        $funcionario->funcao = $request->input("funcao");
        $funcionario->farda = $request->input("farda");
        $funcionario->bota = $request->input("bota");
        //$funcionario->filiacao = $request->input("filiacao");

        //Arrumar isso no futuro.
        $filiacaopai = $request->input("filiacaopai");
        $filiacaomae = $request->input("filiacaomae");
        $funcionario->filiacao = $filiacaopai . " / " . $filiacaomae;;

        $funcionario->filhos = $request->input("filhos");
        $funcionario->banco = $request->input("banco");
        $funcionario->banco_conta = $request->input("banco_conta");
        $funcionario->banco_agencia = $request->input("banco_agencia");
        $funcionario->banco_tipo = $request->input("banco_tipo");
        $funcionario->contato_emergencia = $request->input("contato_emergencia");
        $funcionario->tipo_sanguineo = $request->input("tipo_sanguineo");
        $funcionario->estado_civil = $request->input("estado_civil");
        $funcionario->nome_conjuge = $request->input("nome_conjuge");
        $funcionario->grau_instrucao = $request->input("grau_instrucao");
        $funcionario->deficiencia = $request->input("deficiencia");
        $funcionario->recebe_vale_transporte = $request->input("recebe_vale_transporte");
        $funcionario->cargo = $request->input("cargo");
        $funcionario->cbo = $request->input("cbo");
        $funcionario->aso = $request->input("aso");
        $funcionario->referencia = $request->input("referencia");
        $funcionario->preenchida_por = $request->input("preenchida_por");
        $funcionario->obs = $request->input("obs");
        $funcionario->horario = $request->input("horario");
        $funcionario->tipo = $request->input("tipo");
        $funcionario->status = $request->input("status");


        $funcionariosDB = DB::table('funcionarios')->get();

        if (!empty($funcionariosDB)) {
            $nextIdFuncionario = $funcionario->orderBy('id', 'desc')->first()->id + 1;
        }
        if (empty($funcionariosDB)) {
            $nextIdFuncionario = 1;
        }


        /*     //     START  REFATORAR ISSO AQUI, JOGAR NO MODEL!

             if ($this->hasPis($funcionario->pis_pasep) == true) {
                 echo "<h3>PIS já cadastrado da base de dados, Clique em voltar no navegador!</h3>";
                 die();
             }
             //       END REFATORAR ISSO AQUI, JOGAR NO MODEL!*/


        //Upload
        $profileImage = $request->file('profleimage');
        if ($request->hasFile('profleimage') && $profileImage->isValid()) {
            if ($profileImage->getClientMimeType() == "image/jpeg" || $profileImage->getClientMimeType() == "image/jpg" || $profileImage->getClientMimeType() == "image/png") {
                $nomeArquivo = $nextIdFuncionario . '.png';
                $profileImage->move('profilesimages', $nomeArquivo);
                $funcionario->profleimage = 'profilesimages/' . $nomeArquivo;

                //Faltar obrigar imagem em portrait

                Image::make($funcionario->profleimage)->resize(480, 640)->save();

                $funcionario->save();
            }
            //if hasn't image profile
        } else {
            $funcionario->profleimage = 'guest.png';
            $funcionario->save();
        }
        //End Upload profile image


        return redirect()->route('funcionarios.index')->with('message', 'Item created successfully.');
    }

    //     START  REFATORAR ISSO AQUI, JOGAR NO MODEL!

    public function hasPis($pis)
    {
        $funcionarios = Funcionario::all();
        foreach ($funcionarios as $funcionario) {
            if ($funcionario->pis_pasep == $pis) {
                return true;
            }
        }
    }

    //       END REFATORAR ISSO AQUI, JOGAR NO MODEL!


    public function show($id)
    {

        $funcionario = Funcionario::findOrFail($id);


        return view('funcionarios.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, Posto $postos)
    {

        $funcionario = Funcionario::findOrFail($id);
        $postos = $postos->all();


        return view('funcionarios.edit', compact('funcionario'))->with('postos', $postos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);

        //$funcionario->profleimage = $request->input("profleimage");
        $funcionario->nome = $request->input("nome");
        $funcionario->sexo = $request->input("sexo");
        $funcionario->posto = $request->input("posto");
        $funcionario->cpf = $request->input("cpf");
        $funcionario->rg = $request->input("rg");
        $funcionario->ctps = $request->input("ctps");
        $funcionario->endereco = $request->input("endereco");
        $funcionario->nascimento = $request->input("nascimento");
        $funcionario->pis_pasep = $request->input("pis_pasep");
        $funcionario->reservista = $request->input("reservista");
        $funcionario->titulo_eleitor = $request->input("titulo_eleitor");
        $funcionario->telefone = $request->input("telefone");
        $funcionario->email = $request->input("email");
        $funcionario->data_admissao = $request->input("data_admissao");
        $funcionario->funcao = $request->input("funcao");
        $funcionario->farda = $request->input("farda");
        $funcionario->bota = $request->input("bota");
        $funcionario->filiacao = $request->input("filiacao");
        $funcionario->filhos = $request->input("filhos");
        $funcionario->banco = $request->input("banco");
        $funcionario->banco_conta = $request->input("banco_conta");
        $funcionario->banco_agencia = $request->input("banco_agencia");
        $funcionario->banco_tipo = $request->input("banco_tipo");
        $funcionario->contato_emergencia = $request->input("contato_emergencia");
        $funcionario->tipo_sanguineo = $request->input("tipo_sanguineo");
        $funcionario->estado_civil = $request->input("estado_civil");
        $funcionario->nome_conjuge = $request->input("nome_conjuge");
        $funcionario->grau_instrucao = $request->input("grau_instrucao");
        $funcionario->deficiencia = $request->input("deficiencia");
        $funcionario->recebe_vale_transporte = $request->input("recebe_vale_transporte");
        $funcionario->cargo = $request->input("cargo");
        $funcionario->cbo = $request->input("cbo");
        $funcionario->aso = $request->input("aso");
        $funcionario->referencia = $request->input("referencia");
        $funcionario->preenchida_por = $request->input("preenchida_por");
        $funcionario->obs = $request->input("obs");
        $funcionario->horario = $request->input("horario");
        $funcionario->tipo = $request->input("tipo");
        $funcionario->status = $request->input("status");


        $profileImage = $request->file('profleimage');


        if ($request->hasFile('profleimage') && $profileImage->isValid()) {
            if ($profileImage->getClientMimeType() == "image/jpeg" || $profileImage->getClientMimeType() == "image/png" || $profileImage->getClientMimeType() == "image/jpg") {

                $nomeArquivo = $funcionario->id . '.' . 'png';


                $profileImage->move('profilesimages', $nomeArquivo);
                $funcionario->profleimage = 'profilesimages/' . $nomeArquivo;

                //Ver problema com JPG, girando automaticamente e sem sucesso de save com o metodo abaixo em mobile...
                $height = Image::make($funcionario->profleimage)->height();
                $wigth = Image::make($funcionario->profleimage)->width();


                /*   if ($height < $wigth) {
                       return redirect()->route('funcionarios.index')->with('message', 'Posicionamento de foto incorreta');

                   } else {*/
                Image::make($funcionario->profleimage)->resize(480, 640)->save();
            }
        }


        $funcionario->save();

        return redirect()->route('funcionarios.index')->with('message', 'Funcionario Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {

        if (Auth::user()->email == 'willianoma@hotmail.com') {
            $menssagem = 'Funcionários Deletado!';
            $funcionario = Funcionario::findOrFail($id);
            $funcionario->delete();
            $this->Destroyfilhos($id);
        } else {
            $menssagem = 'Você não tem permissão para deletar um funcionário!';
        }


        return redirect()->route('funcionarios.index')->with('message', $menssagem);;
    }


    public function filtro()
    {
        //cateira de trabalho = 0000000
        //não tem!

        $posto = 'hdt';

        $funcionarios = DB::table('funcionarios')->where('posto', $posto)->get();

        //verificar agora quais campos estão nulos

        var_dump($funcionarios);
        die();

        return view('funcionarios.filtro', compact('funcionarios'));


    }

    public function correcoes(Request $request)
    {


        return view('funcionarios.correcoes.correcoes', compact('funcionarios'));


    }

    public function formcorrecoessexo(Request $request)
    {


        $funcionarios = Funcionario::all();


        return view('funcionarios.correcoes.sexo', compact('funcionarios'));
    }

    public function corecoessexoupdate(Request $request, Funcionario $funcionario, $id, $sexo)
    {
        // $sexoSelecionado = $request->input("sexo");
        $funcionario = Funcionario::findOrFail($id);


        DB::table('funcionarios')->where('id', $id)->update(['sexo' => $sexo]);

        var_dump($funcionario->nome);
        var_dump($id);
        var_dump($sexo);


    }


    public function formcorrecoes(Request $request)
    {
        $camposel = $request->input("camposelecionado");
        $campoRequest = array();

        for ($i = 0; $i < count($camposel); $i++)
            array_push($campoRequest, $camposel{$i});

        $campos = $this->getCampos();

        $funcionariosPendente = array();

        foreach ($campoRequest as $campo) {
            $funcionarios = DB::table('funcionarios')->where($campo, '=', '')->orWhere($campo, '=', null)->get();

            array_push($funcionariosPendente, array('campo' => $campo, 'funcionarios' => $funcionarios));
        }

        return view('funcionarios.correcoes.correcoes', compact('funcionariosPendente', 'campos'));
    }

    public function formcorrecoesfotos(Request $request)
    {
        $postosel = $request->input("posto");

        $funcionariosSemFoto = Funcionario::where('profleimage', '=', '')->orWhere('profleimage', '=', 'guest.png')->where('posto', '=', $postosel)->orderBy('nome', 'asc')->get();
        $postos = Posto::all();
        return view('funcionarios.correcoes.fotos', compact('funcionariosSemFoto', 'postos'));
    }

    public function updateCorrecoesfotos(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $profileImage = $request->file('profleimage');


        if ($request->hasFile('profleimage') && $profileImage->isValid()) {
            if ($profileImage->getClientMimeType() == "image/jpeg" || $profileImage->getClientMimeType() == "image/png" || $profileImage->getClientMimeType() == "image/jpg") {

                $nomeArquivo = $funcionario->id . '.' . 'png';


                $profileImage->move('profilesimages', $nomeArquivo);
                $funcionario->profleimage = 'profilesimages/' . $nomeArquivo;

                //Ver problema com JPG, girando automaticamente e sem sucesso de save com o metodo abaixo em mobile...
                $height = Image::make($funcionario->profleimage)->height();
                $wigth = Image::make($funcionario->profleimage)->width();


                /*   if ($height < $wigth) {
                       return redirect()->route('funcionarios.index')->with('message', 'Posicionamento de foto incorreta');

                   } else {*/
                Image::make($funcionario->profleimage)->resize(480, 640)->save();
            }
        }


        $funcionario->save();


        return redirect('/funcionarios/correcoes/fotos')->with('message', 'Foto Atualizado com sucesso!');

    }

    public function imprimianiversariantes()
    {

    }

    public function mostraraniversariantes($mes)
    {


        $aniversariantesMes = json_decode($this->getAniversariantes($mes));
        $mescontrole = $mes;
        $mesobj = DateTime::createFromFormat('!m', $mes);
        $mescomposto = $mesobj->format('F');

        return view('funcionarios.mostraraniversariantes', compact('aniversariantesMes', 'mescomposto', 'mescontrole'));
    }

    public function getAniversariantes($mes)
    {
        $funcAniversariantes = Funcionario::whereMonth('nascimento', '=', ($mes))->where('status', '=', 'Ativo')->orderBy('posto', 'asc')->get();
        $aniversariantes = array();

        foreach ($funcAniversariantes as $func) {

            $idade = Carbon::parse($func['nascimento'])->age;
            $nascimento = date('d/m/Y', strtotime($func->nascimento));
            array_push($aniversariantes, array(
                'id' => $func->id,
                'nome' => $func->nome,
                'idade' => $idade,
                'nascimento' => $nascimento,
                'posto' => $func->posto,
                'foto' => $func->profleimage
            ));
        }

        return json_encode($aniversariantes);

    }

    public function getCampos()
    {
        $campos = array();
        array_push($campos, 'id');
        array_push($campos, 'profleimage');
        array_push($campos, 'nome');
        array_push($campos, 'posto');
        array_push($campos, 'cpf');
        array_push($campos, 'rg');
        array_push($campos, 'ctps');
        array_push($campos, 'endereco');
        array_push($campos, 'nascimento');
        array_push($campos, 'pis_pasep');
        array_push($campos, 'reservista');
        array_push($campos, 'titulo_eleitor');
        array_push($campos, 'telefone');
        array_push($campos, 'email');
        array_push($campos, 'data_admissao');
        array_push($campos, 'funcao');
        array_push($campos, 'farda');
        array_push($campos, 'bota');
        array_push($campos, 'filiacao');
        array_push($campos, 'filhos');
        array_push($campos, 'banco');
        array_push($campos, 'banco_conta');
        array_push($campos, 'banco_agencia');
        array_push($campos, 'banco_tipo');
        array_push($campos, 'contato_emergencia');
        array_push($campos, 'tipo_sanguineo');
        array_push($campos, 'estado_civil');
        array_push($campos, 'nome_conjuge');
        array_push($campos, 'grau_instrucao');
        array_push($campos, 'deficiencia');
        array_push($campos, 'recebe_vale_transporte');
        array_push($campos, 'cargo');
        array_push($campos, 'cbo');
        array_push($campos, 'aso');
        array_push($campos, 'referencia');
        array_push($campos, 'preenchida_por');
        array_push($campos, 'obs');
        array_push($campos, 'horario');
        array_push($campos, 'tipo');
        array_push($campos, 'status');
        return $campos;
    }

    public function Associarfilho($idfuncionario)
    {
        $funcionarios = Funcionario::orderBy('nome', 'asc')->get();

        if ($idfuncionario == 'undefined') {
            $filhos = FuncionariosFilhos::all();
        }

        if ($idfuncionario <> 'undefined') {
            $funcionario = Funcionario::find($idfuncionario);
            $filhos = $funcionario->getFilhos()->get();
        }

        return view('funcionarios.filhos.associar', compact('funcionarios', 'funcionario', 'filhos'));
    }

    public
    function StoreAssociarfilho(Request $request)
    {

        $funcionariosfilho = new FuncionariosFilhos();
        $funcionariosfilho->nome = $request->input("nome-filho");
        $funcionariosfilho->nascimento = $request->input("nascimento-filho");
        $funcionariosfilho->idfuncionario = $request->input("funcionario-filho");
        $funcionariosfilho->save();
        return redirect('/funcionarios/associarfilho/' . $funcionariosfilho->idfuncionario)->with('message', 'Filho associado com sucesso!');


    }


    public
    function Criarfilho()
    {
        //ajax
        return 'Criarfilho';

    }

    public
    function EditarFilho()
    {
        //ajax com lista
        return 'EditarFilho';

    }

    public
    function Storefilho()
    {
        return 'StoreFilho';

    }

    public
    function Updatefilho()
    {
        return 'UpdateFilho';

    }

    public function Destroyfilho($idfilho)
    {
        $filho = FuncionariosFilhos::find($idfilho);
        $filho->delete();
        return redirect('/funcionarios/associarfilho/' . $filho->idfuncionario)->with('message', 'Filho associado com sucesso!');

    }

    public
    function Destroyfilhos($idFuncionarios)
    {
        $filhos = FuncionariosFilhos::where('idfuncionario', '=', $idFuncionarios);
        $filhos->delete();


    }

}






/*
 *
 * Lixo
 *
 *
 //tentativa de match entre checkbox+banco

 $funcionarios = DB::table('funcionarios')->get();
     foreach ($funcionarios as $funcionario) {
         foreach ($req as $re) {
             if (isset($req['id'])) {
                 var_dump($req['id']);
                 var_dump($funcionario->id);
             }
             //var_dump($funcionario);
             die();


         }
     }*/


/*
       $funcionario->id
       $funcionario->profleimage
       $funcionario->nome
       $funcionario->posto
       $funcionario->cpf
       $funcionario->rg
       $funcionario->ctps
       $funcionario->endereco
       $funcionario->nascimento
       $funcionario->pis_pasep
       $funcionario->reservista
       $funcionario->titulo_eleitor;
       $funcionario->telefone
       $funcionario->email
       $funcionario->data_admissao
       $funcionario->funcao
       $funcionario->farda
       $funcionario->bota
       $funcionario->filiacao
       $funcionario->filhos
       $funcionario->banco
       $funcionario->banco_conta
       $funcionario->banco_agencia
       $funcionario->banco_tipo
       $funcionario->contato_emergencia
       $funcionario->tipo_sanguineo
       $funcionario->estado_civil
       $funcionario->nome_conjuge
       $funcionario->grau_instrucao
       $funcionario->deficiencia
       $funcionario->recebe_vale_transporte
       $funcionario->cargo
       $funcionario->cb
       $funcionario->aso
       $funcionario->referencia
       $funcionario->preenchida_por
       $funcionario->obs
       $funcionario->horario
       $funcionario->tipo
       $funcionario->status*/


//die();


/*$req = $request->all();*/
//var_dump($req);
/*       foreach ($req as $key) {
           if ($req) {
               $operador = '=';



               $func = DB::table('funcionarios')
                   ->where('id', $operador, '')
                   ->orwhere('profleimage', $operador, '')
                   ->orwhere('nome', $operador, '')
                   ->orwhere('posto', $operador, '')
                   ->orwhere('cpf', $operador, '')
                   ->orwhere('rg', $operador, '')
                   ->orwhere('ctps', $operador, '')
                   ->orwhere('endereco', $operador, '')
                   ->orwhere('nascimento', $operador, '')
                   ->orwhere('pis_pasep', $operador, '')
                   ->orwhere('reservista', $operador, '')
                   ->orwhere('titulo_eleitor', $operador, '')
                   ->orwhere('telefone', $operador, '')
                   ->orwhere('email', $operador, '')
                   ->orwhere('data_admissao', $operador, '')
                   ->orwhere('funcao', $operador, '')
                   ->orwhere('farda', $operador, '')
                   ->orwhere('bota', $operador, '')
                   ->orwhere('filiacao', $operador, '')
                   ->orwhere('filhos', $operador, '')
                   ->orwhere('banco', $operador, '')
                   ->orwhere('banco_conta', $operador, '')
                   ->orwhere('banco_agencia', $operador, '')
                   ->orwhere('banco_tipo', $operador, '')
                   ->orwhere('contato_emergencia', $operador, '')
                   ->orwhere('tipo_sanguineo', $operador, '')
                   ->orwhere('estado_civil', $operador, '')
                   ->orwhere('nome_conjuge', $operador, '')
                   ->orwhere('grau_instrucao', $operador, '')
                   ->orwhere('deficiencia', $operador, '')
                   ->orwhere('recebe_vale_transporte', $operador, '')
                   ->orwhere('cargo', $operador, '')
                   ->orwhere('cbo', $operador, '')
                   ->orwhere('aso', $operador, '')
                   ->orwhere('referencia', $operador, '')
                   ->orwhere('obs', $operador, '')
                   ->orwhere('horario', $operador, '')
                   ->orwhere('tipo', $operador, '')
                   ->orwhere('status', $operador, '')
                   ->get();
           }
       }
       var_dump($func);
       die();*/
