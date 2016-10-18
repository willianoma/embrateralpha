<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Atestadomedico;
use Illuminate\Http\Request;
use App\Funcionario;
use App\Posto;

class AtestadomedicoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $atestadomedicos = Atestadomedico::orderBy('id', 'desc')->paginate(10);

        return view('atestadomedicos.index', compact('atestadomedicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Posto $postos, Funcionario $funcionarios)
    {
        $postos = $postos->all();
        $funcionarios = $funcionarios->all();
        return view('atestadomedicos.create')->with('postos', $postos)->with('funcionarios', $funcionarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $atestadomedico = new Atestadomedico();

        $atestadomedico->usuario = $request->input("usuario");
        $atestadomedico->funcionario = $request->input("funcionario");
        $atestadomedico->posto = $request->input("posto");
        $atestadomedico->obs = $request->input("obs");
        $atestadomedico->datainicio = $request->input("datainicio");
        $atestadomedico->datafinal = $request->input("datafinal");

        $atestadomedico->save();

        return redirect()->route('atestadomedicos.index')->with('message', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $atestadomedico = Atestadomedico::findOrFail($id);

        return view('atestadomedicos.show', compact('atestadomedico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, Posto $postos, Funcionario $funcionarios)
    {
        $atestadomedico = Atestadomedico::findOrFail($id);
        $postos = $postos->all();
        $funcionarios = $funcionarios->all();
        return view('atestadomedicos.edit', compact('atestadomedico'))->with('postos', $postos)->with('funcionarios', $funcionarios);
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
        $atestadomedico = Atestadomedico::findOrFail($id);

        $atestadomedico->usuario = $request->input("usuario");
        $atestadomedico->funcionario = $request->input("funcionario");
        $atestadomedico->posto = $request->input("posto");
        $atestadomedico->obs = $request->input("obs");
        $atestadomedico->datainicio = $request->input("datainicio");
        $atestadomedico->datafinal = $request->input("datafinal");

        $atestadomedico->save();

        return redirect()->route('atestadomedicos.index')->with('message', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $atestadomedico = Atestadomedico::findOrFail($id);
        $atestadomedico->delete();

        return redirect()->route('atestadomedicos.index')->with('message', 'Item deleted successfully.');
    }

    public function comprovante($id)
    {
        $atestadomedico = Atestadomedico::findOrFail($id);
        return view('atestadomedicos/relatorios/comprovanteatestadomedico', compact('atestadomedico'));
    }

}
