@extends('layouts.main')
@section('title', 'Curso Laravel')
@section('content')
    

       <h1>Titulo</h1>
        <img src="/img/evento1.png" alt="Banner">
       @if(10 > 15)
            <p> A condicao e true </p>
        @endif

        <p> {{$nome}} </p>

        @if ($nome == "Pedro")
            <p>O nome e Pedro</p>
        @elseif($nome == "Gabriel")
            <p>O nome e {{$nome}} ele tem {{$idade}} anos</p>
        @else
            <p>O nome nao e Pedro </p>
        @endif

        @for($i = 0; $i < count($array); $i++)
            <p> {{$array[$i]}} - {{$i}}</p>
            @if ($i == 2)
                <p> i e 2 </p>
            @endif
        @endfor

        @php
           $name = "Joao";
           echo $name;     
        @endphp

        @foreach ($nomes as $nome)
        <p> {{$loop->index}} </p>
        <p> {{$nome}}</p>
            
        @endforeach
        <!-- KKKKKK -->
        {{-- Este comentario --}}

@endsection