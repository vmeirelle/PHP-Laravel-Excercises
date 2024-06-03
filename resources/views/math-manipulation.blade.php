<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Manipulation</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    @include('components.header')

    <div class="container">
        <div id="math-manipulation" class="card">
            <h2>Math Manipulation</h2>
            <p>Math functions test.</p>
        
            <form id="mathForm" method="POST" action="{{ url('/sendMath') }}" >
                @csrf
                <input type="text" id="inputMath1" name="inputMath1" placeholder="4"/>
                <input type="text" id="inputMath2" name="inputMath2" placeholder="7"/>
                <button type="submit">Submit</button>
            </form>
        
            <div id="mathResults">
                @if(isset($mathResult))
                    @foreach ($mathResult as $key => $value)
                        <p><span class='MathResult'>{{ $key }}:</span> {{ $value }}</p>
                    @endforeach
                @endif
            </div>
        </div>
        
    </div>
</body>
</html>
