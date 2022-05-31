<?php
/** 
 * Template Name: project
*/
?>
<?php get_header(); ?>

      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <img src='<?php echo get_template_directory_uri(); ?>/asset/image/cropped-CDOT-Logo.png'>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(5); ?>">主頁</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      關於我們
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a href="<?php echo get_page_link(7); ?>" class="dropdown-item">社企團隊</a></li>
                      <li><a href="<?php echo get_page_link(53); ?>" class="dropdown-item" >甚麼是教練學</a></li>
                    </ul>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo get_page_link(12); ?>">社企工作坊</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(47); ?>">DOT Wave</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(73); ?>">實習生計劃</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link " href="<?php echo get_page_link(9); ?>">聯絡我們</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
      </header>

        <section id='project-title'>
            <div class="jumbotron">
                <div class='project'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <h2 style="color:white;">社企工作坊</h2>
                            </div>
                        </div>
                    </div>
                <div>
            </div>
        </section>

        <section id='last'>
            <h3 style='text-align: center'>社企工作坊</h3>
              <div class='empty-space1' style='height: 52px'></div>
                <div class='container'>
                    <div class='row'>

                          <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => '10',
                                'paged' => $paged
                            );

                            $post_query = new WP_Query($args);
                            if ($post_query->have_posts()):
                                while ($post_query->have_posts()):
                                    $post_query->the_post();
                            ?>
                            <div class='col-sm-4'>
                                <div class='case'>
                                    <a href='<?php echo get_permalink();?>'>
                                        <div class='upper'>
                                            <img src='<?php the_post_thumbnail_url(); ?>'>
                                        </div>
                                        <div class='innertext'>
                                            <h4><?php the_title(); ?></h4>
                                            <p>發佈日期：<?php echo get_the_date(); ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php
                                endwhile;
                            endif;

                            ?>
                    </div>
                    <div class='row'>

                      <div class='wppagin'>

                      <?php
                          /* pagination */

                          $big = 999999999; // need an unlikely integer
                          $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                          echo paginate_links(array(
                          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big) )),
                          'format' => '?paged=%#%',
                          'current' => max(1, get_query_var('paged')),
                          'total' => $post_query->max_num_pages
                          ));

                      ?>

                      </div>

                    </div>
                </div>
        </section>

<?php get_footer(); ?>