@if (session('layout') === 'todo')
    @include('layouts.todo')
@else
    @include('layouts.dashboard')
@endif