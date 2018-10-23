<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;


class SiteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
        return view('site.home');
    }

    public function sobrenos()
    {
        return view('site.sobrenos');
    }

    public function servicos()
    {
        return view('site.servicos');
    }

    public function galeria()
    {
        return view('site.galeria');
    }

    public function contato()
    {
        //Mapper::streetview(-9.655908, -35.736241, 1, 1);

        Mapper::map(-9.655927, -35.736158, ['zoom' => 18, 'markers' => ['title' => 'My Location', 'animation' => 'DROP'], 'clusters' => ['size' => 80, 'center' => true, 'zoom' => 20]]);
        Mapper::informationWindow(-9.655927, -35.736158, 'EMBRATER - Limpeza e Terceirização ', ['open' => true, 'maxWidth' => 300,] );
        return view('site.contato');
    }


}
