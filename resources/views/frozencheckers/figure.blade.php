<x-app-layout>
    
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Visual Image</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>あなたの家の冷蔵庫はこうなってます</h1>
        @foreach ($figures as $figure)
        <div class="Figure">
            <img src="{{ $figure->url }}" alt="画像が読み込めません。"/>
        </div>
        @endforeach
    </body>
</html>

</x-app-layout>