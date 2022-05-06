<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventosController extends Controller
{
    public function index()
    {
        //
        return view('eventos.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        request()->validate(Eventos::$rules);
        $eventos=Eventos::create($request->all());
    }

    public function show(Eventos $eventos)
    {
        //
        $eventos=Eventos::all();
        return response()->json($eventos);
    }

    public function edit($id)
    {
        //
        $eventos = Eventos::find($id);
        return response()->json($eventos);
    }

    public function update(Request $request, $id)
    {
        //
        request()->validate(Eventos::$rules);
        $eventos = Eventos::find($id);
        $eventos->title = $request->get('title');
        $eventos->observacao = $request->get('observacao');
        $eventos->start = $request->get('start');
        $eventos->end = $request->get('end');
        $eventos->local = $request->get('local');
        $eventos->status = $request->get('status');
        $eventos->save();
        return redirect('/agenda')->with('success', 'Evento atualizado.');
    }

    public function destroy($id)
    {
        //
        $eventos = Eventos::find($id)->delete();
        return response()->json($eventos);
    }
}
