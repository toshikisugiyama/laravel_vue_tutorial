<?php

namespace App\Http\Controllers;

use App\SinglePage;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app');
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
     * @param  \App\SinglePage  $singlePage
     * @return \Illuminate\Http\Response
     */
    public function show(SinglePage $singlePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SinglePage  $singlePage
     * @return \Illuminate\Http\Response
     */
    public function edit(SinglePage $singlePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SinglePage  $singlePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SinglePage $singlePage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SinglePage  $singlePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SinglePage $singlePage)
    {
        //
    }
}
