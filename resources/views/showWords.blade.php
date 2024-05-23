@extends('layouts.app')

@section('title', "Dicionario")

@section('main')
    @foreach ( $words as $word )
        <div>{{$word->nome}}</div>
        <div>{{$word->significado}}</div>
    @endforeach
@endsection