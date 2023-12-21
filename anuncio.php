<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en venta frente al bosque</h1>
      <picture>
        <source srcset="build/img/destacada.webp" type="imagen/webp" />
        <source srcset="build/img/destacada.jpg" type="imagen/jpeg" />
        <img
        
          src="build/img/destacada.jpg"
          loading="lazy"
          alt="imagen de la propiedad"
        />
      </picture>
      <div class="resumen-propiedad">
        <p class="precio">$3.000.000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
            <p>3</p>
          </li>
          <li>
            <img
            class="icono"
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="estacionamiento"
            />
            <p>3</p>
          </li>
          <li>
            <img
            class="icono"
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="dormitorio"
            />
            <p>4</p>
          </li>
        </ul>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione velit
          consectetur porro dolores ea. Culpa, id hic ab ipsa corporis sequi
          obcaecati asperiores consequatur et aperiam. Molestiae nesciunt ad
          dolore.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur
          quam quis nemo eveniet non deserunt nobis placeat temporibus
          obcaecati. Ipsam, inventore dignissimos soluta est rerum et omnis
          porro amet perspiciatis. Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Explicabo vel eveniet mollitia nesciunt veritatis
          totam porro earum ad quisquam, accusantium quo enim in fugiat debitis
          ab odit sint modi. Obcaecati?
        </p>
      </div>
    </main>

    <?php
incluirTemplate('footer')
?>
