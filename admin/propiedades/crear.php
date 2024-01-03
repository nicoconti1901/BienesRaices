<?php
//BASE DE DATOS
require '../../includes/config/database.php';
$conexion = conectarDB();
//ARREGLO CON MENSAJES DE ERRORES
$errores = [];
//echo "<pre>";
//var_dump($_SERVER ['REQUEST_METHOD']);
//echo "</pre>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedores_id = $_POST['vendedores_id'];


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

    //REVISAR QUE EL ARRAY DE ERRORES ESTE VACIO
    if (empty($errores)) {
        //INSERTAR EN LA BASE DE DATOS
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_id')";

        $resultado = mysqli_query($conexion, $query);
        
    }
}
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1>CREAR</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio: </label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripcion: </label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones: </label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños: </label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamiento">Estacionamiento: </label>
            <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedores_id">
                <option value="0">--Seleccione--</option>
                <option value="1">Vendedor 1</option>
                <option value="2">Vendedor 2</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer')
?>