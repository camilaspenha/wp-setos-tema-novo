<?php
/**
 * Title: Inner
 * Slug: setos-v2/page-inner-template
 * Categories: setos_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
 $fields = get_fields();

 ?>
<?php
foreach($fields['inner_components'] as $key => $layout){
  //count($layout)
  switch ($layout['acf_fc_layout']) {
    case 'hero' : 
      get_template_part( 'parts/template-parts/inner_hero','',$layout);
    break;
    case 'inner_header' : 
        get_template_part( 'parts/template-parts/inner_header','',$layout);
      break;
      case 'inner_tabs' : 
        get_template_part( 'parts/template-parts/inner_tabs','',$layout);
      break;
      case 'cta' :
        get_template_part( 'parts/template-parts/cta','',$layout);
      break;

      case 'slick_plataformas':
        get_template_part( 'parts/template-parts/slick_plataformas','',$layout);
      break;
  
    default:
      break;
  }
}
?>