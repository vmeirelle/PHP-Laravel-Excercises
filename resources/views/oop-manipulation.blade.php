<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Manipulation</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('components.header')
    <div class="container">
        <div id="oop-manipulation" class="card">
            <h2>OOP</h2>
            <p>OOP test.</p>
            <div id="oopResults">
                <p>{{ testClassesAndObjects('red', 'Toyota') }}</p>
            </div>
        </div>
    </div>
</body>
</html>
