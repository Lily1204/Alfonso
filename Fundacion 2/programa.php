<?php
    $titulo= 'Programa';

if(isset( $_GET['id']) ){
    if ( filter_var($_GET['id'], FILTER_VALIDATE_INT )){
        $programa_id = $_GET['id'];

    }else{
        header('Location: 404.html');
        exit;
    }

}
    include 'templates/header.php';
    include 'templates/navegacion2.php';
    include 'inc/funciones.php'; 
    

    $resultado = obtenerPrograma($programa_id);

    if($resultado->num_rows > 0){
    while($programa = $resultado->fetch_assoc() ){
       
?>

<div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="images/<?php echo $programa['imagen']; ?>" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5"><?php echo $programa['nombre']; ?></h2>
            </div>
        </div>
    </div>

    <div class="container pt-4">
        <div class="row no-gutters">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        <?php echo $programa['nombre']; ?>
                    </h2>
                        <h3>Actividades Temas Y/O Talleres</h3>
                        <?php echo $programa['actividades']; ?>
                        <h3>Instructores</h3>
                        <?php echo $programa['instructor']; ?>
                        <h3>Fecha(s) De Imparticion</h3>
                        <?php echo $programa['fecha']; ?>
                        <h3>Instrumentos de Verificacion del Programa</h3>
                        <?php echo $programa['actividades']; ?>
                </main>

                <aside class="col-lg-4 pt-4 pt-lg-0">
                    <div class="sidebar pt-5 descripcion_producto">
                            <h2 class="text-center text-uppercase mt-4">Descripción</h2>
                            <p class="text-center"><?php echo $programa['objetivo']; ?></p>

                            <h3 class="text-uppercase text-center mt-5">Cantidad</h3>
                            <p class="display-4 text-center ">$<?php echo $programa['cantidad']; ?>.00</p>
                    </div>
                </aside>
        </div>
    </div>

<?php
    }
    }else{
        echo'<h2 class="text-center text-uppercase mt-4">Producto no encontrado</h2>';
    }
    include 'templates/footer.php';
?>