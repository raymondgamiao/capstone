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

    public function delete(Request $request)
    {
        // dd($request->all());
        $gallery = Gallery::find($request->albumIDDelete);
        $gallery->delete();

        return redirect()->route('admin/gallery')->with('success', 'gallery deleted succesfully');
    }

    public function update(Request $request)
    {
        $formFields = $request->validate(
            [
                'album_nameEdit' => 'required',
                'album_coverEdit' => 'required',
                'album_urlEdit' => 'required',
                'album_dateEdit' => 'required|date'
            ]
        );

        $gallery = Gallery::find($request->album_IDEdit);

        $gallery->album_name = $formFields['album_nameEdit'];
        $gallery->album_cover = $formFields['album_coverEdit'];
        $gallery->album_url = $formFields['album_urlEdit'];
        $gallery->album_date = $formFields['album_dateEdit'];

        $gallery->save();

        return redirect()->route('admin/gallery')->with('success', 'gallery updated succesfully');
    }
}
