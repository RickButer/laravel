<?php
session_start()
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">   
    </head>
            <div class="content">
                <div class="title m-b-md">
                    {{$title}}
                </div>
                
    </body>
</html>
