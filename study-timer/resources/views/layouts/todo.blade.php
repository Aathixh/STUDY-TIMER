@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="css/todo.css">
@endsection
@section('content')
        
        <form method ='post' action="/todo" class = "whole"> 
            @csrf
                @method('post')
                @if ($errors->any())
                <ul style="color: red;">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <input class="input-field" type='text' name="tasks" placeholder='Enter the Task'>
                
            <button class="red-button" type='submit'>Submit</button>
        </form>
        <!-- <div class ="container> -->
        <table border="1" class = "striped-table">
            <tr>
                <th>No</th>
                <th>Tasks</th>
                <th></th>
            </tr>
            
            @foreach($tasks as $key => $data)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $data->tasks }}</td>
        <td>
            <form action="{{ route('tasks.destroy', ['task' => $data->id]) }}" method="post">
                @csrf
                @method('delete')
                <button class = "button-10" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>
<!-- </div> -->
@endsection