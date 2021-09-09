<div class="container border p-4 d-flex justify-content-left mb-4 mt-4">
  <form class="form-outline" style="width: 100%;" action="<?php echo DIR_PAGE.'addAnime/add' ?>" method="post">
    <div class="row mb-3">
      <label class="form-label" for="Anime">Título do Anime</label>
      <input class="form-control mb-2" type="text" name="Anime" id="Anime" placeholder="Insira o nome do Anime">
    </div>
    <div class="row mb-3">
      <label class="form-label" for="Temporada">Temporada</label>
      <input class="form-control mb-2" type="text" name="Temporada" id="Temporada" placeholder="Insira a Temporada do Anime">
    </div>
    <div class="row mb-3">
      <label class="form-label" for="Episodio">Episodios</label>
      <input class="form-control mb-2" type="text" name="Episodio" id="Episodio" placeholder="Insira a quantidade de episodios do Anime">
    </div>
    <fieldset class="row mb-3">
      <legend class="col-form-label col-md-2 pt-0">Status</legend>
      <div class="col-md-10">
        
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Status" id="Assistir" value="Assistir" checked>
          <label class="form-check-label" for="Assistir">
            Assistir
          </label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Status" id="Assistindo" value="Assistindo">
          <label class="form-check-label" for="Assistindo">
            Assistindo
          </label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Status" id="Finalizado" value="Finalizado">
          <label class="form-check-label" for="Finalizado">
            Finalizado
          </label>
        </div>

      </div>
    </fieldset>
    <button type="submit" class="btn btn-outline-primary" value="add">Adicionar</button>
  </form>
</div>