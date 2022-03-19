<?php
$activos = 0;
$inactivos = 0;
$this->extend('templates/dash_header');
$this->section('content');
?>
<div class="container">
  <div class="row d-flex">
    <div class="app-page-title">
      <div class="page-title-wrapper">
        <div class="page-title-heading">
          <div class="page-title-icon">
            <i class="pe-7s-note2 icon-gradient bg-mean-fruit">
            </i>
          </div>
          <div>Listados de verbos
            <div class="page-title-subheading">Administre cada uno de los elementos y su posición en los listados
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <col-md-3>
        <button class="mb-2 mr-2 btn btn-primary"><i class="pe-7s-plus"> </i>Nuevo </button>
      </col-md-3>
    </div>


    <table id="omedata" class="table table-bordered table-light table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Mundo</th>
          <th scope="col">Tipo</th>
          <th scope="col">Past</th>
          <th scope="col">Present</th>
          <th scope="col">Participle</th>
          <th scope="col">Significado</th>
          <th scope="col">Posición</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($verbos as $item) { ?>
          <tr>
            <td><?php echo strtoupper($item['id']) ?></td>
            <td><?php echo strtoupper($item['mundo']) ?></td>
            <td><?php echo strtoupper($item['tipo']) ?></td>
            <td><?php echo strtoupper($item['past']) ?></td>
            <td><?php echo strtoupper($item['present']) ?></td>
            <td><?php echo strtoupper($item['participle']) ?></td>
            <td><?php echo strtoupper($item['significado']) ?></td>
            <td><?php echo strtoupper($item['position']) ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<?php
$this->endSection();
?>