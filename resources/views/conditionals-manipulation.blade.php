<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals Manipulation</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('components.header')
    <div class="container">
        <div id="conditionals-manipulation" class="card">
            <h2>Conditionals</h2>
            <p>Conditionals test.</p>
            <div id="conditionalsResults">
                <p>{{ testConditionals(6) }}</p>
            </div>
        </div>
    </div>
</body>
</html>
