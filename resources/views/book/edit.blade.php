@extends('layouts.layout')

@section('title', 'Libro')
    
@section('content')
        <h4 class="heading">Editar libro</h4>
        <form action="{{ route('book.update', ['id' => $book->id]) }}" method="POST" class="form">
            @csrf
            @method('PUT')
            <label for="code">Codigo:</label><br>
            <input type="number" id="code" name="code" class="input-field" value="{{old('code',$book->code) }}"><br>
            
            <label for="title">Titulo:</label><br>
            <input type="string" id="title" name="title" class="input-field" value="{{old('title',$book->title) }}"><br>
    
            <label for="ISBN">ISBN:</label><br>
            <input type="number" id="ISBN" name="ISBN" class="input-field" value="{{old('ISBN',$book->ISBN) }}"><br>
    
            <label for="editorial">Editorial:</label><br>
            <input type="string" id="editorial" name="editorial" class="input-field" value="{{old('editorial',$book->editorial) }}"><br>
    
            <label for="pages">Paginas:</label><br>
            <input type="number" id="pages" name="pages" class="input-field" value="{{old('pages',$book->pages) }}"><br>

            
            
            <button type="submit" class="btn-outline-add">Actualizar Libro</button>
        </form>
    </div>
@endsection