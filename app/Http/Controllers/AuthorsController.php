<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorsController extends Controller
{

    public function index()
    {
        $authors = Author::all();
        return view('authors.gestion_autores',compact('authors'));
    }


    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->nameAuthor;
        $author->save();
        return redirect()->route('authors.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $author = Author::find($id);
        return view('authors.editar_autores',compact('author'));
    }


    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->name = $request->nameAuthor;
        $author->save();
        return redirect()->route('authors.index');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('authors.index');
    }

}
