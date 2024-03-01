@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method ='post' action="/todo"> 
            @csrf
                @method('post')
                @if ($errors->any())
                <ul style="color: red;">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <input type='text' name="tasks" placeholder='Enter the Task'>
            <button type='submit'>Submit</button>
        </form>

    </body>
    </html>
@endsection