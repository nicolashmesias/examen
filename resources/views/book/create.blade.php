@extends('layouts.layout')

@section('title', 'books')

@section('content')
    <h4 class="heading">Agregar libro</h4>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <label for="code">Codigo:</label><br>
        <input type="number" id="code" name="code" class="input-field"><br>
        
        <label for="title">Titulo:</label><br>
        <input type="string" id="title" name="title" class="input-field"><br>

        <label for="ISBN">ISBN:</label><br>
        <input type="number" id="ISBN" name="ISBN" class="input-field"><br>

        <label for="editorial">Editorial:</label><br>
        <input type="string" id="editorial" name="editorial" class="input-field"><br>

        <label for="pages">Paginas:</label><br>
        <input type="number" id="pages" name="pages" class="input-field"><br>


        <button type="submit" class="btn-outline-add">Agregar libro</button>
    </form>
@endsection
