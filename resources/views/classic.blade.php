<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classic</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: rgba(68, 68, 68, 0.741);
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
            position: relative;
        }

        ul {
            display: flex;
            gap: 20px;
        }

        a {
            text-decoration: none;
            color: currentColor;
        }

        li {
            list-style: none;
            font-weight: 500;
            font-size: 18px;
        }

        .btn {
            padding: 10px;
            border-radius: 8px;
            border: none;
            background-color: rgba(168, 188, 204, 0.425);
            position: absolute;
            bottom: 5px;
            color: white;
        }

        .btn:hover {
            background-color: rgb(168, 188, 204);
        }

        /* card style */

        .card {
            --card-gradient: rgba(0, 0, 0, 0.8);
            --card-gradient: #30585b, darkgrey;
            --card-blend-mode: overlay;

            background-color: rgba(255, 255, 255, 0.651);
            border-radius: 0.5rem;
            box-shadow: 0.05rem 0.1rem 0.3rem -0.03rem rgba(0, 0, 0, 0.45);
            padding-bottom: 1rem;
            background-image: linear-gradient(var(--card-gradient),
                    white max(9.5rem, 27vh));
            overflow: hidden;
        }

        .card img {
            border-radius: 0.5rem 0.5rem 0 0;
            width: 100%;
            object-fit: cover;
            height: max(10rem, 25vh);
            max-height: max(10rem, 30vh);
            aspect-ratio: 4/3;
            mix-blend-mode: var(--card-blend-mode);
            object-position: top;
        }

        .card:hover,
        .card:focus-within {
            --card-gradient: grey max(8.5rem, 20vh);
        }

        .card h3 {
            margin-top: 1rem;
            margin-left: 1rem;
            font-size: 1.25rem;
        }

        .card p {
            margin-left: 2rem;
        }

        .card a {
            color: currentColor;
        }

        .card-wrapper {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30ch, 1fr));
            grid-gap: 1.5rem;
            max-width: 100vw;
            width: 120ch;
            padding-left: 1rem;
            padding-right: 1rem;
        }


        /* Additional demo display styles */
        * {
            box-sizing: border-box;
        }

    </style>
</head>

{{-- PHP DATA --}}

@php 
$classics= [];
@endphp

<body>
    <button class="btn"><a href="{{ route('home')}}">Torna alla Homepage</a></button>

    <ul class="card-wrapper">
        <li class="card">
            <img src='https://i.scdn.co/image/ab67616d0000b2730d3bec7d7757e7bc95b682a8' alt=''>
            <h3><a href="">A Super Wonderful Headline</a></h3>
            <p>Lorem ipsum sit dolor amit</p>
        </li>
        <li class="card">
            <img src='https://storage.highresaudio.com/library/bild/c_70000/79172/field4.jpg' alt=''>
            <h3><a href="">A Super Wonderful Headline</a></h3>
            <p>Lorem ipsum sit dolor amit</p>
        </li>
        <li class="card">
            <img src='https://i.scdn.co/image/ab67616d0000b273ff9ff657e07a91c83988fbd6' alt=''>
            <h3><a href="">A Super Wonderful Headline</a></h3>
            <p>Lorem ipsum sit dolor amit</p>
        </li>
    </ul>
</body>

</html>
