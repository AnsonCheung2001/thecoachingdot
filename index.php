<?php
/** 
 * Template Name: fontpage
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
                  <li class="nav-item active">
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
                  <li class="nav-item">
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

          <div class="slider">
            <!-- fade css -->
            <div class="myslide fade">
                <div class="txt">
                    <h1>專業啓導服務 激發無限潛能</h1>
                    <a class="btn contactdetail" href="<?php echo get_page_link(9); ?>">聯絡我們</a>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/asset/image/dark.jpg" style="width: 100%; height: 100%;">
            </div>
            
            <div class="myslide fade">
                <div class="txt">
                    <h1>Be Open to Diversity, Achieve Transformation</h1>
                    <p><a class="btn contactdetail" href="<?php echo get_page_link(9); ?>">Contact Us</a></p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/asset/image/introduction2.2.jpg" style="width: 100%; height: 100%;">
            </div>
            
            <!-- /fade css -->
            
            <!-- onclick js -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            
            <div class="dotsbox" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
            </div>
            <!-- /onclick js -->
          </div>

          <section id='intro'>
            <div class='container reveal'>
              <div class='row'>
                <div class='col-md-8 offset-md-2 introtext'>
                  <h3 style='text-align: left; color: #00b9f2'>生命中的突破</h3>
                  <p  style='text-align: left'>在事業、學業或人際關係上，都有不鮮遇到樽頸位、迷失方向的時候，以致我們停濟不前。</p>
                  <p  style='text-align: left'>為了讓你更清楚掌握未來，我們提供多方面的培訓服務，助你確立清晰目標，朝目標前進，不斷超越自我。</p>
                  <p  style='text-align: left'>我們希望透過教練學以生命影響生命。</p>
                  <p><a href="<?php echo get_page_link(7); ?>"><strong>我們是Coaching DOT。</strong></a></p>
                </div>
              </div>
            </div>
          </section>

          <section id='second'>
            <div class='container reveal'>
              <div class='row'>
                <div class='col-md-4'>
                  <div class='icon' style='text-align: center' >
                      <i class="fas fa-user-tie fa-3x"></i>
                  </div>
                    <h5 style='text-align: center'>教練團隊</h5>
                    <p style='text-align: center'>我們的教練均獲得國際教練協會(IAC)認證<br>具備充分的經驗和技巧<br>能為客戶提供一對一的專業啓導服務</p>
                </div>
                <div class='col-md-4'>
                  <div class='icon' style='text-align: center'>
                    <i class="fas fa-dollar-sign fa-3x"></i>
                  </div>
                    <h5 style='text-align: center'>社創培訓計劃</h5>
                    <p style='text-align: center'>爲你設計最適合你的培訓方案<br>提供彈性收費<br>以相宜的價錢助你達成目標</p>
                </div>
                <div class='col-md-4'>
                  <div class='icon' style='text-align: center'>
                    <i class="fas fa-users fa-3x"></i>
                  </div>
                    <h5 style='text-align: center'>傷健共融</h5>
                    <p style='text-align: center'>有賴業界支持<br>我們已成功為超過100+中小企客戶提供coaching服務</p>
                </div>
              </div>
            </div>
          </section>
    
          <section id='third'>
              <h3 style='text-align: center'>服務範疇</h3>
              <div class='empty-space1' style='height: 52px'></div>
            <div class='container'>
              <div class='row'>
                <div class='col-md-4'>
                  <div class='upper reveal'>
                    <h2>團隊建立</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們會教授團隊建立的技巧，令到團隊更具效率和生產力</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                  <div class='middle reveal'>
                    <h2>生命教育</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們會到不同學校，社褔機構向大眾宣揚生命教育</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                  <div class='lower reveal'>
                    <h2>勵志演講</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們會舉行勵志演講，令到生活受到挫折的你重拾繼續奮鬥的勇氣。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                </div>
                <div class='col-md-4 '>
                  <div class='upper reveal'>
                    <h2>教師培訓</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們會為學童提供全面支援，促進全人進展。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                  <div class='middle reveal'>
                    <h2>親子教練學</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們會教授顧客溝通技巧，使顧客可以改善人際關係，在處理上突圍而出。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                  <div class='lower reveal'>
                    <h2>實習生計劃</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們有部分團員是視障教練，但他們都是被國際認可的教練，可以為殘疾人士提供情緒支援。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                </div>
                <div class='col-md-4 '>
                  <div class='upper reveal'>
                    <h2>身教品德</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們會為學童提供全面支援，促進全人進展。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                  <div class='middle reveal'>
                    <h2>人際溝通</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們會教授顧客溝通技巧，使顧客可以改善人際關係，在處理上突圍而出。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                  <div class='lower reveal'>
                    <h2>機構培訓</h2>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>我們有部分團員是視障教練，但他們都是被國際認可的教練，可以為殘疾人士提供情緒支援。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                    <a href="#">點擊並了解更多</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
    
          <section id='last'>
            <h3 style='text-align: center'>社企服務計劃</h3>
              <div class='empty-space1' style='height: 52px'></div>
                <div class='container reveal'>
                    <div class='row'>

                          <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => '3',
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
                </div>
        </section>
        
<?php get_footer(); ?>
