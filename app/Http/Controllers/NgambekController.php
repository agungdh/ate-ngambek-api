<?php

namespace App\Http\Controllers;

use App\Http\Requests\NgambekRequest;
use App\Http\Requests\NgambekSelesaiRequest;
use App\Models\Ngambek;
use Illuminate\Http\Request;

class NgambekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ngambek::with('selesai')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NgambekRequest $request)
    {
        Ngambek::query()->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Ngambek $ngambek)
    {
        $ngambek->load('selesai');

        return $ngambek;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NgambekRequest $request, Ngambek $ngambek)
    {
        $ngambek->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ngambek $ngambek)
    {
        $ngambek->delete();
    }

    public function selesai(NgambekSelesaiRequest $request, Ngambek $ngambek) {
        $ngambek->selesai()->create($request->validated());
    }

    public function batalSelesai(Ngambek $ngambek) {
        $ngambek->selesai()->delete();
    }
}
