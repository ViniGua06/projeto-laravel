<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Dicionario - @yield('title')</title>
</head>
<body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        transition: .3s;
    }

    header > ul {
        list-style: none;
        display: flex;
        width: 100%;
        height: 100%;
        justify-content: flex-start;
        align-items: center;
        gap: 4rem;
        color: whitesmoke;
        cursor: pointer;
    }

    header {
        width: 100%;
        height: 4rem;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: green;
        padding-inline: 3rem;
    }

    a {
        text-decoration: none;
        color: whitesmoke
    }

</style>

<header>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('getWords')}}">Dicionario</a></li>
        <li><a href="{{  route('insertWords')  }}">Adicionar Palavra</a></li>
    </ul>
</header>

@yield('main')
    
</body>
</html>