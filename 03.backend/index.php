<?php
    require_once('secciones/header.php');
    require_once('data/data.php');
    
?>

    <main class="container">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <section id="post" class="pt-4">
                    <?php
                        for ($i=0; $i < 3 ; $i++) { 
                            $titulo = $lista[$i]['titulo'];
                            $foto = $lista[$i]['foto'];

                            echo("
                            <div class='card mt-4'>
                                <img src='$foto' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <p class='card-text'>$titulo</p>
                                    <i class='fa-solid fa-user'></i>
                                    <i class='fa-solid fa-heart'></i>
                                    <i class='fa-solid fa-comment'></i>
                                    <a href='#' class='btn btn-primary'>Detalles</a>
                                </div>
                            </div>
                            ");
                        }
                    ?>
                    
                </section>
            </div>
            <div class="col-md-2"></div>
            <a href="post.php" class="btn btn-warning btn-post shadow-lg">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </main>

<?php
    require_once('secciones/footer.php');
?>