<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/submenuController.php");
    $obj = new submenuController();
    $submenu = $obj->show($_GET['id']);
    require_once("c://xampp/htdocs/proyecto/controller/menuController.php");
    $objMenu = new menuController();
    $rows = $objMenu->index();
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $submenu[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Menú</label>
    <div class="col-sm-10">
    <select name="id_menu" class="form-select" aria-label="Default select example">
        <option selected="<?= $submenu[1]?>"><?= $submenu[1]?></option>
        <?php foreach($rows as $row): ?>
            <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
        <?php endforeach; ?>
    </select>
    </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo nombre del submenu</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $submenu[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Descripción del submenu</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="inputPassword" value="<?= $submenu[2]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $submenu[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>