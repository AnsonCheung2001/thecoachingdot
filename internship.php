<?php
/** 
 * Template Name: internship
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
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(12); ?>">社企工作坊</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(47); ?>">DOT Wave</a>
                  </li>
                  <li class="nav-item active">
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

      <section id='TheDotWaveTitle'>

              <h1><b>實習生職業才能發展計劃</b></h1>
              <p><b>加入我們!</b> 讓我們一起建立傷健共融的社會</p>
              <div class="photo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/image/InternshipPhoto2.jpg">
              </div>

      </section>

      <section id='TheDotWaveChoice'>
        <div class='container'>

              <a href='#section1' class='moveTo1 col-xs-12 col-md-3 mouse_style_hand'>
                  <i class="fas fa-hand-holding-heart fa-3x"></i>
                  <p>理念及願景</p>
              </a>

              <a href='#section2' class='moveTo2 col-xs-12 col-md-3 mouse_style_hand'>
                  <i class="fas fa-scroll fa-3x"></i>
                  <p>計劃具體內容</p>
              </a>

              <a href='#section3' class='moveTo3 col-xs-12 col-md-3 mouse_style_hand'>
                  <i class="fas fa-video fa-3x"></i>
                  <p>實習生分享</p>
              </a>

              <a href='#AboutCoachFifth' class='moveTo4 col-xs-12 col-md-3 mouse_style_hand'>
                  <i class="fas fa-hands-helping fa-3x"></i>
                  <p>加入我們</p>
              </a> 
        </div>
      </section>

    <div id="fullpage">
        <div class="section" id="section1">
          <div class='container'>
            <div class='row sentence1'>
              <h2 class='col-md-12 text-center'>
                理念及遠景
              </h2>
              <p class='col-md-10 offset-md-1 text-center'>
                
              </p>
            </div>

            <div class='row sentence2'>
                <div class='col-md-4'>
                  <div class='icon' style='text-align: center' >
                      <i class="fas fa-dollar-sign fa-5x"></i>
                  </div>
                    <h5 style='text-align: center'>真實工作體驗</h5>
                    <p style='text-align: center'>讓在學的年青人 (中四至大學) 在課餘時間，累積一點工作經驗及技能，學習職場的人際溝通與團隊合作技能 ，體驗真實的工作生涯，希望他們能在投身社會之前，給自己一點實戰磨練。</p>
                </div>
                <div class='col-md-4'>
                  <div class='icon' style='text-align: center'>
                    <i class="fas fa-blind fa-5x"></i>
                  </div>
                    <h5 style='text-align: center'>貢獻社會</h5>
                    <p style='text-align: center'>實習生將視障教練/人士合作，在社企資深同事的指導下，透過合作發揮自才能，繼而大眾對視障人士的既定觀感有所改變，社會更為共融。</p>

                </div>
                <div class='col-md-4'>
                  <div class='icon' style='text-align: center'>
                    <i class="fas fa-users fa-5x"></i>
                  </div>
                    <h5 style='text-align: center'>多方面工作機會</h5>
                    <p style='text-align: center'>本社企非常重視參加者的個人潛能發展，而我們實習生計劃亦涵蓋多種範疇，包括：網頁開發及設計, 社交媒體管理, 活動及項目管理, 基金申請及計劃書撰寫等等 </p>
                </div>
            </div>
          </div>
        </div>

        <div class="section" id="section2">
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='project-title'>
                            <h2>計劃具體內容</h2>             
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='project-title'>
                            <h2>some content</h2>             
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>

        <div class="section" id="section3_InternsSharing">
            <div class='container'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='project-title'>
                            <h2>實習生分享</h2>             
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-10 offset-md-1 ToLeft'>
                        <div class='work-content-title text-left'>
                            <p>負責項目：網頁開發</p>
                        </div>
                        <div class='work-content-content'>
                            <div class='work-content-content-photo'>
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/image/10VI.svg">
                            </div>
                            <div class='HowToWork'>
                                <p>"實習生Anson係我地嘅實習生計劃嘗試不同的工作，結果佢發現自己對網頁編程十分感興趣。"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-10 offset-md-1 ToRight'>
                        <div class='work-content-title text-left'>
                            <p>負責項目：基金申請計劃書</p>
                        </div>
                        <div class='work-content-content cleafix'>
                            <div class='float-right-sm HowToWork'>
                                <p>"中意寫作嘅Siu Wing係我地嘅實習生計劃負責撰寫基金申請計劃書，在專業教練的指導下，佢學到很多撰寫基金申請計劃書嘅細節，現為本社企撰寫基金申請計劃書"</p>
                            </div>
                            <div class='float-right-lg work-content-content-photo'>
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/image/training.svg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-10 offset-md-1 ToLeft'>
                        <div class='work-content-title text-left'>
                            <p>負責項目：為有特殊需要兒童之家長舉辦工作坊</p>
                        </div>
                        <div class='work-content-content'>
                            <div class='work-content-content-photo'>
                                <img src="<?php echo get_template_directory_uri(); ?>/asset/image/intern.svg" >
                            </div>
                            <div class='HowToWork'>
                                <p>實習生ivy </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="AboutCoachFifth" style='background-color: #979797;'>
            <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                <div class='CoachDetail'>
                    <h2 style='color: white;'>想加入我地？歡迎你聯絡我們</h2>
                    <hr><br>
                    <a class="btn contactdetail" href="<?php echo get_page_link(9); ?>">聯絡我們</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

  <script>

        document.addEventListener('scroll', reveal1);

        function reveal1(){
        var reveals1 = document.querySelectorAll('.ToLeft');

            for(var i = 0; i < reveals1.length; i++){

                var windowheight1 = window.innerHeight;
                var revealtop1 = reveals1[i].getBoundingClientRect().top;
                var revealpoint1 = 150;

                if(revealtop1 < windowheight1 - revealpoint1){
                  reveals1[i].classList.add('active');
                }
                else{
                  reveals1[i].classList.remove('active');
                }
            }
        };

        document.addEventListener('scroll', reveal2);

        function reveal2(){
        var reveals2 = document.querySelectorAll('.ToRight');
        

            for(var i = 0; i < reveals2.length; i++){

                var windowheight2 = window.innerHeight;
                var revealtop2 = reveals2[i].getBoundingClientRect().top;
                var revealpoint2 = 150;

                if(revealtop2 < windowheight2 - revealpoint2){
                  reveals2[i].classList.add('active');
                }
                else{
                  reveals2[i].classList.remove('active');
                }
            }
        };

      
      document.addEventListener("DOMContentLoaded", function() {

      var loading = new TimelineMax();
      loading.fromTo("#TheDotWaveTitle h1",0.3,{
          autoAlpha: 0,
          y: 20
      },{
          autoAlpha: 1,
          y: 0
      })
      .fromTo("#TheDotWaveTitle p",0.3,{
          autoAlpha: 0,
          y: 20
      },{
          autoAlpha: 1,
          y: 0
      })
      .fromTo("#TheDotWaveTitle h3",0.3,{
          autoAlpha: 0,
          y: 20
      },{
          autoAlpha: 1,
          y: 0
      })
      .fromTo(".moveTo1, .moveTo2, .moveTo3, .moveTo4",0.3,{
          autoAlpha: 0,
      },{
          autoAlpha: 1,
      },'-=0.3');

      });
  </script>
<?php get_footer(); ?>