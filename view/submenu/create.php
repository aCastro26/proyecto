<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/menuController.php");
    $obj = new menuController();
    $rows = $obj->index();
?>

    <?php if($rows): ?>
    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del submenú</label>
    <select name="id_menu" class="form-select" aria-label="Default select example" required>
        <option selected value="">Selecciona un Menú padre</option>
        <?php if($rows): ?>
        <?php foreach($rows as $row): ?>
            <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
        <?php endforeach; ?>
        <?php else: ?>
            <option value="">Aún no cuentas con Menús padres</option>
        <?php endif; ?>
    </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del submenú</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Descripción del submenú</label>
        <input type="text" name="descripcion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>
    <?php else: ?>
        <p class="text-warning">Debes agregar un Menú padre primero</p>
    <?php endif; ?>
    
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>