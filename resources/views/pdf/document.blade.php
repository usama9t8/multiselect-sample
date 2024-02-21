<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
        <ul>
            @foreach($data as $record)
            <li>
                <p>{{ $record['name'] }}</p>
                <div>
                    <p>{{ $record['about'] }}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>

</html>