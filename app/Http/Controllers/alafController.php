<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alaf;
use App\Models\film;

class alafController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function alaf()
    {
        $alaf = alaf::all();
        $film = film::all();
        return view('alaf', compact('alaf','film'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
