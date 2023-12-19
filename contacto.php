<?php
include 'includes/templates/header.php'; 
?>
    <main class="contenedor seccion">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
        <img
          src="build/img/destacada3.jpg"
          alt="imagen de contacto"
          loading="lazy"
        />
      </picture>

      <h2>Llene el formulario de contacto</h2>
      <form class="formulario">
        <fieldset>
          <legend>Información Personal</legend>
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" placeholder="Tu Nombre" />

          <label for="email">E-mail:</label>
          <input type="email" id="email" placeholder="Tu Correo" />

          <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" placeholder="Tu Teléfono" />

          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje"></textarea>
        </fieldset>

        <fieldset>
          <legend>Informacion sobre la propiedad</legend>
          <label for="opciones">Vende o Compra:</label>
          <select id="opciones">
            <option value="" disabled selected>-- Seleccione --</option>
            <option value="Compra">Compra</option>
            <option value="Vende">Vende</option>
          </select>

          <label for="presupuesto">Precio o Presupuesto</label>
          <input
            type="number"
            id="presupuesto"
            placeholder="Tu Precio o Presupuesto"
          />
        </fieldset>

        <fieldset>
          <legend>Informacion sobre la propiedad</legend>
          <p>Como desea ser contactado</p>
          <div class="forma-contacto">
            <label for="contactar-telefono">Teléfono</label>
            <input
              name="contacto"
              type="radio"
              value="telefono"
              id="contactar-telefono"
            />

            <label for="contactar-email">E-mail</label>
            <input
              name="contacto"
              type="radio"
              value="email"
              id="contactar-email"
            />
          </div>
          <p>Si eligio telefono, elija la fecha y hora</p>
          <label for="fecha">Fecha:</label>
          <input type="date" id="fecha" />

          <label for="hora">Hora:</label>
          <input type="time" id="hora" min="09:00" max="18:00" />
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
      </form>
    </main>

    <footer class="footer seccion">
      <div class="contenedor contenedor-footer">
        <nav class="navegacion">
          <a href="nosotros.html">Nosotros</a>
          <a href="anuncios.html">Anuncios</a>
          <a href="blog.html">Blog</a>
          <a href="contacto.html">Contacto</a>
        </nav>
      </div>
      <p class="copyright">Todos los derechos reservados 2023 &copy;</p>
    </footer>
    <script src="build/js/bundle.min.js"></script>
  </body>
</html>