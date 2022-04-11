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
            html, body {
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
                position: relative;
            }
            ul{
                display: flex;
                gap: 20px;
            }
            a{
                text-decoration: none;
                color: currentColor;
            }
            li{
                list-style:none;
                text-decoration:underline dashed 1px;
                font-weight: 500;
                font-size: 18px;
            }
            .btn{
                padding: 10px;
                border-radius: 8px;
                border: none;
                background-color: rgba(168, 188, 204, 0.425);
                position: absolute;
                bottom: 5px;
                color: white;
            }
            .btn:hover{
                background-color: rgb(168, 188, 204);
            }
        </style>
    </head>

    <body>
        <button class="btn"><a href="/">Torna alla Homepage</a></button>
        prova- Classic
    </body>
</html>