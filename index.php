<?php
$inicio = true;
include 'includes/templates/header.php';
?>
<main class="contenedor seccion">
  <h1>Mas Sobre Nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy" />
      <h3>SEGURIDAD</h3>
      <p>
        Ea dolore laboriosam quibusdam iusto ratione repellendus officia qui
        nihil eius impedit eos ad voluptatum. Mollitia dolorem reiciendis
        sed, debitis qui suscipit.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="icono precio" loading="lazy" />
      <h3>PRECIO</h3>
      <p>
        Ea dolore laboriosam quibusdam iusto ratione repellendus officia qui
        nihil eius impedit eos ad voluptatum. Mollitia dolorem reiciendis
        sed, debitis qui suscipit.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="icono a tiempo" loading="lazy" />
      <h3>A TIEMPO</h3>
      <p>
        Ea dolore laboriosam quibusdam iusto ratione repellendus officia qui
        nihil eius impedit eos ad voluptatum. Mollitia dolorem reiciendis
        sed, debitis qui suscipit.
      </p>
    </div>
  </div>
</main>

<section class="seccion contenedor">
  <h2>Casas y Departamentos en Venta</h2>
  <div class="contenedor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de lujo en el Lago</h3>
        <p>Casa en el lago con excelente vista y muy buen precio</p>
        <p class="precio">$3.000.000</p>

        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncio.html" class="boton boton-amarillo-block">Ver Propiedad</a>
      </div>
      <!--contenido-anuncios-->
    </div>
    <!--anuncios-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa Terminados de Lujo</h3>
        <p>Casa en el lago con excelente vista y muy buen precio</p>
        <p class="precio">$3.000.000</p>

        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncio.html" class="boton boton-amarillo-block">Ver Propiedad</a>
      </div>
      <!--contenido-anuncios-->
    </div>
    <!--anuncios-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa con balcon</h3>
        <p>Casa en el lago con excelente vista y muy buen precio</p>
        <p class="precio">$3.000.000</p>

        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncio.html" class="boton boton-amarillo-block">Ver Propiedad</a>
      </div>
      <!--contenido-anuncios-->
    </div>
    <!--anuncios-->
  </div>
  <!--contenedor-anuncios-->

  <div class="alinear-derecha">
    <a href="anuncios.html" class="boton-verde">Ver Todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Llena el formulario de contacto y un asesor se pondra en contacto con
    usted
  </p>
  <a href="contacto.html" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro Blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img src="build/img/blog1.jpg" loading="lazy" alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito: <span>12/12/2023</span> por: <span>Admin</span>
          </p>
          <p>
            Lorem ipsum dolor sit, Laudantium deserunt magnam vitae. Non ut
            explicabo eveniet iure sed nostrum, quos aliquid adipisci.
          </p>
        </a>
      </div>
    </article>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img src="build/img/blog2.jpg" loading="lazy" alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Guia para la decoracion de tu hogar</h4>
          <p class="informacion-meta">
            Escrito: <span>12/12/2023</span> por: <span>Admin</span>
          </p>
          <p>
            Lorem ipsum dolor sit, Laudantium deserunt magnam vitae. Non ut
            explicabo eveniet iure sed nostrum, quos aliquid adipisci.
          </p>
        </a>
      </div>
    </article>
  </section>
  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comporto de una excelente forma, muy buena atencion y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Nicolas Conti</p>
    </div>
  </section>
</div>
<?php
include 'includes/templates/footer.php';
?>