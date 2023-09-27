<?php if ( get_theme_mod('fashion_designer_mart_products_section_enable', true) == true ) : ?>
<div id="hot_products" class="py-5">
	<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 align-self-center">
        <?php if ( get_theme_mod('fashion_designer_mart_products_main_heading') ) : ?>
    		  <h3><?php echo esc_html(get_theme_mod('fashion_designer_mart_products_main_heading'));?></h3>
        <?php endif; ?>
      </div>
      <div class="col-lg-8 col-md-7 align-self-center">
        <div class="tab">
          <div class="tab-section">
            <ul class="m-0">
              <?php 
                $fashion_designer_mart_post = get_theme_mod('fashion_designer_mart_products_tab_number', '');
                for ( $fashion_designer_mart_i = 1; $fashion_designer_mart_i <= $fashion_designer_mart_post; $fashion_designer_mart_i++ ){ ?>
                <li class="product-tab align-self-center">
                  <button class="tablinks" onclick="fashion_designer_mart_openCity(event, '<?php $fashion_designer_mart_main_id = get_theme_mod('fashion_designer_mart_products_tabs_text'.$fashion_designer_mart_i); $fashion_designer_mart_tab_id = str_replace(' ', '-', $fashion_designer_mart_main_id); echo $fashion_designer_mart_tab_id; ?> ')">
                      <?php echo esc_html(get_theme_mod('fashion_designer_mart_products_tabs_text'.$fashion_designer_mart_i)); ?>
                  </button>
                </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php for ( $fashion_designer_mart_i = 1; $fashion_designer_mart_i <= $fashion_designer_mart_post; $fashion_designer_mart_i++ ){ ?>
      <div id="<?php $fashion_designer_mart_main_id = get_theme_mod('fashion_designer_mart_products_tabs_text'.$fashion_designer_mart_i); $fashion_designer_mart_tab_id = str_replace(' ', '-', $fashion_designer_mart_main_id); echo $fashion_designer_mart_tab_id; ?>" class="tabcontent mt-3">

        <div class="row">
          <?php
          $fashion_designer_mart_product_data = get_theme_mod('fashion_designer_mart_products_category'.$fashion_designer_mart_i);
          if ( class_exists( 'WooCommerce' ) ) {
            $fashion_designer_mart_args = array(
              'post_type' => 'product',
              'posts_per_page' => get_theme_mod('fashion_designer_mart_products_per_page'),
              'product_cat' => $fashion_designer_mart_product_data,
              'order' => 'ASC'
            );
            $loop = new WP_Query( $fashion_designer_mart_args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            	<div class="col-xl-3 col-lg-4 col-md-6">
                <div class="tab-product">
                  <div class="product-image my-4">
                    <figure>
                      <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                    </figure>
                    <div class="cart-button">
                      <span class="icon" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><span class="button1"><?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?></span></span>
                    </div>
                  </div>
                  <div class="product-details">
              	    <h4 class="product-text mt-2 "><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h4>
                    <h5 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></h5>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_query(); ?>
          <?php } ?>
    	  </div>
      </div>
    <?php }?>
	</div>
</div>
<?php endif; ?>
