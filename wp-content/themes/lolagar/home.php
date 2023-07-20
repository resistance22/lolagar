<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lolagar
 */

get_header();
$food_types = get_terms( array(
  'taxonomy'   => 'stmkz__food_type',
  'hide_empty' => false,
) );
?>
	<main id="primary" class="site-main">
    <nav class="food-types">
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php foreach($food_types as $food_type ): ?>
            <div class="swiper-slide food-type-item" food-type-id-btn="btn-<?php echo $food_type -> term_id; ?>">
              <div class="food-type-item-inner" >
                <div class="food-type-icon">
                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 201.57 218.07"><path d="M219,21.29l11.46,7.51,5.43-8.3L215.47,7.12,135.12,153.49,54.77,7.12,34.34,20.5l5.43,8.3,11.46-7.51L129.46,163.8,95.77,225.19h78.7L140.78,163.8Zm-61.3,194H112.53l22.59-41.15Z" transform="translate(-34.34 -7.12)"/></svg>
                </div>
                <p>
                  <?php echo $food_type -> name; ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </nav>
    <div class="foods">
      <?php foreach($food_types as $food_type ): ?>
          <div class="food-type-section" food-type-id="type-<?php echo $food_type -> term_id; ?>">
            <div class="food-type-section-title">
              <div class="food-type-section-icon">
                <svg width="33" height="35" viewBox="0 0 33 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1_95)">
                    <path d="M16.5 18.9293L13.6367 16.6035L16.0638 12.1363L10.0659 1.09887L9.18583 1.68033L8.76991 1.0374L10.3372 0L16.5 11.3371L22.6628 0L24.2301 1.0374L23.8142 1.68033L22.9341 1.09887L16.9337 12.1363L19.3607 16.6035L16.5 18.9293ZM14.6106 16.4088L16.5 17.9431L18.3894 16.4088L16.5 12.9355L14.6106 16.4088Z" fill="black"/>
                    <path d="M7.72756 35L4.86428 32.6742L7.29135 28.207L1.29596 17.1696L0.415924 17.751L0 17.1081L1.56732 16.0707L7.72756 27.4078L13.8903 16.0707L15.4577 17.1081L15.0417 17.751L14.1617 17.1696L8.16377 28.207L10.5908 32.6742L7.72756 35ZM5.84069 32.4795L7.73009 34.0138L9.6195 32.4795L7.73009 29.0061L5.84069 32.4795Z" fill="black"/>
                    <path d="M16.5 35L13.6367 32.6742L16.0638 28.207L10.0659 17.1696L9.18583 17.751L8.76991 17.1081L10.3372 16.0707L16.5 27.4078L22.6628 16.0707L24.2301 17.1081L23.8142 17.751L22.9341 17.1696L16.9362 28.207L19.3633 32.6742L16.5 35ZM14.6106 32.4795L16.5 34.0138L18.3894 32.4795L16.5 29.0061L14.6106 32.4795Z" fill="black"/>
                    <path d="M25.2699 35L22.4066 32.6742L24.8337 28.207L18.8383 17.1696L17.9583 17.751L17.5423 17.1081L19.1097 16.0707L25.2699 27.4078L31.4327 16.0707L33 17.1081L32.5841 17.751L31.704 17.1696L25.7061 28.207L28.1332 32.6742L25.2699 35ZM23.383 32.4795L25.2724 34.0138L27.1618 32.4795L25.2724 29.0061L23.383 32.4795Z" fill="black"/>
                  </g>
                  <defs>
                    <clipPath id="clip0_1_95">
                      <rect width="33" height="35" fill="white"/>
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p>
                <?php echo $food_type -> name; ?>
              </p>
              <div class="food-type-section-icon">
                <svg width="33" height="35" viewBox="0 0 33 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1_95)">
                    <path d="M16.5 18.9293L13.6367 16.6035L16.0638 12.1363L10.0659 1.09887L9.18583 1.68033L8.76991 1.0374L10.3372 0L16.5 11.3371L22.6628 0L24.2301 1.0374L23.8142 1.68033L22.9341 1.09887L16.9337 12.1363L19.3607 16.6035L16.5 18.9293ZM14.6106 16.4088L16.5 17.9431L18.3894 16.4088L16.5 12.9355L14.6106 16.4088Z" fill="black"/>
                    <path d="M7.72756 35L4.86428 32.6742L7.29135 28.207L1.29596 17.1696L0.415924 17.751L0 17.1081L1.56732 16.0707L7.72756 27.4078L13.8903 16.0707L15.4577 17.1081L15.0417 17.751L14.1617 17.1696L8.16377 28.207L10.5908 32.6742L7.72756 35ZM5.84069 32.4795L7.73009 34.0138L9.6195 32.4795L7.73009 29.0061L5.84069 32.4795Z" fill="black"/>
                    <path d="M16.5 35L13.6367 32.6742L16.0638 28.207L10.0659 17.1696L9.18583 17.751L8.76991 17.1081L10.3372 16.0707L16.5 27.4078L22.6628 16.0707L24.2301 17.1081L23.8142 17.751L22.9341 17.1696L16.9362 28.207L19.3633 32.6742L16.5 35ZM14.6106 32.4795L16.5 34.0138L18.3894 32.4795L16.5 29.0061L14.6106 32.4795Z" fill="black"/>
                    <path d="M25.2699 35L22.4066 32.6742L24.8337 28.207L18.8383 17.1696L17.9583 17.751L17.5423 17.1081L19.1097 16.0707L25.2699 27.4078L31.4327 16.0707L33 17.1081L32.5841 17.751L31.704 17.1696L25.7061 28.207L28.1332 32.6742L25.2699 35ZM23.383 32.4795L25.2724 34.0138L27.1618 32.4795L25.2724 29.0061L23.383 32.4795Z" fill="black"/>
                  </g>
                  <defs>
                    <clipPath id="clip0_1_95">
                      <rect width="33" height="35" fill="white"/>
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
            <?php 
              $foods = get_posts(array(
                'post_type' => 'stmkz_food',
                'numberposts' => -1,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'stmkz__food_type',
                    'field' => 'term_id', 
                    'terms' => $food_type -> term_id,
                    'include_children' => false
                  )
                )
              ));
            ?>
            <div class="food-section-cont">
              <?php foreach($foods as $food): ?>
                <div class="food-item">
                  <div class="food-item-inner">
                    <div class="food-image">
                      <img src="<?php echo get_the_post_thumbnail_url($food -> ID, 'thumbnail'); ?>" alt="<?php echo $food -> post_title; ?>-image" />
                    </div>
                    <div class="food-data">
                      <h2>
                        <?php echo $food->post_title; ?>
                      </h2>
                      <p class="content">
                        <?php echo $food->post_content; ?>
                      </p>
                      <p class="price">
                        <?php if(pll_current_language() == 'fa'): ?>
                          <?php echo fa_number(get_post_meta($food->ID,'price',false)[0]); ?> تومان
                        <?php else: ?>
                          <?php echo get_post_meta($food->ID,'price',false)[0]; ?> Toomans
                        <?php endif; ?>
                      </p>
                    </div>
                  </div>
                </div> 
              <?php endforeach; ?>
            </div>
          </div>
      <?php endforeach; ?>
    </div>
	</main><!-- #main -->

<?php
get_footer();
