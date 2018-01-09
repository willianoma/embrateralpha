<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Motivo;
use Illuminate\Http\Request;

class MotivoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$motivos = Motivo::orderBy('id', 'desc')->paginate(10);

		return view('motivos.index', compact('motivos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('motivos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$motivo = new Motivo();

		$motivo->descricao = $request->input("descricao");
        $motivo->obs = $request->input("obs");

		$motivo->save();

		return redirect()->route('motivos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$motivo = Motivo::findOrFail($id);

		return view('motivos.show', compact('motivo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$motivo = Motivo::findOrFail($id);

		return view('motivos.edit', compact('motivo'));
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
		$motivo = Motivo::findOrFail($id);

		$motivo->descricao = $request->input("descricao");
        $motivo->obs = $request->input("obs");

		$motivo->save();

		return redirect()->route('motivos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$motivo = Motivo::findOrFail($id);
		$motivo->delete();

		return redirect()->route('motivos.index')->with('message', 'Item deleted successfully.');
	}

}
