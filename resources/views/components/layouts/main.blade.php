<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('counter')}}">Counter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('post')}}">Post</a>
              </li>
          
            </ul>
          </div>
        </div>
      </nav>
    <body>
        {{ $slot }}
    </body>
</html>
