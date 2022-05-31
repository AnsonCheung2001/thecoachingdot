<?php
/** 
 * Template Name: contactus
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
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_page_link(73); ?>">實習生計劃</a>
                  </li>
                  <li class="nav-item active" >
                    <a class="nav-link " href="<?php echo get_page_link(9); ?>">聯絡我們</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
      </header>

      <section id='contactus' style='background-color: grey'>
            <div class='contact'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-6'>
                            <h2 style="color:white;">聯絡我們</h2>
                        </div>
                    </div>
                </div>
            <div>
      </section>

      <section id='contact-detail'>
            <div class='detail'>
                <div class='row'>
                    <div class='col-md-6 image'>
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/image/introduction2.2.jpg" style="width: 100%; height: 100%;">
                    </div>
                    <div class='col-md-6 content'>
                        <div class='cinner'>
                            <h4>聯絡我們</h4>
                            <p>歡迎致電，獲取免費諮詢及專業意見</p>
                            <hr>
                            <a>電話：3284 2323</a>
                            <br>
                            <a href="mailto:enquiry@thecoachingdot.com">電郵：enquiry@thecoachingdot.com</a>
                            <br>
                            <a>地址：觀塘偉業街 133 號 （近牛頭角地鐵站 B出口）- Space 12/F</a>
                        </div>
                    </div>
                </div>
            </div>
      </section>

      <section id='mailbox'>
        <div class='row'>
          <div class='col-md-6 content'>
            <div class='form'>
                  <h4>查詢表單</h4>
                  <div class='contactinputgroup'>
                    <form>
                        <input type='text' id='Aname' placeholder="名字"><br>
                        <div class='empty-space2' style='height: 17px'></div>
                        <input type='text' id='Aemail' placeholder="電郵"><br>
                        <div class='empty-space2' style='height: 17px'></div>
                        <textarea  id='Acontent' placeholder="你的查詢"></textarea><br>
                        <a id='subbtn' href='#' class='btn btn-primary btn-lg' role='button'>提交</a>
                    </form>
                  </div>
                  <p class='alertmsg' style='display:none'>你填寫的資料正在傳送中</p>
            </div>
          </div>
          <div class='col-md-6 photo'>
              <img src="<?php echo get_template_directory_uri(); ?>/asset/image/dark.jpg" style="width: 100%; height: 100%;">
          </div>
        </div> 
      </section>

        <script>

            $(document).ready(function(){
                $('#subbtn').click(function(e){
                    e.preventDefault();
                    $('.contactinputgroup').hide();
                    $('.alertmsg').fadeIn();
                    $.post('<?php echo admin_url( 'admin-ajax.php' );?>',
                    {
                        action: 'my_ajax_action',
                        Aname: $('#Aname').val(),
                        Aemail: $('#Aemail').val(),
                        Acontent: $('#Acontent').val(),


                    },function(data){
                        $('.alertmsg').html('你所填寫的資料已遞交，多謝你的竟見/詢問');
                    });


                });
            });

        </script>

<?php get_footer(); ?>