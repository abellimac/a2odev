<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="card text-center">
                <div class="card-header">
                    Problems
                </div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <a href="{{ url('problem-1') }}" class="btn btn-primary">Go Problem 1</a>
                    <a href="{{ url('problem-2') }}" class="btn btn-primary">Go Problem 2</a>
                    <a href="{{ url('problem-3') }}" class="btn btn-primary">Go Problem 3</a>
                </div>
               <!--  <div class="card-footer text-muted">
                    2 days ago
                </div> -->
            </div>
            <!-- <problem-1></problem-1> -->
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
