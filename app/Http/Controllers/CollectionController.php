<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Collection;


class CollectionController extends Controller
{
    // Menampilkan daftar koleksi
   public function index()
{
    $collections = Collection::all();  // Fetch all collections
    $acaras = Acara::all();  // Fetch all events

    return view('collections.index', compact('collections', 'acaras'));
}

public function show($id)
{
    $collection = Collection::findOrFail($id); // Ambil data koleksi berdasarkan ID
    return view('collections.show', compact('collection'));
}

}
