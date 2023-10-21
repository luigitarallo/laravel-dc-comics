<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * *@return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * *@return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * *@return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Validator::make(
            $data,
            [
                'title' => 'required|string|max:50',
                'description' => 'required|string',
                'thumb' => 'required|url',
                'price' => 'required|string|max:8',
                'series' => 'required|string|max:50',
                'sale_date' => 'required|string|max:12',
                'type' => 'required|string|max:20',
            ],
            [
                'title.required' => 'You have to set a comic title',
                'title.string' => 'Title must be a string',
                'title.max' => 'Title can\'t exceed 50 characters',

                'description.required' => 'You have to set a comic description',
                'description.string' => 'You must be a string',

                'thumb.required' => 'You have to set a comic url image',
                'thumb.url' => 'Insert a valid url',

                'price.required' => 'You have to set a comic price',
                'price.string' => 'Price must be a string',
                'price.max' => 'Price it\'s limited to 8 chars',

                'series.required' => 'You have to set a comic series',
                'series.string' => 'Series must be a string',
                'series.max' => 'Series can\'t excede 50 characters',

                'sale_date.required' => 'You have to set a comic sales date',
                'sale_date.string' => 'Sales date must be a string',
                'sale_date.max' => 'Sales date can\'t excede 12 characters',

                'type.required' => 'You have to set a comic type',
                'type.string' => 'Type must be a string',
                'type.max' => 'Type can\'t excede 20 characters',
            ]
        )->validate();

        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * *@return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * *@return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * *@return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * *@return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}