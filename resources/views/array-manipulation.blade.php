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
        <div id="array-manipulation" class="card">
            <h2>Array Manipulation</h2>
            <p>Array functions test.</p>
        
            <form id="arrayForm" method="POST" action="{{ url('/sendArray') }}" >
                @csrf
                <input type="text" id="inputArray" name="inputArray" placeholder="1, 2, 3"/>
                <button type="submit">Submit</button>
            </form>
        
            <div id="arrayResults">
                @if(isset($ArrayResult))
                    @foreach ($ArrayResult['array'] as $key => $value)
                        @if (is_array($value))
                            <?php $value = implode(", ", $value); ?>
                        @endif
                        <p><span class='ArrayResult'>{{ $key }}:</span> {{ $value }}</p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</body>
</html>
