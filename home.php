<?php
get_header();
?>
<div class="container">
	<div class="row">
		<div id="qualified-programs-container" class="col-xs-12 col-md-8">
			<div id="qualified-programs">
				<div class="mask">
					<h1>英語學習者的優質項目</h1>
				<p style="max-width: 400px;">TALK學院為希望提高英語水平，準備考試，申請工作和移民到其他國家的學生提供各種英語課程。</p>
				<div id="course-builder-container">
					<div class="row">
						<div class="col-xs-12">
							<strong>&nbsp;課程分類  :</strong>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="course-builder" onclick="javascript:window.location = 'http://talk-academy.tw/yangco-esl/';">
								<strong>口語課程</strong>
								<p>ESL 521</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="course-builder" onclick="javascript:window.location = 'http://talk-academy.tw/toeic/';">
								<strong>職業申請</strong>
								<p>強化 TOEIC</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="course-builder" onclick="javascript:window.location = 'http://talk-academy.tw/ielts/';">
								<strong>大學&amp;移民</strong>
								<p>強化 IELTS</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="course-builder" onclick="javascript:window.location = 'http://talk-academy.tw/family-esl/';">
								<strong>家庭課程</strong>
								<p>家庭 ESL</p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div id="about-container" class="col-xs-12 col-sm-6 col-md-4">
			<div id="about" onclick="javascript:window.location = 'http://3d.jesolution.co.kr/canitalk/talk_yangco/';">
				<div class="mask">
					<h2>關於TALK</h2>
					<div id="about-normal">
						<p>預覽TALK的教室和宿舍</p>
						<span class="plus-sign">+</span>
						<div class="clearfix"></div>
					</div>
					<div id="about-hover">
						<p>
						在TALK学院开始学习英语之前，您可以在3D中查看TALK的教室，宿舍和其他设施。如果您提前了解重要信息，您将有益于您在菲律宾留学
						</p>
						<span style="position: absolute;bottom: 10px;right: 10px;display: inline-block;margin-bottom: 0;" class="next-button"></span>
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
		</div>
		<div id="experience-container" class="col-xs-12 col-sm-6 col-md-4">
			<div id="experience" onclick="javascript:window.location = 'http://talk-academy.tw/experiences/';">
				<div class="mask">
					<h2>學生經歷</h2>
					<div id="experience-normal">
						<p>在 TALK 學院分享你的生活</p>
						<span class="plus-sign">+</span>
					</div>
					<div id="experience-hover">
						<p>
							在您决定在TALK学院学习英语之前，我们建议您阅读TALK学生的文章，其中包含他们在菲律宾学习，留学和旅行的文章。 他们想与新生分享他们的经验！
						</p>
						<span style="position: absolute;bottom: 10px;right: 10px;display: inline-block;margin-bottom: 0;" class="next-button"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="notice-container" class="col-xs-12 col-md-4">
			<div id="notice">
				<a href="http://talk-academy.tw/news/" style="text-decoration: none; color: #fff;">
				<strong>公告</strong>
				<p>
					在学习Talk之前，您可以查看TALK的消息。 这将有助于您决定在TALK学院学习英语
				</p>
				<div id="notice-list-container">
					<div class="row">
						<div class="col-xs-12">
							<span id="notice-plus">+</span>
							<span class="next-button"></span>
						</div>
					</div>
					</a>
					<ul id="notice-list">
						<?php do_shortcode('[show_topThree post_type="news"]'); ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="plans-container" class="col-xs-12 col-md-8">
			<div id="plans">
				<div class="mask">
					<strong>計劃在菲律賓學習英語</strong>
					<div id="plan-list-container" class="row">
						<div class="row">
							<div class="col-xs-12">
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>IELTS<br>5.0, 5.5, 6.0</p>
											<span class="plus-sign">+</span>
										</div>	
										<div class="plan-list-hover">
											<a style="color:#666" href='http://talk-academy.tw/ielts-test/'>
											<p>让我们一起为进入大学做准备或者移民。TALK帮助你达到理想的雅思成绩. </p>
											<span class="next-button-black"></span></a>
										</div>
									</div>
								</div>
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>強化口說</p>
											<span class="plus-sign">+</span>
										</div>	
										<div class="plan-list-hover">
											<a style="color:666" href='http://talk-academy.tw/intensive-speaking/'>
											<p>即使你擅长语法和词汇，但是你的发音还不完美，我们建议你上我们的强化口说课程.</p>
											<span class="next-button-black"></span></a>
										</div>
									</div>
								</div>
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>短期(1-3週)<br>學習</p>
											<span class="plus-sign">+</span>
										</div>	
										<div class="plan-list-hover">
											<a style="color:#666" href='http://talk-academy.tw/short-term-study/'>
											<p>如果您没有足够的时间学习英语或不了解英语学习方式，我们会引导您一步步学习英语..</p>
											<span class="next-button-black"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>TOEIC<br>600, 700, 800, 900</p>
											<span class="plus-sign">+</span>
										</div>
										<div class="plan-list-hover">
											<a href="http://talk-academy.tw/toeic-test/">
											<p>让我们借助TALK学院高效的获得TOEIC成绩。 第一所在菲律宾开办TOEIC成绩保证班的学校</p>
											<span class="next-button-black"></span></a>
										</div>
									</div>
								</div>
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p>组合在菲律宾，澳大利亚和加拿大学习英语</p>
											<span class="plus-sign">+</span>
										</div>
										<div class="plan-list-hover">
											<a href="http://talk-academy.tw/philippines-and-other-countries/">
											<p>如果你感觉到，在你开始上大学之前，你需要学习英语，为什么不和我们一起学习英语？</p>
											<span class="next-button-black"></span></a>
										</div>
										
									</div>
								</div>
								<div class="plan-list-parent col-xs-12 col-md-4">
									<div class="plan-list">
										<div class="plan-list-normal">
											<p><br>TALK學院輕鬆的英語學習</p>
											<span class="plus-sign">+</span>
										</div>
										<div class="plan-list-hover">
											<a href="http://talk-academy.tw/best-price/">
											<p>你觉得学费是贵吗？<br>我们为学习者提供了英语课程的预算。<br>只需联系我们</p>
											<span class="next-button-black"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="best-place-container" class="col-xs-12 col-md-4">
			<div id="best-place">
				<div class="mask">
					<a href="http://talk-academy.tw/travel/" style="text-decoration: none;color: #fff;">
					<strong>旅游的最佳地点</strong>
					<div id="best-place-list-container"></a>
						<ul id="best-place-list">
							<?php do_shortcode('[show_topThree post_type="travel"]'); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="campaign-container" class="col-xs-12 col-md-4">
			<div id="campaign">
				<a href="http://talk-academy.tw/campaigns/" style="text-decoration: none;">
				<strong>竞技</strong>
				<div id="campaign-list-container"></a>
					<ul id="campaign-list">
						<?php do_shortcode('[show_topThree post_type="campaign"]'); ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="calendar-container" class="col-xs-12 col-md-4">
			<div id="calendar">
				<strong>日历</strong>
				<div id="calendar-list-container">
					<div class="row">
						<div class="col-xs-12"><a href="http://talk-academy.tw/best-price/">
							<div class="calendar-list-parent col-xs-6" style="border-right:1px solid #666; border-bottom: 1px solid #666">
								<div class="calendar-list">
									<p style="padding-top: 15px;"><a style="color:#666;" href='http://talk-academy.tw/philippine-holiday/'><br>菲律宾假日</a></p>
								</div>
							</div>
							<div class="calendar-list-parent col-xs-6" style=" border-bottom: 1px solid #666">
								<div class="calendar-list">
									<p><a style="color:#666;" href='http://talk-academy.tw/official-pick-up-dates/'><br>官方接机日</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="calendar-list-parent col-xs-6" style="border-right:1px solid #666">
								<div class="calendar-list">
									<p><a style="color:#666;" href='http://talk-academy.tw/ielts-official-test-dates/'><br>IELTS <br>官方考试日期</a></p>
								</div>
							</div>
							<div class="calendar-list-parent col-xs-6">
								<div class="calendar-list">
									<p><a style="color:#666;" href='http://talk-academy.tw/toeic-official-test-dates/'><br>TOEIC<br>官方考试日期</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<?php do_shortcode("[show_footerImages post_type='inside-philippines']"); ?>
	</div>
	<!-- <img src="<?php echo THEME_URI; ?>/img/sample-image1.png" class="img-responsive"/> -->
</div>
<div class="row">
	<div class="col-xs-12 clearfix">&nbsp;</div>
</div>
<?php 
get_footer();
