@extends('layouts.app')
@section('content')
<table border="1" style="background-color: white;">
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Score<th>
            </tr>
            
            @foreach($User as $rank => $user)
                <tr>
                    <td>{{ $rank + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{$user->score}}</td>
                </tr>
            @endforeach
</body>
@endsection 