<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}


//BASE DE DATOS
require '../../includes/config/database.php';
$conexion = conectarDB();

//CONSULTA PARA OBTENER LOS DATOS DE LA PROPIEDAD
$consulta = "SELECT * FROM propiedades WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

//CONSULTA PARA OBTENER LOS VENDEDORES
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($conexion, $consulta);

//ARREGLO CON MENSAJES DE ERRORES
$errores = [];
//echo "<pre>";
//var_dump($_SERVER ['REQUEST_METHOD']);
//echo "</pre>";
$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedores_id = $propiedad['vendedores_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
    $precio = mysqli_real_escape_string($conexion,  $_POST['precio']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']); 
    $habitaciones = mysqli_real_escape_string($conexion, $_POST['habitaciones']); 
    $wc = mysqli_real_escape_string($conexion, $_POST['wc']); 
    $estacionamiento = mysqli_real_escape_string($conexion, $_POST['estacionamiento']);
    $vendedores_id = mysqli_real_escape_string($conexion,  $_POST['vendedor']);
    $creado = date('Y/m/d');

//ASIGNAR FILES HACIA UNA VARIABLE
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$precio) {
        $errores[] = "Debes añadir un precio";
    }
    if (!$descripcion) {
        $errores[] = "Debes añadir una descripcion";
    }
    if (!$habitaciones) {
        $errores[] = "Debes añadir un numero de habitaciones";
    }
    if (!$wc) {
        $errores[] = "Debes añadir un numero de baños";
    }

    if (!$estacionamiento) {
        $errores[] = "Debes añadir un numero de estacionamientos";
    }
    if (!$vendedores_id) {
        $errores[] = "Debes añadir un vendedor";
    }
    
    //VALIDAR POR TAMAÑO (1MB MAXIMO)
    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    //REVISAR QUE EL ARRAY DE ERRORES ESTE VACIO
    if (empty($errores)) {
        //SUBIDA DE ARCHIVOS
        //CREAR CARPETA
        $carpetaImagenes = '../../imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        //SUBIR IMAGENES
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        //GENERAR UN NOMBRE UNICO
        $nombreImagen = md5( uniqid( rand(), true) ) . ".jpg";

        //INSERTAR EN LA BASE DE DATOS
        $query = "UPDATE propiedades SET titulo = '$titulo', precio = '$precio', descripcion = '$descripcion', habitaciones = '$habitaciones', wc = '$wc', estacionamiento = '$estacionamiento', vendedores_id = '$vendedores_id' WHERE id = $id";

        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            //REDIRECCIONAR AL USUARIO
            header('Location: /admin?resultado=2');
        }
    }
}
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>ACTUALIZAR</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio: </label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripcion: </label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones: </label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños: </label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento: </label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">--Seleccione--</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>">
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer')
?>