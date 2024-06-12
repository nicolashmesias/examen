@extends('layouts.layout')

@section('title', 'Libros')
    
@section('content')
        <h4 class="heading">Lista de asesorías</h4>       
            
        <table class="styles"> 
            <thead>
                <tr>
                    <th>N.</th>
                    <th>Codigo:</th>
                    <th>Titulo:</th>
                    <th>ISBN:</th> 
                    <th>Editorial:</th>
                    <th>Paginas:</th>
                    <th>Ver mas:</th>
                    <th>Eliminar:</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book) 
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->code}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->ISBN}}</td>
                    <td>{{$book->editorial}}</td>
                    <td>{{$book->pages}}</td>
                    <td> 
                        <a href="{{route('book.show', $book->id)}}" class="btn-outline-info">Mostrar</a> 
                    </td>

                        <td>
                        <form action="{{route('book.destroy',$book->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-delete" type="submit">Eliminar</button> 
                        </form>  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
    <br>
    <br>
    <a href="{{route('book.create')}}" class="btn-outline-add">Agregar Libro</a> 
@endsection
