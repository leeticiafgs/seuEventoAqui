@extends ('layouts.main')

@section('title', 'Criar Evento')

@section ('content')  
  
      <div id="event-create-container" class="col-md-6 offset-md-3">
            <h1>Crie o seu evento</h1>
            <form action="/events" method="post" enctype="multipart/form-data">

                  @csrf  {{-- Prevenção do laravel de ataques a formularios --}}
                  
                  <br>

                  <div class="form-group">
                        <label for="image">Imagem do Evento:</label>
                        <input type="file" id="image" name="image" class="form-control-file" required>
                           
                  </div>
                  <br>
                  <div class="form-group">
                        <label for="title">Evento:</label>
                        <input type="text" id="title" class="form-control" name="title" placeholder="Nome do Evento" required>
                  </div>
                  <br>

                  <div class="form-group">
                        <label for="date">Data do evento:</label>
                        <input type="date" id="date" class="form-control" name="date" required>
                  </div>
                  <br>

                  <div class="form-group">
                        <label for="city">Cidade:</label>
                        <input type="text" id="city" class="form-control" name="city" placeholder="Local do Evento" required >
                  </div>
                  <br>
                  <div class="form-group">
                        <label for="title">Evento Privado?</label>
                        <select name="private" id="private" class="form-control" required>
                              <option value="0">Não</option>
                              <option value="1">Sim</option>
                        </select>
                  </div>
                  <br>
                  <div class="form-group">
                        <label for="description">Descrição do Evento:</label>
                        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" required ></textarea>
                  </div>
                  <br>
                  <div class="form-group">
                        <label for="description">Adicione itens de infraestrutura:</label>
                        <div class="form-group">
                              <input type="checkbox" name="itens[]" value="Cadeiras" > Cadeiras
                        </div>

                        <div class="form-group">
                              <input type="checkbox" name="itens[]" value="Palco" > Palco
                        </div>

                        <div class="form-group">
                              <input type="checkbox" name="itens[]" value="Open Bar" > Open Bar
                        </div>

                        <div class="form-group">
                              <input type="checkbox" name="itens[]" value="Open Food" > Open Food
                        </div>

                        <div class="form-group">
                              <input type="checkbox" name="itens[]" value="Brindes" > Brindes
                        </div>
                  </div>
                  <br>
                  <input type="submit" class="btn btn-primary" value="Criar Evento">
            </form>
      </div>

@endsection