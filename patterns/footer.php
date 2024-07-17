<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: setos-v2/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
define( 'ASSETS' , get_template_directory_uri() . '/assets');
?>
  <footer>
    <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-3">
            <div class="footer_logo">
              <a class="navbar-brand" href="<?= get_blogInfo('url') ?>"><img width="150px" src="<?= get_template_directory_uri() . '/assets/img/logo_white_icon2.svg' ?>" alt="Logo"></a> 
            </div><!-- end footer logo -->
            <div class="footer_slogan">
              <p>Com nossas plataformas elevatórias, o céu é o limite para os seus projetos.</p>
            </div><!-- end footer slogan-->
          </div><!-- end col -->

          <div class="col-12 col-lg-2">
            <div class="footer_links">
              <h4>Links</h4>
              <?php
              $args = array(
                'menu' => 'links',
                'container' => 'ul',
                'before' => '<i class="bx bx-chevron-right"></i>',
                'theme_location' => 'my-footer-menu-links',
                'menu_class' => '',
              );
              wp_nav_menu( $args );
            ?> 
            </div><!-- end footer links -->
          </div><!-- end col -->

          <div class="col-12 col-lg-3">
            <div class="footer_links">
              <h4>Plataformas</h4>
              <?php
              $args = array(
                'menu' => 'products',
                'container' => 'ul',
                'before' => '<i class="bx bx-chevron-right"></i>',
                'theme_location' => 'my-footer-menu-products',
                'menu_class' => '',
              );
              wp_nav_menu( $args );
            ?> 
            </div><!-- end footer links -->
          </div><!-- end col -->

          <div class="col-12 col-lg-4">
            <div class="footer_contact">

              <div class="contact">
                <div class="contact_title">
                  <i class="bi bi-envelope-at"></i>
                  <h6>E-mail</h6>
                </div><!-- end contact title -->

                <div class="contact_content">
                  <a aria-label="Link para Envio de E-mail" href="mailto:<?= get_theme_mod('email') ?>"><?= get_theme_mod('email') ?></a>
                </div><!-- end contact content -->
              </div><!-- contact -->             

              <div class="contact">
                <div class="contact_title">
                  <i class="bi bi-telephone"></i>
                  <h6>Telefone</h6>
                </div><!-- end contact title -->

                <div class="contact_content">
                  <a aria-label="Link para Orçamento via Whatsapp - Abre em nova página" target="_blank" href="<?= get_theme_mod('whatsapp-api') ?>"><?= get_theme_mod('whatsapp') ?></a>
                </div><!-- end contact content -->
              </div><!-- contact -->

            </div> <!-- end footer contact -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </div><!-- end footer top -->

    <div class="footer_bottom">
      <div class="footer_info d-lg-flex justify-content-around align-items-center">
        <div class="copyright">
          2024 &copy; Copyright <strong><span><?= get_theme_mod('razao-social') ?></span></strong> - <?= get_theme_mod('cnpj') ?>
        </div>
        <div class="credits my-3">
          <a href="https://sitecriativo.tec.br/" aria-label="Link para Site Criativo - Abre em nova página" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/logo_site_criativo.svg' ?>" width="80px" alt="Logo Site Criativo"></a>
        </div>
      </div><!-- end footer info -->
    </div><!-- end footer bottom -->
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="modalOrcamento" tabindex="-1" aria-labelledby="Modal de confirmação do item adicionado ao orçamento" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar confirmação"></button>  
        </div><!-- end modal header -->        
        <div class="modal-body">
          <h6 class="modal-title" id="modalOrcamentoLabel"></h6>
        </div>
      </div><!-- end modal content -->
    </div><!-- end modal dialog -->
  </div> <!-- end modal -->
  
	<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" aria-label="botão voltar para o topo da página">
		<i class="bi bi-arrow-up-short"></i>
	</a>
  
  <!-- Vendor JS Files -->
  <script src="<?= ASSETS . '/vendor/bootstrap/js/bootstrap.bundle.min.js'  ?>"></script>

  <!-- Sclick -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?= ASSETS . '/vendor/slick/slick.min.js' ?>"></script>

  <!-- Main JS -->
	<script src="<?= ASSETS . '/vendor/php-email-form/validate.js' ?>"></script>
  <script type="module" src="<?= ASSETS . '/js/dist/script.js'  ?>"></script>

  <!-- Slick Init -->
  <script type="text/javascript">
    $('.multiple-items').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        }
      ]
    });
  </script>

	</body>
</html>