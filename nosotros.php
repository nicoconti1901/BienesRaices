<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Conoce Sobre Nosotros</h1>
  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="imagen/webp" />
        <source srcset="build/img/nosotros.jpg" type="imagen/jpeg" />
        <img src="build/img/nosotros.jpg" loading="lazy" alt="Sobre nosotros" />
      </picture>
    </div>
    <div class="texto-nosotros">
      <blockquote>25 años de experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
        laborum alias assumenda architecto perspiciatis cumque molestiae
        aliquid ratione ad velit eum ex aut, vero a doloremque eos nam
        eveniet nemo? Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Ipsum quasi vero accusantium voluptatem aliquam doloribus
        natus ratione amet dignissimos perspiciatis quaerat repellat
        inventore, in cumque autem ad at eos impedit?
      </p>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe
        ipsam architecto nesciunt quos mollitia culpa alias quis! Quisquam
        iure quibusdam adipisci blanditiis consequatur dolorum tempore,
        sapiente hic, voluptates, explicabo fuga. Lo
      </p>
    </div>
  </div>
</main>
<section class="contenedor seccion">
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
</section>

<?php
incluirTemplate('footer')
?>