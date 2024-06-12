<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Asociacion:</h1>

    <form action="{{route('exemplary_user.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>Ejemplares:</h1>
        <select name="exemplary_id">
            @foreach($exemplary as $exemplaries)
                <option value="{{ $exemplaries->id }}">{{ $exemplaries->id }} - {{ $exemplaries->code }} - {{ $exemplaries->location }}</option>
            @endforeach
        </select>
        <br>
        <h1>Usuarios:</h1>    
        <select name="user_id">
            @foreach($user as $users)
                <option value="{{ $users->id }}">{{ $users->id }} - {{ $users->name }} - {{ $users->code }} - {{ $users->phone }} - {{ $users->address }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>