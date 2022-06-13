<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClanResurs;
use App\Models\Clan;
use Illuminate\Http\Request;

class ClanKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clanovi = Clan::all();

        return ClanResurs::collection($clanovi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function show(Clan $clan)
    {
        return new ClanResurs($clan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function edit(Clan $clan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clan $clan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clan  $clan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clan $clan)
    {
        //
    }
}
