<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        return view('search.index');
    }

    public function result()
    {
        $results = Search::latest()->get();

        return view('search.result', compact('results'));
    }

    public function add(Request $request)
    {

        $validated = $request->validate([
            'header'    => 'required|string|min:3',
            'link'      => 'required|string|min:3',
            'real_link' => 'required|string|min:3',
            'text'      => 'required|string|min:3',
        ]);

        Search::create($validated);

        return redirect()->route('search.result');
    }

    public function delete(int $id) {

        Search::find($id)->delete();

        return redirect()->route('search.result');
    }
}
