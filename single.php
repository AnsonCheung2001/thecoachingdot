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
                      <li><a href="<?php echo get_page_link(77); ?>" class="dropdown-item" >發展過程</a></li>
                      <li><a href="<?php echo get_page_link(53); ?>" class="dropdown-item" >甚麼是教練學</a></li>
                    </ul>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo get_page_link(12); ?>">社企工作坊</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(47); ?>">DOT WAVE</a>
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

      <?php if(have_posts()):while(have_posts()):the_post(); ?>

        <section id='project-content'>

            <div class='container'>

                <div class='row'>
                    <div class='col-sm-10 offset-1'>
                        <h1><?php the_title(); ?></h1>
                        <hr>
                        <div class='project_content'>
                          <ul>
                              <li class='jdate'>發佈日期：<?php echo get_the_date(); ?></li>
                          </ul>
                            <div class='photo1'> 
                                  <img src='<?php the_post_thumbnail_url(); ?>'>
                            </div>
        
                          <?php the_content(); ?>

                        </div>
                    </div>
                </div>
                <div class='empty-space4' style='height: 60px'></div>
                <div class='row'>
                  <div class='col-sm-8 offset-2 text-center'>
                      <h6>追蹤我們的社交平台，了解我們的最新活動和動態</h6>
                      <a href='https://www.facebook.com/The-Coaching-Dot-1732144047044355'><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a>
                      <a href='https://www.instagram.com/thecoachingdot/'><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z"/></svg></a>
                  </div>
                </div>

            </div>

        </section>

      <?php endwhile; endif; ?>


<?php get_footer(); ?>