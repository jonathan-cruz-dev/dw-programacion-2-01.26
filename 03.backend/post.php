<?php
    require_once('secciones/header.php');
?>

    <main class="container">
        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <a href="index.php" class="btn btn-outline-dark"> <i class="fa-solid fa-left-long"></i></a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <form action="" method="post" class="card p-4">
                    <div class="p-2">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="p-2">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="p-2">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-warning">Publicar</button>
                </form>
            </div>
            <div class="col-md-2"></div>

        </div>
    </main>

<?php
    require_once('secciones/footer.php');
?>