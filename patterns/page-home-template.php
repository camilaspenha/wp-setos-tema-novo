<?php
/**
 * Title: Home
 * Slug: setos-v2/page-home-template
 * Categories: setos_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
 $fields = get_fields();

foreach($fields['home_components'] as $key => $layout){
  //count($layout)
  switch ($layout['acf_fc_layout']) {
    case 'hero' : 
        $hero = $layout;
        break;
    case 'form' :
        $hero += $layout;
      get_template_part( 'parts/template-parts/hero','',$hero);
      break;

      case 'reformas' :
        get_template_part( 'parts/template-parts/reformas','',$layout);
      break;

      case 'cta' :
        get_template_part( 'parts/template-parts/cta','',$layout);
      break;

      case 'manutencao' :
        get_template_part( 'parts/template-parts/manutencao','',$layout);
      break;

      case 'treinamento' :
        get_template_part( 'parts/template-parts/treinamento','',$layout);
      break;
      
      case 'logos' :
        get_template_part( 'parts/template-parts/logos','',$layout);
      break;

      case 'slick_plataformas':
        get_template_part( 'parts/template-parts/slick_plataformas','',$layout);
      break;
    default:
    break;
  }
}