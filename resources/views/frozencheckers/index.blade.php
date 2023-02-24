<x-app-layout>
    
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Inside</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>いま冷蔵庫の中にはこんなものが・・・</h1>
        <div class='Items'>
            @foreach ($items as $item)
                <div class='item'>
                    <h2 class='name'>{{ $item->name }}</h2>
                    <p class='amount'>{{ $item->amount }}</p>
                    <p class='limit'>{{ $item->limit }}</p>
                    <p class='cost'>{{ $item->cost }}</p>                    
                </div>
            @endforeach
    </body>
</html>

</x-app-layout>