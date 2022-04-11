<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Homepage</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: rgba(255, 255, 255, 0.741);
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            color: grey;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        ul {
            display: flex;
            gap: 20px;
        }

        a {
            text-decoration: none;
            color: initial;
        }

        li {
            list-style: none;
            text-decoration: underline dashed 1px;
            font-weight: 500;
            font-size: 18px;
        }

    </style>
</head>

<body>
    <h1>Welcome!</h1>
    <h3>Please, select a playlist:</h3>
    <ul>
        <li><a href="{{ route('classic') }}">Classic</a></li>
        <li><a href="{{ route('rock') }}">Rock</a></li>
        <li><a href="{{ route('progr') }}">Progressive</a></li>
        <li><a href="{{ route('jazz') }}">Jazz</a></li>
    </ul>
</body>

</html>
