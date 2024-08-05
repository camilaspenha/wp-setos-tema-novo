<section id="treinamento">
  <div class="container">
    <div class="row">
      <!-- Section Title -->
      <div class="col-12 col-lg-5 order-lg-last d-flex flex-column justify-content-center">
        <div>
          <div class="section_title">
            <?php if ($args['title']): ?>
              <h2><?= $args['title'] ?></h2>
            <?php endif; ?>
            <?php if ($args['subtitle']): ?>
              <p><?= $args['subtitle'] ?></p>
            <?php endif; ?>
          </div> <!-- end section title -->
          
          <?php if($args['content']): ?> 

          <div class="section_description">
            <?php if($args['content']['paragraphs'] && count($args['content']['paragraphs']) > 0) { ?>
              <?php foreach($args['content']['paragraphs'] as $paragraph) { ?>
                <?php foreach ($paragraph as $p) { ?>
                 <p><?= $p ?></p> 
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <?php if($args['content']['list_items'] && count($args['content']['list_items']) > 0) { ?>
              <ul>
                <?php foreach($args['content']['list_items'] as $item) { ?>
                  <?php foreach ($item as $i) { ?>
                  <li><i class="bi bi-check-lg"></i> <?= $i ?></li> 
                  <?php } ?>
                <?php } ?>
              </ul>
            <?php } ?>
          <?php endif; ?>
          </div> <!-- end description-->

          <?php if($args['button']):?>
            <div class="section_btn">
              <a aria-label="Acessa página de Treinamentos" href="<?= $args['button']['link'] ?>" class="btn btn_primary"><?= $args['button']['label'] ?> 
              <i class="bi bi-arrow-right"></i>
            </a>
            </div><!-- end btn -->
          <?php endif; ?>
        </div>
      </div><!-- end col -->
     
      <!-- Slider -->
      <div class="col-12 col-lg-7">
        
      <?php if($args['slider_id']){ 
        get_template_part( 'parts/template-parts/slider','',$args['slider_id']); ?>
      <?php } ?>
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
</section>
