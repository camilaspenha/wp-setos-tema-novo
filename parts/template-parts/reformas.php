<section id="reformas">
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
          
          <?php if($args['description']): ?> 

            <?php if($args['description']['paragraphs'] && count($args['description']['paragraphs']) > 0) { ?>
              <?php foreach($args['description']['paragraphs'] as $paragraph) { ?>
                <?php foreach ($paragraph as $p) { ?>
                 <p><?= $p ?></p> 
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <?php if($args['description']['list_items'] && count($args['description']['list_items']) > 0) { ?>
              <ul>
                <?php foreach($args['description']['list_items'] as $item) { ?>
                  <?php foreach ($item as $i) { ?>
                  <li><?= $i ?></li> 
                  <?php } ?>
                <?php } ?>
              </ul>
            <?php } ?>
          <?php endif; ?>
          
          <div class="section_btn">
            <a target="_blank"aria-label="Acessa página de Manutenção e Reformas em nova aba" href="<?= $args['link'] ?>" class="btn btn_primary"><?= $args['button_label'] ?> 
            <i class="bi bi-arrow-right"></i>
          </a>
          </div><!-- end btn -->
        </div>
      </div><!-- end col -->
     
      <div class="col-12 col-lg-7 order-lg-last">
        
      <?php if($args['slider_id']){ 
        get_template_part( 'parts/template-parts/slider','',$args['slider_id']); ?>
      <?php } ?>
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
</section>
