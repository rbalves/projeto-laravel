<div class="input-field">
  <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
  <label>Título</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
  <label>Descricao</label>
</div>

<div class="input-field">
  <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
  <label>Valor</label>
</div>

<div class="file-field input-field">
  <div class="btn blue">
    <span><i class="material-icons">image</i></span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
  <img width="150" src="{{asset('$registro->imagem')}}">
</div>
@endif
<div class="v">
  <p>
    <label>
      <input type="checkbox" id="publicado" class="filled-in" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}} value="true" />
      <span>Publicar?</span>
    </label>
  </p>
  <br><br>
</div>
