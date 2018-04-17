<?php namespace App\Http\Controllers;

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
            $funcionarios = Funcionario::orderBy('nome', 'asc')->paginate(20);
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

                            //Busca Por Status
                            if ($posto == "vazio" and $nome == "vazio" and $status != "vazio") {
                                //echo "Busca Por Status";
                                $funcionarios = DB::table('funcionarios')->where('status', $status)->orderBy('nome', 'asc')->get();
                                $render = false;
                            } else

                                //busca Em Branco
                                if ($posto == "vazio" and $nome == "vazio" and $status == "vazio") {
                                    $funcionarios = Funcionario::orderBy('nome', 'asc')->paginate(20);
                                    $render = true;
                                } // Nome+Status ou Posto+Nome+Status
                                else {
                                    $funcionarios = Funcionario::orderBy('nome', 'asc')->paginate(20);
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

        //dd($profileImage->isValid());
        //die();


        if ($request->hasFile('profleimage') && $profileImage->isValid()) {
            if ($profileImage->getClientMimeType() == "image/jpeg" || $profileImage->getClientMimeType() == "image/png" || $profileImage->getClientMimeType() == "image/jpg") {

                // $nomeArquivo = $funcionario->pis_pasep . '.' . $profileImage->getClientOriginalExtension();

                $nomeArquivo = $funcionario->id . '.' . 'png';


                $profileImage->move('profilesimages', $nomeArquivo);
                $funcionario->profleimage = 'profilesimages/' . $nomeArquivo;

                // var_dump($funcionario->profleimage);

                //   $img = WideImage::load($funcionario->profleimage);
                //   $img = $img->resize(200, 200, 'inside');
                //   $img->saveToFile('/imagens/minha_foto_menor.jpg');

                //   die();

                //Ver problema com JPG, girando automaticamente e sem sucesso de save com o metodo abaixo em mobile...
                Image::make($funcionario->profleimage)->resize(480, 640)->save();
            }
        }


        $funcionario->save();

        return redirect()->route('funcionarios.index')->with('message', 'Item updated successfully.');
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

    public function formcorrecoes(Request $request, Posto $postos)
    {
        $operador = '=';
        $funcionarios = DB::table('funcionarios')
            ->where('id', $operador, '')
            ->orwhere('nome', $operador, '')
            ->orwhere('posto', $operador, '')
            ->orwhere('cpf', $operador, '')
            ->orwhere('rg', $operador, '')
            ->orwhere('ctps', $operador, '')
            ->orwhere('endereco', $operador, '')
            ->orwhere('nascimento', $operador, '')
            ->orwhere('pis_pasep', $operador, '')
            ->orwhere('data_admissao', $operador, '')
            ->orwhere('horario', $operador, '')
            ->orwhere('tipo', $operador, '')
            ->orwhere('status', $operador, '')
            ->get();


        foreach ($funcionarios as $funcionario) {
            if (empty($funcionario->id)) {
                $funcionario->id == "!!PREENCHER!!";
            }
            if (empty($funcionario->nome)) {
                $funcionario->nome == "!!PREENCHER!!";
            }
            if (empty($funcionario->posto)) {
                $funcionario->posto == "!!PREENCHER!!";
            }
            if (empty($funcionario->cpf)) {
                $funcionario->cpf == "!!PREENCHER!!";
            }

            if (empty($funcionario->rg)) {
                $funcionario->rg == "!!PREENCHER!!";
            }
            if (empty($funcionario->ctps)) {
                $funcionario->ctps == "!!PREENCHER!!";
            }
            if (empty($funcionario->endereco)) {
                $funcionario->endereco == "!!PREENCHER!!";
            }
            if (empty($funcionario->nascimento)) {
                $funcionario->nascimento == "!!PREENCHER!!";
            }

            if (empty($funcionario->pis_pasep)) {
                $funcionario->pis_pasep == "!!PREENCHER!!";

            }
            if (empty($funcionario->data_admissao)) {
                $funcionario->data_admissao == "!!PREENCHER!!";
            }

            if (empty($funcionario->horario)) {
                $funcionario->horario == "!!PREENCHER!!";
            }

            if (empty($funcionario->tipo)) {
                $funcionario->tipo == "!!PREENCHER!!";
            }
            if (empty($funcionario->status)) {
                $funcionario->status == "!!PREENCHER!!";
            }


        }

        return view('funcionarios.correcoes.correcoes', compact('funcionarios'));

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
        $funcAniversariantes = Funcionario::whereMonth('nascimento', '=', ($mes))->orderBy('posto', 'asc')->get();
        $aniversariantes = array();

        foreach ($funcAniversariantes as $func) {

            $idade = Carbon::parse($func['nascimento'])->age;
            $nascimento = date('d/m/Y', strtotime($func->nascimento));
            array_push($aniversariantes, array(
                'id' => $func->id,
                'nome' => $func->nome,
                'idade' => $idade,
                'nascimento' => $nascimento,
                'posto' => $func->posto
            ));
        }

        return json_encode($aniversariantes);

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


/*       $funcionario->id
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
