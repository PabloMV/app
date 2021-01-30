<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelsAgenda;

class agendaController extends Controller
{
    /**
    */
    public function index()
    {
        return ModelsAgenda::all();
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        ModelsAgenda::create($request->all());
    }

    public function show($id)
    {
        return ModelsAgenda::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $infoAg= ModelsAgenda::findOrFail($id);
        $infoAg->update($request->all());
    }
    public function destroy($id)
    {
        $infoAg= ModelsAgenda::findOrFail($id);
        $infoAg->delete();
    }
}
