@extends ('layouts.main')
@section('title', 'Criar Evento')
@section ('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do Evento">
        </div>
        <div class="form-group">
            <label for="title">O evento e privado?</label>
            <select class="form-control" id="private" name="private">
                <option value="0">Nao</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descricao:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Digite a descricao"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adcione items do evento:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco">Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja Gratis">Cerveja Gratis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food">Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes">Brindes
                </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
<a href="/"> Voltar para home</a>
@endsection