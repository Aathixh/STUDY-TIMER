@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="css/todo.css">
@endsection
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
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Tasks</th>
                <th><th>
            </tr>
            
            @foreach($tasks as $key => $data)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $data->tasks }}</td>
        <td>
            <form action="{{ route('tasks.destroy', ['task' => $data->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>
    </body>
    </html>
@endsection