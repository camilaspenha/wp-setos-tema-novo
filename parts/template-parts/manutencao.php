<section id="manutencao">
  <div class="container">
    <div class="row">
      <!-- Section Title -->
      <div class="col-12 col-lg-5 order-lg-last d-flex flex-column justify-content-center">
        <div>
          <?php if($args['title']): ?>
            <div class="section_title">
              <h2><?= $args['title'] ?></h2>

              <?php if($args['subtitle']):?>
                <p><?= $args['subtitle'] ?></p>
              <?php endif; ?>
            </div> <!-- end section title -->
          <?php endif; ?>
          
          <?php if($args['content'] && count($args['content']) > 0): ?>
            <div class="section_description">
              <?php foreach($args['content'] as $p): ?>
                <p><?= $p['paragraph'] ?></p>
              <?php endforeach; ?>
            </div> <!-- end description-->
          <?php endif; ?>

          <?php if($args['button']): ?>
            <div class="section_btn">
              <a target="_blank" href="<?= $args['button']['link']['url'] ?>" class="btn btn_outline_light" aria-label="abre página de Serviços de Manutenção em nova página"><?= $args['button']['label']?> <i class="bi bi-arrow-right"></i> </a>
            </div><!-- end btn -->
          <?php endif; ?>
        </div>
      </div> <!-- end col -->


      <!-- Cards -->
      <div class="col-12 col-lg-7">
        <div class="row gx-3">
        
        <?php if($args['cards'] && count($args['cards']) > 0): ?>
          <?php foreach ($args['cards'] as $card) { ?>
            <div class="col-12 col-md-6">
              <div class="card_manutencao <?= $card['class'] ?>">

                <div class="card_icon">
                  <?php if($card['icon']): ?>
                  <?= $card['icon'] ?>
                  <?php endif; ?>
                </div><!-- end card icon -->
                  
                <?php if($card['title']): ?>
                  <div class="card_title">
                    <h3><?= $card['title'] ?></h3>
                  </div><!-- end card title -->
                <?php endif; ?>
                
                <?php if($card['content']): ?>
                  <div class="card_description">
                    <p><?= $card['content']?></p>
                  </div> <!-- end card description -->
                <?php endif; ?>
                
              </div> <!-- end card manutencao -->
            </div><!-- end col card manutencao -->
          <?php } ?>

        <?php endif; ?>
        
        </div><!-- end row card manutencao -->
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
</section>