<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Timer</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <main class="app-container">
        <div class="menu">
            <div class="Website-Name">
                <h3>STUDY TIMER</h3>
            </div>
            <div class="menu-items">
                <a href="{{ route('show-dashboard') }}" class="btn btn-primary">
                    <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 278 278" xml:space="preserve" width="16px" height="16px"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <rect x="0" y="0" width="119.054" height="119.054"></rect> <rect x="158.946" y="0" width="119.054" height="119.054"></rect> <rect x="158.946" y="158.946" width="119.054" height="119.054"></rect> <rect x="0" y="158.946" width="119.054" height="119.054"></rect> </g> </g></svg>
                    Dashboard
                </a>
                <br>
                <a href="{{ route('show-todo') }}" class="btn btn-primary">
                    <svg width="22px" height="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6L21 6.00072M11 12L21 12.0007M11 18L21 18.0007M3 11.9444L4.53846 13.5L8 10M3 5.94444L4.53846 7.5L8 4M4.5 18H4.51M5 18C5 18.2761 4.77614 18.5 4.5 18.5C4.22386 18.5 4 18.2761 4 18C4 17.7239 4.22386 17.5 4.5 17.5C4.77614 17.5 5 17.7239 5 18Z" stroke="#000000" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    To-Do
                </a>
            </div>
            <div class="user-card">
                <div class="user-info">
                    <p>{{ Auth::user()->name }}</p>
                    {{-- <form action="{{ route('logout') }}" method="post"> --}}
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>
</body>
</html>