<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    @include('components.header')
    <div class="container">
        <div id="string-manipulation" class="card">
            <h2>String</h2>
            <p>String functions test.</p>
            <form id="stringForm" method="POST" action="{{ url('/sendString') }}" >
                @csrf
                <input type="text" id="inputString" name="inputString" placeholder="Hello World"/>
                <button type="submit">Submit</button>
            </form>
            <div id="stringResults">
                @if(isset($StringResult))
                    @foreach ($StringResult as $key => $value)
                        @if (is_array($value))
                            <?php $value = implode(", ", $value); ?>
                        @endif
                        <p><span class='StringResult'>{{ $key }}:</span> {{ $value }}</p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</body>
</html>
