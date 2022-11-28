<?php

namespace App\Http\Controllers;

use App\Models\publishers;
use App\Http\Requests\StorepublishersRequest;
use App\Http\Requests\UpdatepublishersRequest;
use App\Models\books;

class PublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('publisherDetail', [
            'publisher' => publishers::get(),
        ]);
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
     * @param  \App\Http\Requests\StorepublishersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepublishersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function show(publishers $publishers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function edit(publishers $publishers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepublishersRequest  $request
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepublishersRequest $request, publishers $publishers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function destroy(publishers $publishers)
    {
        //
    }
}
