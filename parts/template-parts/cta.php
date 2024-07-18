<?php 
if($args['id']): 
$cta = get_fields($args['id']);
?>
<section id="cta">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-7">

        <?php if( $cta['title']): ?>
          <div class="section_title">
            <h2><?= $cta['title'] ?></h2>
          </div>
        <?php endif; ?>
        
        <?php if($cta['subtitle']): ?>
        <div class="section_description">
          <p><?= $cta['subtitle'] ?></p>
        </div>
        <?php endif; ?>
        
        <?php if($cta['button_label']): ?>
        <div class="section_btn">
          <a href="<?= get_theme_mod('whatsapp-api') ?>" class="btn btn_outline_light" aria-label="Link para Orçamento via Whatsapp - Abre em nova página" target="_blank">
            <i class="bi bi-whatsapp me-2"></i> <?= $cta['button_label'] ?>
          </a>
        </div>
        <?php endif; ?>
      </div> <!-- end col -->
    </div> <!-- end row -->
  </div><!-- end  container -->
</section>
<?php endif; ?>