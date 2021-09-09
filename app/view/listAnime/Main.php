<?php

use App\Controller\ControllerDeleteAnime;
use App\Controller\ControllerListAnime;


$controllerListAnime = new ControllerListAnime();
$controllerListAnime->Con_listAnime();
$animes = $controllerListAnime->view_ListAnime();

?>


<div class="table-responsive">
  <table class="table table-dark table-hover border-primary">
    <thead>
      <tr>
        <th scope="col">Anime</th>
        <th scope="col">Temporada</th>
        <th scope="col">Episodios</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($animes as $key => $a) { ?>
        <tr>
          <td><?= $a['ANI'] ?></td>
          <td><?= $a['TEMP'] ?></td>
          <td><?= $a['EPI'] ?></td>
          <td><?= $a['STA'] ?></td>
          <td><a onclick="getEditar(<?= $a['ID']; ?>)" name="editAnime" value="<?= $a['ID']; ?>" class="btn btn-outline-primary"><i class='bi bi-pencil-fill'></i></a></td>
          <td><a onclick="deletar(<?= $a['ID']; ?>)" name="deleteIdAnime" value="<?= $a['ID']; ?>" class="btn btn-outline-primary"><i class='bi bi-x-circle-fill'></i></a></td>
        </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="bg-dark modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editModal">Editar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
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
                  <input class="form-check-input" type="radio" name="Status" id="Assistir" value="Assistir">
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
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button onclick="postEditar()" class="btn btn-outline-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>

<?php

if (isset($_POST['deleteIdAnime'])) {

  $controllerDeleteAnime = new ControllerDeleteAnime();
  $controllerDeleteAnime->Con_deleteAnime(var_dump($_POST['deleteIdAnime']));
}

?>

<script>
  const https = location.protocol;
  const DIRPAGE = https + "//" + document.location.hostname;
  var globalId;

  function deletar(id) {

    var confirm = this.confirm('Tu desejas realmente deletar este anime?')

    if (confirm === true) {
      $.post(DIRPAGE + '/deleteAnime/Con_deleteAnime', {
        idAnime: id
      }, function() {
        console.log("Sucesso")
        location.reload()
      });
    }
  }

  function getEditar(id) {
    this.globalId = id;

    $.getJSON(DIRPAGE + '/Json/Con_dadosAnime?idAnime=' + id,
      function(data) {

        //console.log(data)

        $('#Anime').val(data[0]['ANI']);
        $('#Temporada').val(data[0]['TEMP']);
        $('#Episodio').val(data[0]['EPI']);
        let status = data[0]['STA'];
        $('#Finalizado').prop('checked' , false);
        $('#Assistido').prop('checked' , false);
        $('#Assistir').prop('checked' , false);
        if(status == 'Finalizado'){
          $('#Finalizado').prop('checked' , true);
        }else if (status == 'Assistido'){
          $('#Assistido').prop('checked' , true);
        }else if (status == 'Assistir'){
          $('#Assistir').prop('checked' , true);
        }

        $('#editModal').modal('show');
      });
      
  }

  function postEditar() {
    anime = $('#Anime').val()
    temporada = $('#Temporada').val()
    episodio = $('#Episodio').val()
    status = $('input[name=Status]:checked').val()
    $.post(DIRPAGE + '/editAnime/Con_editAnime',{
      idAnime : this.globalId,
      anime : anime,
      temporada : temporada,
      episodio : episodio,
      status : status
    }
    , function() {
        console.log("Sucesso")
        location.reload()
      });

  }

</script>