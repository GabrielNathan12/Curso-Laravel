@extends('layouts.main')
@section('title', 'Dasboard')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    @else
        <p>Voce ainda nao possui eventos,
            <a href="/events/create">Criar novo evento</a>
        </p>
    @endif
</div>
@endsection