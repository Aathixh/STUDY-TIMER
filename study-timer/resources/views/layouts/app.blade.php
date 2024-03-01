<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Timer</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')
</head>
<body>
    <main class="app-container">
        <div class="menu">
            <div class="top">
            <div class="Website-Name">
                <h3>STUDY TIMER</h3>
            </div>
            <div class="menu-items">
                <a href="/dashboard" class="btn btn-primary">
                    <span>Dashboard</span>
                </a>
                <br>
                <a href="/todo" class="btn btn-primary">
                        <span>To-Do</span>
                </a>
                <br>
                <a href="/scoreboard" class="btn btn-primary">
                    <span>Scoreboard</span>
                </a>
            </div>
            </div>
            <div class="user-card">
                <div class="user-info">
                    <p style="margin-bottom: 0">{{ Auth::user()->name }}</p>
                    <p style="color: rgb(63, 63, 63); text-align:right; font-size:10px">
                        @if(Auth::check())
                            Your personal ID: {{ Auth::user()->id }}
                        @else
                            Not logged in
                        @endif
                    </p>
                </div>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>
</body>
</html>