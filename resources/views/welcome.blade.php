<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div style="display: flex;">
        @foreach(\App\Models\Note::all() as $e)
            <a href="/notes/{{ $e->name }}">
                <div style=" padding: 30px; text-decoration: none; font-weight: bold; height: 400px; border: 1px solid black;
                @if(str_contains($e->name, "S"))
                    {{ "background-color:black; color:white;" }}
                    @else
                    {{ "background-color:white; color:black;" }}
                @endif">{{ str_replace("S" ,"#", $e->name) }}</div>
            </a>
        @endforeach
    </div>
    </body>
</html>
