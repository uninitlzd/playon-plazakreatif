<?php

namespace App\Http\Controllers;

use App\Models\Talkshow;
use Illuminate\Http\Request;

class TalkshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Talkshow  $talkshow
     * @return \Illuminate\Http\Response
     */
    public function show(Talkshow $talkshow)
    {
        return view('pages.talkshow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talkshow  $talkshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Talkshow $talkshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talkshow  $talkshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talkshow $talkshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talkshow  $talkshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talkshow $talkshow)
    {
        //
    }
}
