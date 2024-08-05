<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container ">
  <div class="row">
    <!-- Hero Title Col -->
    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
      <div>
        <div class="hero_title">
          <!-- Hero title -->
          <?php if($args['titulo']): ?>
            <h1><?= $args['titulo'] ?></h1>
          <?php endif; ?>

          <!-- Hero subtitle -->
           <?php if($args['subtitulo']): ?>
            <span><?= $args['subtitulo'] ?></span>
          <?php endif; ?>
        </div><!-- end Div Hero Title -->

        <!-- Hero Description -->
        <?php if($args['descricao']): ?>
          <p class="hero_subtitle"><?= $args['descricao'] ?></p>
        <?php endif; ?>

        <!-- Hero Button -->
        <?php if($args['botao'] && $args['botao']['label']): ?>
          <div class="section_btn mb-5">
            <a href="<?= $args['botao']['link'] ?>" aria-label="Link para rolar a página até a seção <?= $args['botao']['label'] ?>" class="btn btn_outline_light">
              <?= $args['botao']['label'] ?>
            </a>
          </div><!-- end section button -->
        <?php endif; ?>
      </div>
    </div> <!-- end Hero Title Col -->
    <!-- Hero Form -->
    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
     <?php get_template_part( 'parts/template-parts/form');   ?>
    </div> <!-- end col -->

  </div> <!-- end row -->
  </div> <!-- end container -->
</section>

