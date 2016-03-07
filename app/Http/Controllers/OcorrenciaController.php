<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ocorrencia;
use App\Posto;
use App\Funcionario;
use Illuminate\Http\Request;

class OcorrenciaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ocorrencias = Ocorrencia::orderBy('id', 'desc')->paginate(10);

		return view('ocorrencias.index', compact('ocorrencias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Posto $postos, Funcionario $funcionarios)
	{
		$funcionarios = $funcionarios->all();
		$postos = $postos->all();
		return view('ocorrencias.create', compact('postos', 'funcionarios'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$ocorrencia = new Ocorrencia();

		$ocorrencia->usuario = $request->input("usuario");
		$ocorrencia->posto = $request->input("posto");
		$ocorrencia->ocorrencia = $request->input("ocorrencia");
		$ocorrencia->ocorrencia_descricao = $request->input("ocorrencia_descricao");
		$ocorrencia->ocorrencia_data = $request->input("ocorrencia_data");
		$ocorrencia->funcionarios_envolvido = $request->input("funcionarios_envolvido");
		$ocorrencia->fiscal_responsavel = $request->input("fiscal_responsavel");
		$ocorrencia->anexos = $request->input("anexos");

		$ocorrencia->save();

		return redirect()->route('ocorrencias.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ocorrencia = Ocorrencia::findOrFail($id);

		return view('ocorrencias.show', compact('ocorrencia'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ocorrencia = Ocorrencia::findOrFail($id);

		return view('ocorrencias.edit', compact('ocorrencia'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$ocorrencia = Ocorrencia::findOrFail($id);

		$ocorrencia->usuario = $request->input("usuario");
		$ocorrencia->posto = $request->input("posto");
		$ocorrencia->ocorrencia = $request->input("ocorrencia");
		$ocorrencia->ocorrencia_descricao = $request->input("ocorrencia_descricao");
		$ocorrencia->ocorrencia_data = $request->input("ocorrencia_data");
		$ocorrencia->funcionarios_envolvido = $request->input("funcionarios_envolvido");
		$ocorrencia->fiscal_responsavel = $request->input("fiscal_responsavel");
		$ocorrencia->anexos = $request->input("anexos");

		$ocorrencia->save();

		return redirect()->route('ocorrencias.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ocorrencia = Ocorrencia::findOrFail($id);
		$ocorrencia->delete();

		return redirect()->route('ocorrencias.index')->with('message', 'Item deleted successfully.');
	}

}
