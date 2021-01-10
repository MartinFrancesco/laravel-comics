<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comicController extends Controller
{
    //Detail page for a comic
    public function show($id) {
        // return 'Detail page for ID' . $id;

        $comics = config('comics');

        //Get specific comic by id
        $comic = [];
        foreach ($comics as $item) {
            if ($id == $item['id']) {
                $comic = $item;
            }
        }

        return view('comics.show', compact('comic'));
    }
}
