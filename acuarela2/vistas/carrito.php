<div class="columns">
    <div class="column">
        <h2 class="is-size-2" style="color:black">Productos existentes</h2>
        <a class="button is-success" href="agregar_producto.php">Nuevo&nbsp;<i class="fa fa-plus"></i></a>
        <table class="table">
            
            <tbody>


                    <div class="row">
    <?php foreach ($productos as $producto) { ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="<?php echo $producto->imagen ?>" class="card-img-top" alt="Imagen del producto">
                <img src="img/productos/<?php echo $producto->imagen ?>" class="card-img-top" alt="Imagen del producto">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $producto->nombre_producto ?></h5>
                    <p class="card-text"><?php echo $producto->descripcion_producto ?></p>
                    <p class="card-text">$<?php echo number_format($producto->precio_producto, 2) ?></p>
                    <form action="eliminar_producto.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id_producto ?>">
                        <button class="btn btn-danger">
                            <i class="fa fa-trash-o"></i> Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


                    
                    </tr>
            </tbody>
        </table>
    </div>
</div>