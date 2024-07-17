<?php
/**
 * Title: Home
 * Slug: setos-v2/page-contato-template
 * Categories: setos_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
?>
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="row mt-5">
      <div class="col-lg-4">
        <div class="section-title">
        <h2>Contato</h2>
      </div>
        <div class="info">
          <div class="email">
            <i class="bi bi-envelope-at"></i>
            <h4>Email:</h4>
            <a class="ms-3" href="mailto:<?= get_theme_mod('email') ?>" title="Link para Enviar um E-mail"><?= get_theme_mod('email') ?></a>
          </div>

          <div class="phone">
            <i class="bi bi-whatsapp"></i>
            <h4>Whatsapp:</h4>            
            <a class="ms-3" href="<?= get_theme_mod('whatsapp-api') ?>" target="_blank" title="Abre Página Externa - Whatsapp Web">
            <?= get_theme_mod('whatsapp'); ?>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">
      <?php get_template_part( 'parts/template-parts/form');   ?>
      </div>
    </div>

  </div>
</section>