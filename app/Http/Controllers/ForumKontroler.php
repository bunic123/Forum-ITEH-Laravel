<?php

namespace App\Http\Controllers;

use App\Http\Resources\ForumResurs;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ForumKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forumi = Forum::all();

        return ForumResurs::collection($forumi);
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
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        return new ForumResurs($forum);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        $validator = Validator::make($request->all(), [
            'url' => 'required|string',
            'email' => 'required|email',
            'instagram' => 'required|string',
            'osnivac' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $forum->url = $request->url;
        $forum->email = $request->email;
        $forum->instagram = $request->instagram;
        $forum->osnivac = $request->osnivac;
        $forum->save();

        return response()->json('Željeni forum je uspešno ažuriran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();

        return response()->json('Forum je uspešno obrisan!');
    }
}
