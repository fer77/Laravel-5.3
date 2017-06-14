<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            body, html { height: 100%;  }
            body {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body class="container">
        <form method="POST" action="/avatars" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="file" name="avatar"></input>

            <button type="submit">Save Avatar</button>
        </form>
    </body>
</html>
