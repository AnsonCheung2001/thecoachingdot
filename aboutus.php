<?php
/** 
 * Template Name: aboutus
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
                    <a class="nav-link" href="<?php echo get_page_link(47); ?>">DOT Wave</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(73); ?>">實習生計劃</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link" href="<?php echo get_page_link(9); ?>">聯絡我們</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
      </header>

      <section id='aboutus-title'>
            <div class="parallax-window" data-parallax="scroll" data-z-index="1" data-image-src="<?php echo get_template_directory_uri(); ?>/asset/image/case1.jpeg">
                  <div class='info text-center'>
                    <h1>社企團隊</h1>
                  </div>
            </div>
      </section>

      <section id='aboutus-intro'>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-4 story'>
              <h2>我們的故事</h2>
              <p> Coaching DOT成立於2015年，我們運用教練學為不同企業、機構、學校提供培訓服務，服務包括講座、工作坊和單對單的教練面談服務，亦為客戶提供其他顧問服務。培訓團隊由幾位來自不同領域、經驗豐富的專業教練組成，包括幾位視障教練和健視教練。</p>
            </div>
            <div class='col-sm-4 mission'>
              <h2>使命</h2>
              <p>我們致力推廣生命教練學和傷健共融，希望透過以上服務為社會傳遞熱愛生命、以生命影響生命等正面信息</p>
            </div>
            <div class='col-sm-4 partner'>
              <h2>支持伙伴</h2>
              <p><a href="https://www.hkbu.org.hk/">香港失明人協進會 Hong Kong Blind Union</a><br />
                <a href="https://www.kgv.edu.hk/">英皇喬治伍世國際學校 KGV International School</a><br />
                <a href="https://www.coachinghk.com/">香港國際教練協會Hong Kong International Coaching Community</a><br />
                <a href="https://www.zhilanshu.com/index.php?fund-phone">芝蘭基金</a><br />
                <a href="http://www.sihm.edu.hk/">潔心幼兒園</a><br />
                <a href="https://www.hopeww.org.hk/tc/home.php">環宇希望</a><br/>
                <a href="https://www.hkrp.org/">香港復康力量</a><br/>
                <a href="https://www.kgv.edu.hk/">KGV</a>
            </p>
            </div>
          </div>
        </div>
      </section>

      <section id='aboutus-principle'>
        <div class='container reveal'>
          <div class='row'>
            <div class='col-sm-3'>
              <h2><strong>原則</strong></h2>
            </div>
            <div class='col-sm-3' style='color: #ff9900'>
              <p><strong>D – Diversity (多元化)</strong></p>
            </div>
            <div class='col-sm-3' style='color: #808000'>
              <p><strong> O – Openness (開放)</strong></p>
            </div>
            <div class='col-sm-3' style='color: #ff0000'>
              <p><strong> T – Transforamtion (轉化)</strong></p>
            </div>
          </div>
        </div>
      </section>

      <section id='OurTeam'>
        <div class='container reveal'>
          <div class='row'>
            <div class='col-sm-3'>
              <h2><strong>專業團隊成員</strong></h2>
            </div>
            <div class='wpb_column vc_column_container col-sm-9'>
              <div class='vc_column-inner'> 
                <div class='row mb40 coach'>
                  <div class='col-sm-7 mb64'>
                    <a href="<?php echo get_page_link(154); ?>"><img src='<?php echo get_template_directory_uri(); ?>/asset/image/coach1.png'></a>
                  </div>
                  <div class='col-sm-5 mb64 teammate'>
                    <a href="<?php echo get_page_link(154); ?>"><h5>Kwong Chung On</h5></a>
                    <span class='inline-block mb40'>教練</span>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>關於教練</p>
                    <p>本人乃熱愛生命的人生教練和家庭教練。善於洞察被教練者的所思所感，以創新的目光，檢視身處的環境，且能適當地發問，讓被教練者將信念化為具體的行動綱領。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                  </div>
                </div> 
                <div class='row mb40 coach'>
                  <div class='col-sm-7 mb64'>
                    <a href="<?php echo get_page_link(159); ?>"><img src='<?php echo get_template_directory_uri(); ?>/asset/image/coach2.png'></a>
                  </div>
                  <div class='col-sm-5 mb64 teammate'>
                    <a href="<?php echo get_page_link(159); ?>"><h5>Cheung Chi Hoi</h5></a>
                    <span class='inline-block mb40'>教練</span>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>關於教練</p>
                    <p>歡迎你主動認識我這個 The Coaching Dot的教練，我的名字叫張賜豪，我喜歡別人叫我“豪仔”，或者“啊Jack”，雖然我現在沒辦法用聲音介紹自己，但我仍希望能用自己簡單的文字，帶給你面對面的感覺。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                  </div>
                </div> 
                <div class='row mb40 coach'>
                  <div class='col-sm-7 mb64'>
                    <a href="<?php echo get_page_link(156); ?>"><img src='<?php echo get_template_directory_uri(); ?>/asset/image/coach3.png'></a>
                  </div>
                  <div class='col-sm-5 mb64 teammate'>
                    <a href="<?php echo get_page_link(156); ?>"><h5>Simon</h5></a>
                    <span class='inline-block mb40'>教練</span>
                    <div class='empty-space2' style='height: 16px'></div>
                    <p>關於教練</p>
                    <p>一位人生及事業教練（Life & Career Coach）。Simon 深信「人」與「人」之間的互相感染，互相欣賞，能為每一個不同的「生命」，帶來無窮正能量和可能性。憑他的專業知識，豐富工作經驗，非凡人生經歷，加上他一顆熱誠的心， Simon 誠意邀請「您」一起去規劃美好的將來，同時享受當下，務求令「您」在人生和事業不同的階段上造出突破；充分發揮「您」的正能量去履行人生使命，體驗人生價值。</p>
                    <div class='empty-space2' style='height: 16px'></div>
                  </div>
                </div> 
            </div>
          </div>
        </div>
      </section>

      <script>
            const parallax = document.getElementById("aboutus-title");
            document.addEventListener("scroll", function()
            {
                let offset = window.pageYOffset;
                parallax.style.backgroundPositionY = offset * 0.6 + "px";
            })

            
            document.addEventListener("DOMContentLoaded", function() {

                var loading = new TimelineMax();
                loading.fromTo(".info",0.6,{
                    autoAlpha: 0,
                    y: 20
                },{
                    autoAlpha: 1,
                    y: 0
                })
                .fromTo(".story",0.6,{
                    autoAlpha: 0,
                    y: 20
                },{
                    autoAlpha: 1,
                    y: 0
                })
                .fromTo(".mission",0.6,{
                    autoAlpha: 0,
                    y: 20
                },{
                    autoAlpha: 1,
                    y: 0
                })
                .fromTo(".partner",0.6,{
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
                    else{
                    reveals[i].classList.remove('active');
                    }
                }
            };
      </script>

<?php get_footer(); ?>