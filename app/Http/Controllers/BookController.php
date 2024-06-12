<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());

        return redirect()->route('book.index')->with('success', 'Libro agregado correctamente.');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('book.index')->with('success', 'Libro actualizado correctamente.');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('book.index')->with('success', 'Libro eliminado correctamente.');
    }
}
