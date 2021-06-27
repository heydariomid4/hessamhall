<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Mail\Transport\SesTransport;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('لیست گالری');
        $gallery = Gallery::paginate(20);
        $category = Category::all();
        return view('admin.gallery.gallery', compact('gallery','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        SEOMeta::setTitle('ایجاد گالری');
        $category = Category::all();
        return view('admin.gallery.add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'category' => ['required'],
            'show' => [],
            'path' => ['required','image','max:2000','mimes:jpg,jpeg,bmp,png']
        ]);
        $file = $request->file('path');

        $destinationPath = '/image/gallery/';
        $name = str::random(40).'.'.$file->getClientOriginalExtension();
        $file->move(public_path($destinationPath), $name );
        $validatedData['path'] = $destinationPath . $name;
        if ($request->show == "on") {
            Gallery::create([
                'title' => $validatedData['title'],
                'categorie_id' => $validatedData['category'],
                'show' => 1,
                'path' => $validatedData['path'],
            ]);
        } else{
            Gallery::create([
                'title' => $validatedData['title'],
                'categorie_id' => $validatedData['category'],
                'show' => 0,
                'path' => $validatedData['path'],
            ]);
        }

        toast('ذخیره شد','success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
