@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('content')
<h2>Productos Disponibles</h2>
<ul>
    @foreach ($productos as $producto)
        <li>
            <a href="{{ route('productos_ig.show', $producto->id) }}">
                {{ $producto->nombre }} - €{{ $producto->precio }}
            </a>
        </li>
    @endforeach
</ul>
@endsection
