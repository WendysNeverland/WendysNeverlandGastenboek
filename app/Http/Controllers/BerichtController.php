<?php

namespace App\Http\Controllers;

use App\Bericht;
use App\http\Requests\BerichtValidatie;

class BerichtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berichten = Bericht::latest()->get();
        
        return view('bericht.index', compact('berichten'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bericht.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BerichtValidatie $request)
    {
        $bericht = Bericht::create($request->all());

        $file = $request->file('foto');

        if ($file <> null) {
             $path = '\fotos';            
             $file->move(public_path().$path, $bericht->id . $file->getClientOriginalName());
             $bericht->foto = $path . '/' . $bericht->id . $file->getClientOriginalName();
             $bericht->save();
        }


        return redirect('bericht');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bericht  $bericht
     * @return \Illuminate\Http\Response
     */
    public function show(bericht $bericht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bericht  $bericht
     * @return \Illuminate\Http\Response
     */
    public function edit(bericht $bericht)
    {
        return view('bericht.edit', compact('bericht'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bericht  $bericht
     * @return \Illuminate\Http\Response
     */
    public function update(BerichtValidatie $request, bericht $bericht)
    {
        $bericht->update($request->all());

        $file = $request->file('foto');

        if ($file <> null) {
             $path = '\fotos';            
             $file->move(public_path().$path, $bericht->id . $file->getClientOriginalName());
             $bericht->foto = $path . '/' . $bericht->id . $file->getClientOriginalName();
             $bericht->save();
        }


        return redirect('bericht');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bericht  $bericht
     * @return \Illuminate\Http\Response
     */
    public function destroy(bericht $bericht)
    {
        //
    }
}
