@extends('layouts.layout')

@section('title', 'Libros')
    
@section('content')      
        <h4 class="heading">Libro</h4>    
            
            <table class="styles">
                <thead>
                    <tr>
                        <th>N.</th>
                        <th>Codigo</th>
                        <th>Titulo:</th>
                        <th>ISBN</th>
                        <th>Editorial:</th>
                        <th>Paginas</th>

                        <th>Acciones:</th>

                        
                    </tr>
                </thead>
                <tbody>                
                    @if(isset($book))
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->code }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->ISBN }}</td>
                        <td>{{ $book->editorial }}</td>
                        <td>{{ $book->pages }}</td>
                        <td><a href="{{route('book.edit', $book->id)}}" class="btn btn-outline-info">Editar</a> </td>
                    </tr>
                    @else
                    
                @endif
                    
            </tbody>
            </table>
            
    <br>
    <br>
@endsection