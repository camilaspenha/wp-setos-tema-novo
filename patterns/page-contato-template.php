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
      <div class="col-lg-5">
        <div class="section-title">
        <h2>Contato</h2>
        </div>
          <div class="info">
            <div class="email d-md-flex">
              <i class="bi bi-envelope-at me-md-3"></i>
              <div>
                <h4>Email:</h4>
                <a href="mailto:<?= get_theme_mod('email') ?>" title="Link para Enviar um E-mail"><?= get_theme_mod('email') ?></a>
              </div>
            </div>

            <div class="phone d-md-flex">
              <i class="bi bi-whatsapp me-md-3"></i>
              <div>
                <h4>Whatsapp:</h4>            
                <a href="<?= get_theme_mod('whatsapp-api') ?>" target="_blank" title="Abre Página Externa - Whatsapp Web">
                <?= get_theme_mod('whatsapp'); ?>
              </div>
              </a>
            </div>
          </div>
        </div>

      <div class="col-lg-7 p-0 p-md-3 mt-3 mt-lg-0">
      <?php get_template_part( 'parts/template-parts/form');   ?>
      </div>
    </div>

  </div>
</section>