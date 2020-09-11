<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Trosak;

class TrosakController extends Controller
{
    public function index()
    {
        return Trosak::all();
    }

    public function show($id)
    {
        return Trosak::find($id);
    }

    public function store(Request $request)
    {
        return Trosak::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Trosak = Trosak::findOrFail($id);
        $Trosak->update($request->all());

        return $Trosak;
    }

    public function delete(Request $request, $id)
    {
        $Trosak = Trosak::findOrFail($id);
        $Trosak->delete();

        return 204;
    }
}
