<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{
    public function index()
    {
        return view(
            'admin.gallery',
            [
                'galleries' => Gallery::all(),
                'title' => 'Gallery'
            ]
        );
    }

    public function store(Request $request)
    {

        $formFields = $request->validate(
            [
                'album_name' => 'required',
                'album_cover' => 'required',
                'album_url' => 'required',
                'album_date' => 'required|date'
            ]
        );

        // dd($request->all());
        Gallery::create([
            'album_name' =>  $formFields['album_name'],
            'album_cover' => $formFields['album_cover'],
            'album_url' =>  $formFields['album_url'],
            'album_date' => $formFields['album_date'],
        ]);

        return redirect('/admin/gallery')->with('success', 'gallery album created succesfully');
    }
}
