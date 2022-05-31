<?php
/** 
 * Template Name: aboutcoach
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
                      <li><a href="<?php echo get_page_link(53); ?>" class="dropdown-item" >甚麼是教練學</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
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

      <section id='AboutCoachIntro'>
        <div class='Image light' data-background-image="<?php echo get_template_directory_uri(); ?>/asset/image/aboutcoachingtitle.jpg" style='background-image: url(<?php echo get_template_directory_uri(); ?>/asset/image/aboutcoachingtitle.jpg)'></div>
          <div class='container'>
            <div class='row'>
                <div class='col-md-12' style='width: fit-content'>
                  <div class='title'>
                    <h1>甚麼是coaching 教練學</h1>
                    <hr>
                    <p>#一個經常被誤會的名詞</p>
                  </div>
                </div>
            </div>
          </div>
      </section>

      <section id='AboutCoachFirst'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <div class='CoachDetail'>
                      <div class='appeared_animate'>
                        <h2>coaching 教練學到底是什麼</h2>
                        <p>一般而言，普羅大眾認識或認知的「教練」往往都是運動教練，他們的職責在於協助人們學習運動，如足球、籃球、羽毛球等等...... 又可能在大眾學習一種運動後按個人水平設計適當的練習或培訓提升受指導的運動能力，以達到他們的目標。</p>
                        <p><span style="font-weight: bolder; font-size: 30px">但是</span>，我們說的教練學(coaching) 卻是一種深層次的對話模式，這種模式可用於一對一或一對多人的對話中，教練（coach）與受教練者（coachee）往往會在一個安全和舒適的環境進行教練對話。coachee能放心地向coachee訴說他們的現況和目標，coach也會在適當的時機提出合適的問題，理清coachee現況，配合有效提問啟發coachee，如鏡子一般讓coachee看見自身的障礙及可行的處理方向。過程中，透過自身訴說或教練提問，coachee或會發現自身與問題之間的聯繫，從而作出一個最能接受的決定。</p>
                      </div>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='CoachPhoto'>
                        <img src='<?php echo get_template_directory_uri(); ?>/asset/image/coachphoto1.jpg'>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <section id='AboutCoachSecond'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-8 '>
                    <div class='CoachPhoto reveal'>
                        <img src='<?php echo get_template_directory_uri(); ?>/asset/image/training_vs_coaching.svg' width='100%'>
                    </div>
                </div>
                <div class='col-md-4 white'>
                    <div class='CoachDetail reveal'>
                        <h2>教練和一般的培訓之分別</h2>
                        <p>一個培訓師往往會在training的適當緩解加入coaching元素，以配合training的目標，因此<span style="font-weight: bolder; color: #63c5ff">coaching和training並非兩個相對的形式</span>，而是相輔相成的。例如前文提到的一對多人的coaching往往也會以training形式呈現，coaching的元素或就藏在活動中，<span style="font-weight: bolder; color: #63c5ff">目的就是希望參加者經歷活動後自我啟發。</span></p>
                    </div>
                </div>

            </div>
        </div>
      </section>

      <section id='AboutCoachThird'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='CoachDetail'>
                        <h2>Coaching 可以應用於甚麼範疇</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class='row'>
              <div class='col-md-6 reveal'>
                <img name='slide'>
              </div>
              <div class='col-md-6'>
                <div class='box reveal'>
                    <div class='box-icon'>
                      <i class="fas fa-heart" style='font-size: 18px;'></i>
                      <label><b>生命教練</b></label>
                    </div>
                    <div class='box-content'>
                      <span>生命教練會透過了解受教練者的個性，目標，夢想和背景，並提出專業提問，啟發你的思維，引導你自己尋找出屬於你的答案</span>
                    </div>
                    <div class='empty-space2' style='height: 12px'></div>
                    <div class='box-icon'>
                      <i class="fas fa-child" style='font-size: 18px;'></i>
                      <label><b>家長教練</b></label>
                    </div>
                    <div class='box-content'>
                      <span>家長教練是引用教練學的知識和技術啟發家長做父母的方向，了解自己教養子女的目標，以及與子女建立平等尊重的關係</span>
                    </div>
                    <div class='empty-space2' style='height: 12px'></div>
                    <div class='box-icon'>
                      <i class="fas fa-briefcase" style='font-size: 18px;'></i>
                      <label><b>職業教練</b></label>
                    </div>
                    <div class='box-content'>
                      <span>職業教練是引用教練學的知識和技術幫助員工了解個人優點，可以進一步發展的地方和合適的職涯方向</span>
                    </div>
                    <div class='empty-space2' style='height: 12px'></div>
                    <div class='box-icon'>
                      <i class="fas fa-bullseye" style='font-size: 18px;'></i>
                      <label><b>事業教練</b></label>
                    </div>
                    <div class='box-content'>
                      <span>事業教練會協助受教練者了解自己的興趣、願望、技能、成就和價值觀，為他們帶來新角度，繼而促進個人思維發展和增強決策力</span>
                    </div>
                    <div class='empty-space2' style='height: 12px'></div>
                    <div class='box-icon'>
                      <i class="fas fa-home" style='font-size: 18px;'></i>
                      <label><b>婚姻教練</b></label>
                    </div>
                    <div class='box-content'>
                      <span>婚姻教練會提供婚戀情感的輔導和訓練，繼而改善關係</span>
                    </div>
                    <div class='empty-space2' style='height: 12px'></div>
                </div>
              </div>
            </div>
        </div>
      </section>

      
      <section id='AboutCoachFourth'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='CoachDetail reveal'>
                        <h2> Coaching 個案及故事分享</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class='row'>
              <div class='col-sm-3 text-center offset-1 reveal'>
                <img src='<?php echo get_template_directory_uri(); ?>/asset/image/Coacher_Photo2.svg' style='vertical-align: middle'>
                <h6>張賜豪教練</h6>
              </div>
              <div class='col-sm-8 reveal'>
                <p>
                  本人是一名國際教練協會認證精髓教練，我將在一下環節分享自己與一名coachee進行了八次教練對話的故事
                </p>
                <p>
                  其實這名女士很清楚自己的目的，當她完成訴說完故事後，目的已經顯然易見——就是希望改善自己與小兒子的關係以及在兒子去外地讀大學前和她留下美好回憶。與她確認coaching目標後，我也嘗試在她所表達的內容中進行發問：「你和兒子的關係現在是怎樣的？」她也表示關係很好，只是沒有像大兒子般親密，而且因為兒子仍在外地讀書，因為疫情，未能立刻回家，溝通不但少了，她更覺得兒子不太想說話，和大兒子相處的情形比較下來相距甚遠。
                </p>
                <p>他一直覺得小兒子不喜歡他，只是當我把她陳述的內容總結一次並問她「留意到什麼？感受到什麼？」她有仿佛發現自己的思維充滿了假設，我們的對話開始出現更多的自我察覺，更多的笑聲，就算第一次教練對話已經處理了他的問題，也令她認識自己更多，但他仍和我進行了七次不同主題的付費教練對話，讓我開心的是看見coachee發現了自身的問題並做出改變，而且一份信任也讓我們成為了好友。</p>
              </div>
            </div>
        </div>
      </section>

      <section id='AboutCoachFifth' style='background-color: #979797;'>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-12'>
              <div class='CoachDetail reveal'>
                 <h2 style='color: white;'>想了解更多？歡迎你聯絡我們</h2>
                 <hr><br>
                 <a class="btn contactdetail" href="<?php echo get_page_link(9); ?>">聯絡我們</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script>
        var i = 0;
        var images = [];
        var time = 3000;

        /* image list */
        images[0] = '<?php echo get_template_directory_uri(); ?>/asset/image/family.svg';
        images[1] = '<?php echo get_template_directory_uri(); ?>/asset/image/marriageCoach.svg';
        images[2] = '<?php echo get_template_directory_uri(); ?>/asset/image/JobCoach.svg';

        //change image
        function changeimg(){
          document.slide.src = images[i];

          if(i < images.length -1){
            i++;
          }
          else{
            i = 0;
          }

          setTimeout("changeimg()", time);
        }

        window.onload=changeimg;
        
        document.addEventListener("DOMContentLoaded", function() {

          var loading = new TimelineMax();
          loading.fromTo(".title",0.6,{
              autoAlpha: 0,
              y: 20
          },{
              autoAlpha: 1,
              y: 0
          })
          .fromTo(".appeared_animate",0.6,{
              autoAlpha: 0,
              y: 20
          },{
              autoAlpha: 1,
              y: 0
          })
          ;

        });

        
        document.addEventListener('scroll', reveal);

        function reveal(){
        var reveals = document.querySelectorAll('.reveal');

            for(var i = 0; i < reveals.length; i++){

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if(revealtop < windowheight - revealpoint){
                  reveals[i].classList.add('active');
                }
            }
        };
        
      </script>
      

<?php get_footer(); ?>