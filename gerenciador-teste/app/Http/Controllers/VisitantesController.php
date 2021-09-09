<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class VisitantesController extends Controller
{
    public function index()
    {
        $visitantes = Visitante::all();
        echo "<pre>";
        return view('visitantes.index', array('visitantes' => $visitantes));
    }

    public function show($id)
    {
        $visitante = Visitante::find($id);
        echo "<pre>";
        print_r($visitante);
        echo "<pre>";
    }

    public function create()
    {
        return view('visitantes.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'nome' => 'required|unique:visitantes|min:10',
           'data' => 'requiredmin:10',
        ]);
        $visitante = new Visitante();
        $visitante->nome = $request->input('nome');
        $visitante->data = $request->input('data');
        $visitante->horaEntrada = $request->input('horaEntrada');
        $visitante->horaSaida = $request->input('horaSaida');
        $visitante->departamento = $request->input('departamento');
        if($visitante->save()){
            return redirect('visitantes');
        }
    }

    public function edit($id)
    {
        $visitante = Visitante::find($id);
        return view('visitante.edit', array('visitante' => $visitante));
    }

    public function update($id, Request $request)
    {
        $visitante = Visitante::find($id);
        $this->validate($request, [
            'nome' => 'required|min:10',
            'data' => 'required|min:10',
        ]);
        $visitante->nome = $request->input('nome');
        $visitante->data = $request->input('data');
        $visitante->horaEntrada = $request->input('horaEntrada');
        $visitante->horaSaida = $request->input('horaSaida');
        $visitante->departamento = $request->input('nome');
        $visitante ->save();
        Session::flash('mensagem', 'Visitante alterado com sucesso.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $visitante = Visitante::find($id);
        $visitante->delete();
        Session::flash('mensagem', 'Visitante excluído com sucesso.');
        return redirect()->back();
    }
}
