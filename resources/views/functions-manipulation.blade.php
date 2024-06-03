<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Manipulation</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('components.header')
    <div class="container">
        <div id="functions-manipulation" class="card">
            <h2>Functions</h2>
            <p>Functions test.</p>
            <div id="functionsResults">
                <p>Sum 3 and 5: {{ testFunctions(3, 5) }}</p>
            </div>
        </div>
    </div>
</body>
</html>
