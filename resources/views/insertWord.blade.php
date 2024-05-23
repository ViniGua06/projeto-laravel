@extends("layouts.app")

@section('title', "Inserir Palavra")

@section('main')
    <form action="/dicionarios/store" method="POST">
        @csrf

        <input type="text" name="nome">
        <input type="text" name="significado">
        <input type="submit">
    </form>
@endsection