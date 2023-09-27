<?php


$fashion_designer_mart_custom_css = '';

/*---------------------------text-transform-------------------*/

$fashion_designer_mart_text_transform = get_theme_mod( 'menu_text_transform_fashion_designer_mart','CAPITALISE');
if($fashion_designer_mart_text_transform == 'CAPITALISE'){

	$fashion_designer_mart_custom_css .='#main-menu ul li a{';

		$fashion_designer_mart_custom_css .='text-transform: capitalize ;';

	$fashion_designer_mart_custom_css .='}';

}else if($fashion_designer_mart_text_transform == 'UPPERCASE'){

	$fashion_designer_mart_custom_css .='#main-menu ul li a{';

		$fashion_designer_mart_custom_css .='text-transform: uppercase ;';

	$fashion_designer_mart_custom_css .='}';

}else if($fashion_designer_mart_text_transform == 'LOWERCASE'){

	$fashion_designer_mart_custom_css .='#main-menu ul li a{';

		$fashion_designer_mart_custom_css .='text-transform: lowercase ;';

	$fashion_designer_mart_custom_css .='}';
}

/*---------------------------Container Width-------------------*/

$fashion_designer_mart_container_width = get_theme_mod('fashion_designer_mart_container_width');

	$fashion_designer_mart_custom_css .='body{';

		$fashion_designer_mart_custom_css .='width: '.esc_attr($fashion_designer_mart_container_width).'%; margin: auto;';

	$fashion_designer_mart_custom_css .='}';

	/*---------------------------Slider-content-alignment-------------------*/

	$fashion_designer_mart_slider_content_alignment = get_theme_mod( 'fashion_designer_mart_slider_content_alignment','LEFT-ALIGN');

	 if($fashion_designer_mart_slider_content_alignment == 'LEFT-ALIGN'){

			$fashion_designer_mart_custom_css .='.blog_box{';

				$fashion_designer_mart_custom_css .='text-align:left;';

			$fashion_designer_mart_custom_css .='}';


		}else if($fashion_designer_mart_slider_content_alignment == 'CENTER-ALIGN'){

			$fashion_designer_mart_custom_css .='.blog_box{';

				$fashion_designer_mart_custom_css .='text-align:center; left:0; right:0;';

			$fashion_designer_mart_custom_css .='}';


		}else if($fashion_designer_mart_slider_content_alignment == 'RIGHT-ALIGN'){

			$fashion_designer_mart_custom_css .='.blog_box{';

				$fashion_designer_mart_custom_css .='text-align:right; left:55%; right:15%';

			$fashion_designer_mart_custom_css .='}';

		}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$fashion_designer_mart_scroll_top_position = get_theme_mod( 'fashion_designer_mart_scroll_top_position','Right');

	if($fashion_designer_mart_scroll_top_position == 'Right'){

		$fashion_designer_mart_custom_css .='.scroll-up{';

			$fashion_designer_mart_custom_css .='right: 20px;';

		$fashion_designer_mart_custom_css .='}';

	}else if($fashion_designer_mart_scroll_top_position == 'Left'){

		$fashion_designer_mart_custom_css .='.scroll-up{';

			$fashion_designer_mart_custom_css .='left: 20px;';

		$fashion_designer_mart_custom_css .='}';

	}else if($fashion_designer_mart_scroll_top_position == 'Center'){

		$fashion_designer_mart_custom_css .='.scroll-up{';

			$fashion_designer_mart_custom_css .='right: 50%;left: 50%;';

		$fashion_designer_mart_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$fashion_designer_mart_pagination_setting = get_theme_mod('fashion_designer_mart_pagination_setting',true);

	if($fashion_designer_mart_pagination_setting == false){

		$fashion_designer_mart_custom_css .='.nav-links{';

			$fashion_designer_mart_custom_css .='display: none;';

		$fashion_designer_mart_custom_css .='}';
	}

	/*---------------------------related Product Settings-------------------*/


$fashion_designer_mart_related_product_setting = get_theme_mod('fashion_designer_mart_related_product_setting',true);

	if($fashion_designer_mart_related_product_setting == false){

		$fashion_designer_mart_custom_css .='.related.products, .related h2{';

			$fashion_designer_mart_custom_css .='display: none;';

		$fashion_designer_mart_custom_css .='}';
	}

