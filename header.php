<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title('&laquo;', true, 'right'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <style type="text/css">
      html {
        margin: 0 !important;
      }
    </style>
	
    <script type="text/javascript" src="<?php echo THEME_URI ?>/js/jquery.min.js"></script>
    <script type="text/javascript">
      var adminajax = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    </script>

</head>
	<body>
		
		
	<div id="floating-menu" class="hidden hidden-xs hidden-sm">
      <div class="container">
              <div class="col-xs-12 col-sm-12 col-md-8">
                <a id="logo" class="navbar-brand" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png" style="width:48px !important; height:48px !important;position:absolute; top: 1px;left:1px"></a>
                <ul class="nav navbar-nav">
                  <li class="dropdown-submenu">
                    <a href="http://talk-academy.tw/about-us/">About TALK</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.tw/about-us/">About TALK</a></li>
                      <li><a href="http://talk-academy.tw/greetings/">Greetings</a></li>
                      <li><a href="http://talk-academy.tw/strengths/">Strengths</a></li>
                      <li><a href="http://talk-academy.tw/location/">Location</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/procedure/">Process</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.tw/procedure/">Process</a></li>
                      <li><a href="http://talk-academy.tw/about-preparation/">About Preparation</a></li>
                      <li><a href="http://talk-academy.tw/faq/">FAQ</a></li>
                      <li><a href="http://talk-academy.tw/medical-and-insurance/">Medical and Insurance</a></li>
                      <li><a href="http://talk-academy.tw/way-to-baguio/">Way to Baguio</a></li>
                      <li><a href="http://talk-academy.tw/campaign/">Campaign</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/tuition-fee/">Tuition Fee</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.tw/tuition-fee/">Tuition Fee</a></li>
                      <li><a href="http://talk-academy.tw/dormitory-type/">Dormitory</a></li>
                      <li><a href="http://talk-academy.tw/miscellaneous-fee/">Miscellaneous Fee</a></li>
                      <li><a href="http://talk-academy.tw/ielts-official-test-dates/">IELTS Test Dates</a></li>
                      <li><a href="http://talk-academy.tw/toeic-official-test-dates/">TOEIC Test Dates</a></li>
                      <li><a href="http://talk-academy.tw/philippine-holiday/">Phlippines Holiday</a></li>
                      <li><a href="http://talk-academy.tw/official-pickup-dates/">Official Pickup Dates</a></li>
                      <li><a href="http://talk-academy.tw/refund-policy/">Refund Policy</a></li>
                      <li><a href="http://talk-academy.tw/online-registration/">Online Registration</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/more-about-talk">More About TALK</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.tw/yangco-esl/">ESL 421, 521, 611</a></li>
                      <li><a href="http://talk-academy.tw/ielts/">IELTS</a></li>
                      <li><a href="http://talk-academy.tw/toiec/">TOEIC</a></li>
                      <li><a href="http://talk-academy.tw/power-speaking/">Power Speaking</a></li>
                      <li><a href="http://talk-academy.tw/job-ready/">Working Holiday</a></li>
                      <li><a href="http://talk-academy.tw/family-esl/">Family ESL</a></li>
                      <li><a href="http://talk-academy.tw/online-consultation/">Online Registration</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/philippine-language-study-plan">Plans</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.tw/toeic-test/">TOEIC Test</a></li>
                      <li><a href="http://talk-academy.tw/ielts-test/">IELTS Test</a></li>
                      <li><a href="http://talk-academy.tw/intensive-speaking/">Intensive Speaking</a></li>
                      <li><a href="http://talk-academy.tw/short-term-study/">Short Term Study</a></li>
                      <li><a href="http://talk-academy.tw/long-term-study/">Long Term Study</a></li>
                      <li><a href="http://talk-academy.tw/best-price/">Best Price</a></li>
                      <li><a href="http://talk-academy.tw/philippines-and-other-countries/">Philippines and Other Countries</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/news/">Community</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.tw/news/">News</a></li>
                      <li><a href="http://talk-academy.tw/experiences/">Experiences</a></li>
                      <li><a href="http://talk-academy.tw/meals/">Meals</a></li>
                      <li><a href="http://talk-academy.tw/inside-philippine/">Inside Philippines</a></li>
                      <li><a href="http://talk-academy.tw/best-students-and-teachers/">Best Students and Teachers</a></li>
                      <li><a href="http://talk-academy.tw/travels/">Travels</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="row">
                  <div class="search-lens">
                    <span class="fa fa-search"></span>
                    <div class="floating-search-tb hidden">
                      <div id="desktop-search" class="input-group">
                        <form action="/" method="get" role="search">
                          <input name="s" type="text" class="form-control" style="width: 210px !important; float: left;" />
                          <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                              <i class="fa fa-search"></i>
                          </span>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
		
		
		<div class="container-fluid">
      <header>

          <div id="weblinks">
            <div class="container">
              <a href="http://talkonline.cafe24.com/2013/" style="border: 1px solid #fff; padding: 3px 5px; font-size: 12px; border-radius: 3px">AGENCY</a>&nbsp;&nbsp;
              <a href="http://talk-academy.com">ENG</a>
              <a href="http://talk-academy.kr">KR</a>
              <a href="http://talk-academy.jp">JPN</a>
              <a href="http://talk-academy.cn">CN</a>
              <a href="http://talk-academy.vn">VN</a>
            </div>
          </div>

          <div class="container">
              <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                  <p class="visible-xs" style="position: absolute; top: 15px; right: 65px;"><a href="#">Sign in</a> / <a href="#">Join</a> | Menu</p>
                  <div class="hidden-xs row" style="position: absolute; top: 15px;">
                    <div class="container">
                      <div class="col-xs-12 col-md-8">
                        <div id="login-box" class="hidden">
                          <hr style="margin-top: 5px;">
                        </div>
                      </div>
                    <div class="col-xs-12 col-md-4">
                      <div id="quick-links">
                        <a href="http://talk-academy.com/wp-content/uploads/2017/08/Brochure-1700519KR.pdf">學校手冊</a> | <a href="http://talk-academy.com/wp-content/uploads/2017/08/KOREA-TALK-OT-170329.pdf">Orientation</a> | <a href="http://talk-academy.com/online-consultation/">聯繫我們</a>
                      </div>
                    </div>
                    </div>
                  </div>
					
					
					<div class="visible-xs" style="padding-top: 20px;">
                        <form action="/" method="get" role="search">
                            <input name="s" type="text" class="form-control" style="float: left;" />
                            <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                                <i class="fa fa-search"></i>
                            </span>
                          </form>
                      </div>
					
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
					  <v class="navbar navbar-default" role="navigation"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
				  
	<div class="collapse navbar-collapse" id="example-navbar-collapse-xs">
	      <ul class="nav navbar-nav">
			<li class="mobile-dropdown">
				<span data-toggle="collapse" data-target="#first-mobile-menu">About TALK</span>
		 			 <ul id="first-mobile-menu" class="collapse">
		  				  <li><a href="http://talk-academy.tw/about-us/">About TALK</a></li>
		  				  <li><a href="http://talk-academy.tw/about-us/">About TALK</a></li>
                            <li><a href="http://talk-academy.tw/greetings/">Greetings</a></li>
                            <li><a href="http://talk-academy.tw/strengths/">Strengths</a></li>
                            <li><a href="http://talk-academy.tw/location/">Location</a></li>
                          </ul>
                        </li>
                        <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#second-mobile-menu">Process</span>
                            <ul id="second-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.tw/procedure/">Process</a></li>
                              <li><a href="http://talk-academy.tw/about-preparation/">About Preparation</a></li>
                              <li><a href="http://talk-academy.tw/faqs/">FAQ</a></li>
                              <li><a href="http://talk-academy.tw/medical-and-insurance/">Medical and Insurance</a></li>
                              <li><a href="http://talk-academy.tw/way-to-baguio/">Way to Baguio</a></li>
                              <li><a href="http://talk-academy.tw/campaigns/">캠페인</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#third-mobile-menu">Registration</span>
                            <ul id="third-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.tw/tuition-fee/">Registration</a></li>
                              <li><a href="http://talk-academy.tw/dormitory-type/">Dormitory</a></li>
                              <li><a href="http://talk-academy.tw/miscellaneous-fee/">Misc Fee</a></li>
                              <li><a href="http://talk-academy.tw/ielts-official-test-dates/">IELTS Official Test Schedules</a></li>
                              <li><a href="http://talk-academy.tw/toeic-official-test-dates/">TOEIC Official Test Schedules</a></li>
                              <li><a href="http://talk-academy.tw/philippine-holiday/">Philippines Holiday</a></li>
                              <li><a href="http://talk-academy.tw/official-pickup-dates/">Official Pickup Dates</a></li>
                              <li><a href="http://talk-academy.tw/refund-policy/">Refund Policy</a></li>
                              <li><a href="http://talk-academy.tw/online-registration/">Online Registration</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#fourth-mobile-menu">Talk's Know-how</span>
                            <ul id="fourth-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.tw/yangco-esl/">ESL 421, 521, 611</a></li>
                              <li><a href="http://talk-academy.tw/ielts/">IELTS</a></li>
                              <li><a href="http://talk-academy.tw/toiec/">TOEIC</a></li>
                              <li><a href="http://talk-academy.tw/power-speaking/">Power Speaking</a></li>
                              <li><a href="http://talk-academy.tw/job-ready/">Working Holiday</a></li>
                              <li><a href="http://talk-academy.tw/family-esl/">Family ESL</a></li>
                              <li><a href="http://talk-academy.tw/online-consultation/">Online Consultation</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#fifth-mobile-menu">Study Plans</span>
			<ul id="fifth-mobile-menu" class="collapse">
	 					      <li><a href="http://talk-academy.tw/toeic-test/">TOEIC Exam</a></li>
	 					      <li><a href="http://talk-academy.tw/ielts-test/">IELTS Exam</a></li>
	 					      <li><a href="http://talk-academy.tw/intensive-speaking/">Intensive Speaking</a></li>
	 					      <li><a href="http://talk-academy.tw/short-term-study/">Short Term Study</a></li>
	 					      <li><a href="http://talk-academy.tw/long-term-study/">Long Term Study</a></li>
		 				      <li><a href="http://talk-academy.tw/best-price/">Best Price</a></li>
		 				     <li><a href="http://talk-academy.tw/philippines-and-other-countries/">Philippines and Other Countries</a></li>
		    </ul>
		  </li>
		<li class="mobile-dropdown">
		  <span data-toggle="collapse" data-target="#sixth-mobile-menu">Community</span>
		  <ul id="sixth-mobile-menu" class="collapse">
		  				  <li><a href="http://talk-academy.cn/notice/">News</a></li>
                            <li><a href="http://talk-academy.tw/experiences/">Experiences</a></li>
                            <li><a href="http://talk-academy.tw/meals/">Meals</a></li>
                            <li><a href="http://talk-academy.tw/inside-philippine/">Inside Philippines</a></li>
                            <li><a href="http://talk-academy.tw/best-students-and-teachers/">Best Students and Teachers</a></li>
                            <li><a href="http://talk-academy.tw/travels/">Travels</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>

				  
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                  <div class="col-xs-12 col-sm-12 col-md-8">
					  <a id="logo" class="navbar-brand" style="position:absolute;top: -55px; left: -40px;" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png"></a>
                    <ul class="nav navbar-nav">

                     <li class="dropdown-submenu">
                      <li><a href="/about-us/">介紹</a></li>
                       <ul class="dropdown-menu">
										<li><a href="http://talk-academy.tw/about-us/">关于我们</a></li>
										<li><a href="http://talk-academy.tw/greetings/">问候</a></li>
										<li><a href="http://talk-academy.tw/strengths/">优势</a></li>
										<li><a href="http://talk-academy.tw/location/">位置</a></li>
			</ul>
		      </li>

                     <li class="dropdown-submenu">
                      <li><a href="/procedure/">過程</a></li>
                       <ul class="dropdown-menu">
										<li><a href="http://talk-academy.tw/procedure/">程序</a></li>
										<li><a href="http://talk-academy.tw/about-preparation/">关于准备</a></li>
										<li><a href="http://talk-academy.tw/faqs/">FAQ</a></li>
										<li><a href="http://talk-academy.tw/medical-and-insurance/">医药和保险系统</a></li>
										<li><a href="http://talk-academy.tw/way-to-baguio/">如何来碧瑶</a></li>
										<li><a href="http://talk-academy.tw/campaign/">竞技</a></li>
			</ul>
		    </li>

                     <li class="dropdown-submenu">
                      <li><a href="/tuition-fee/">註冊</a></li>
                       <ul class="dropdown-menu">
										<li><a href="http://talk-academy.tw/tuition-fee/">学费</a></li>
										<li><a href="http://talk-academy.tw/dormitory-type/">宿舍类型</a></li>
										<li><a href="http://talk-academy.tw/miscellaneous-fee/">其他费用</a></li>
										<li><a href="http://talk-academy.tw/ielts-official-test-dates/">IELTS官方考试日期</a></li>
										<li><a href="http://talk-academy.tw/toeic-official-test-dates/">TOEIC官方考试日期</a></li>
										<li><a href="http://talk-academy.tw/philippine-holiday/">菲律宾假日</a></li>
										<li><a href="http://talk-academy.tw/official-pickup-dates/">官方接机日</a></li>
										<li><a href="http://talk-academy.tw/refund-policy/">退费政策</a></li>
										<li><a href="http://talk-academy.tw/online-registration/">电子申请书(现在注册)</a></li>
                            </ul>
                          </li>


                     <li class="dropdown-submenu">
                      <li><a href="/more-about-talk/">Talk的課程</a></li>
                       <ul class="dropdown-menu">
										<li><a href="http://talk-academy.tw/yangco-esl/">ESL 421, 521, 611</a></li>
										<li><a href="http://talk-academy.tw/ielts/">强化 IELTS</a></li>
										<li><a href="http://talk-academy.tw/toiec/">强化 TOEIC</a></li>
										<li><a href="http://talk-academy.tw/power-speaking/">强化口说</a></li>
										<li><a href="http://talk-academy.tw/job-ready/">打工度假</a></li>
										<li><a href="http://talk-academy.tw/family-esl/">家庭 ESL</a></li>
										<li><a href="http://talk-academy.tw/online-consultation/">联系我们</a></li>
                            </ul>
                          </li>


                     <li class="dropdown-submenu">
                      <li><a href="/philippine-language-study-plan/">聯繫我們</a></li>
                       <ul class="dropdown-menu">
										<li><a href="http://talk-academy.tw/toeic-test/">TOEIC 考试</a></li>
										<li><a href="http://talk-academy.tw/ielts-test/">IELTS 考试</a></li>
										<li><a href="http://talk-academy.tw/intensive-speaking/">强化口说</a></li>
										<li><a href="http://talk-academy.tw/short-term-study/">短期(1-3周)学习</a></li>
										<li><a href="http://talk-academy.tw/long-term-study/">长期学习</a></li>
										<li><a href="http://talk-academy.tw/best-price/">最优价格</a></li>
										<li><a href="http://talk-academy.tw/philippines-and-other-countries/">组合在菲律宾，澳大利亚和加拿大学习英语</a></li>
                            </ul>
                          </li>


                     <li class="dropdown-submenu">
                      <li><a href="/news/">社區</a></li>
                       <ul class="dropdown-menu">
										<li><a href="http://talk-academy.tw/news/">公告</a></li>
										<li><a href="http://talk-academy.tw/experience/">学生经理</a></li>
										<li><a href="http://talk-academy.tw/meal/">Talk’每餐</a></li>
										<li><a href="http://talk-academy.tw/inside-philippines/">在菲律賓</a></li>
										<li><a href="ttp://talk-academy.tw/best-students-and-teachers/">Best Student &amp; Teacher</a></li>
						                <li><a href="http://talk-academy.tw/travel/">Travel</a></li>
                            </ul>
                          </li>

                    </ul>
                  </div>
                </div>
              </nav>
          </div>
        </div>
      </header>