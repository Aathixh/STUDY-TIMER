<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <!-- Your header here -->
    </header>

    <main class="app-container">
        <div class="menu"></div>
        <div class="content">
            <div class="main-row">
                <div class="digital_clock">
                    @include('layouts.Clock.digitalClock')
                </div>
                <div class="analog_clock">
                    @include('layouts.Clock.analogClock')
                </div>
                <div class="achievements">
                    @include('layouts.User_Components.achievements')
                </div>
            </div>
            <div class="active-content">
                @yield('active_content')
            </div>
        </div>
    </main>

    <footer>
        <!-- Your footer here -->
    </footer>
</body>
</html>