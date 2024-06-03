<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Manipulation</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('components.header')
    <div class="container">
        <div id="loops-manipulation" class="card">
            <h2>Loops</h2>
            <p>Loops test.</p>
            <div id="loopsResults">
                <p>For Loop:</p>
                    @php
                        $limit = 5;
                    @endphp
                    @for ($i = 1; $i <= $limit; $i++)
                        <result>{{ $i }}</result>
                    @endfor

                <p>While Loop:</p>
                    @php
                        $j = 1;
                    @endphp
                    @while ($j <= $limit)
                        <result>{{ $j }}</result>
                        @php
                            $j++;
                        @endphp
                    @endwhile
            </div>
        </div>
    </div>
</body>
</html>
