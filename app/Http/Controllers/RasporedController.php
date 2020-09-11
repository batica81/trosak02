<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Raspored;

class RasporedController extends Controller
{
    public function index()
    {
        return Raspored::all();
    }

    public function show($id)
    {
        return Raspored::find($id);
    }

    public function store(Request $request)
    {
        return Raspored::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Raspored = Raspored::findOrFail($id);
        $Raspored->update($request->all());

        return $Raspored;
    }

    public function delete(Request $request, $id)
    {
        $Raspored = Raspored::findOrFail($id);
        $Raspored->delete();

        return 204;
    }
}
