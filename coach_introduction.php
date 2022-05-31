<?php
/** 
 * Template Name: Coach introduction 
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
                  <li class="nav-item dropdown active">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      關於我們
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="<?php echo get_page_link(7); ?>" class="dropdown-item">社企團隊</a></li>
                        <li><a href="<?php echo get_page_link(77); ?>" class="dropdown-item" >發展過程</a></li>
                        <li><a href="<?php echo get_page_link(53); ?>" class="dropdown-item" >甚麼是教練學</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(12); ?>">社企服務計劃</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(47); ?>">DOT Wave</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(73); ?>">實習生計劃</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link " href="<?php echo home_url(9); ?>">聯絡我們</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
      </header>

        

<?php get_footer(); ?>