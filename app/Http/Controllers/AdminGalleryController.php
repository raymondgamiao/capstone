<?php

namespace App\Http\Controllers;

use App\Models\logs;
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
        //dd($request->file('album_cover')->store());
        $formFields = $request->validate(
            [
                'album_name' => 'required',
                'album_cover' => 'required',
                'album_url' => 'required',
                'album_date' => 'required|date'
            ]
        );

        // dd($request->all());
        $gallery =  Gallery::create([
            'album_name' =>  $formFields['album_name'],
            'album_cover' => $request->file('album_cover')->store('images/portfolio', 'public'),
            'album_url' =>  $formFields['album_url'],
            'album_date' => $formFields['album_date'],
        ]);

        logs::create([
            'log_id' => $gallery->id,
            'name' => 'New Album ' .  $formFields['album_name'],
            'log_type' => 'Gallery'
        ]);

        return redirect('/admin/gallery')->with('success', 'gallery album created succesfully');
    }

    public function delete(Request $request)
    {
        // dd($request->all());
        $gallery = Gallery::find($request->albumIDDelete);
        $gallery->delete();

        logs::create([
            'log_id' => $request->albumIDDelete,
            'name' => 'Deleted Album ' . $gallery->album_name,
            'log_type' => 'Gallery'
        ]);

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

        logs::create([
            'log_id' => $request->album_IDEdit,
            'name' => 'Updated Album ' .  $formFields['album_nameEdit'],
            'log_type' => 'Gallery'
        ]);

        return redirect()->route('admin/gallery')->with('success', 'gallery updated succesfully');
    }
}
