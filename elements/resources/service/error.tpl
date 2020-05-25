<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{$_modx->resource.pagetitle}. {$_modx->resource.longtitle}.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:100,300'>
    <style>
        *{
            transition: all 0.6s;
        }

        html {
            height: 100%;
        }

        body{
            font-family: 'Lato', sans-serif;
            color: #888;
            margin: 0;
        }

        p {
            font-size: 20px;
        }

        #main{
            display: table;
            width: 100%;
            height: 100vh;
            text-align: center;
        }

        .fof{
            display: table-cell;
            vertical-align: middle;
        }

        .fof h1{
            font-size: 50px;
            display: inline-block;
            padding-right: 12px;
            animation: type .5s alternate infinite;
        }

        .link {
            color: #888;
            display: block;
        }

        @keyframes type{
        from{box-shadow: inset -3px 0px 0px #888;}
        to{box-shadow: inset -3px 0px 0px transparent;}
        }
    </style>
</head>
<body translate="no">
<div id="main">
    <div class="fof">
        <h1>{$_modx->resource.pagetitle}</h1>
        <p>{$_modx->resource.longtitle}</p>
        <a href="/" class="link">вернуться на главную</a>
    </div>
</div>
</body>
</html>
