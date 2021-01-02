<html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size: 16px; color: #999; }
    h1 { font-size:50pt; text-align: right; color: #f6f6f6;
        margin: -20px 0px -30px 0px; letter-spacing: -4pt;}
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>&#064;whileディレクティブの例</p>
    <ol>
    @php
    $counter = 0;
    @endphp
    @while ($counter < count($data))
    <li>{{ $data[$counter] }}</li>
    @php
    $counter++;
    @endphp
    @endwhile
    </ol>

</body>
</html>
