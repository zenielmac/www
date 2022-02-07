<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>제니엘맥 홈페이지</title>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="//cdn.jsdelivr.net/npm/vue-highlight-words@2.0.0/dist/vue-highlight-words.global.min.js"></script>
<script src="//unpkg.com/axios/dist/axios.min.js"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script> 
<!--전에것-->
<script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<!--전에것-->
<!-- <link rel="stylesheet" href="/webcss/main.css" id="color-switcher-link"> -->
<!-- <link href="//v4.pingendo.com/assets/bootstrap/themes/purple.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" href="{{ asset('css/animations.css') }}"> 
<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- data-spy="scroll" data-target=".navbar" data-offset="50" -->
<div class="section" style=" height: 95px;background-color:#fff;">
	<header id="header-{{ $menuColor }}">
		<div class="" style="position:fixed; z-index:1000; top:0;width:100%;">
			<!-- navbar-fixed-top -->
			<div class="container " style="max-width:900px;">

				<nav class="navbar navbar-default  ">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/" style="padding-top:0px;padding-bottom:0px;"><img src="img/img_zenielmac_logo2.png" /></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right "><!--  data-offset-top="100" -->
							<!-- sf-menu -->
							<li class="@if ($menuNum==1) dropdown @endif">
								<a href="/" @if ($menuNum==1) class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>Company</a>
								<ul class="dropdown-menu" id="navbar-menu1">
									<li class=""><a href="#ceohello">CEO인사말</a></li>
									<li class=""><a href="#majorbusiness">주요사업</a></li>
									<li class=""><a href="#organization">조직도</a></li>
									<li class=""><a href="#history">회사연혁</a></li>
								</ul>
							</li>
							<li class="@if ($menuNum==2) dropdown @endif">
								<a href="/business" @if ($menuNum==2) class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" @endif>Business</a>
								<ul class="dropdown-menu" id="navbar-menu2">
									<li class=""><a href="#Business1">유통사업</a></li>
									<li class=""><a href="#Business2">인재사업</a></li>
									<li class=""><a href="#Business3">통신사업</a></li>
								</ul>
							</li>
							<li class="@if ($menuNum==3) active @endif">
								<a href="/community">Community</a>
							</li>
							<li class="@if ($menuNum==4) active @endif">
								<a href="/contacts">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				</nav>
			</div>

		</div>
	</header>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">

		<div class="item bgimg1 text-center active">
			<!--  <img src="{{ asset('img/slide4.jpg') }}" alt="국내최고 성공파트너 제니엘맥"/> -->  
		</div>

		<div class="item bgimg2 text-center">
			<!--  <img src="{{ asset('img/slide5.jpg') }}" alt="국내최고 성공파트너 제니엘맥"/> -->
		</div>

		<div class="item bgimg3 text-center">
			<!--  <img src="{{ asset('img/slide3.jpg') }}" alt="국내최고 성공파트너 제니엘맥"/> -->
		</div>

	 </div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="section {{ $menuColor }}-bg section-padding" id="section-remargin">
	<div class="container">
		<div class="row" >
			<div class="col-md-12 text-center">
				<!-- <h2 class="color-white nanum-barun-gothic-ultralight to_animate font-size-25" data-animation="fadeInUp">What We Do</h2> -->
				<h2 class="color-white word-break font-size-30 to_animate" data-animation="fadeInUp">&#34일하는 즐거움을 만들어내는 행복추구기업&#34</h2>
				<p class="color-white to_animate" data-animation="fadeInUp">인재경영을 통한 &#34행복추구기업&#34 <strong>제니엘맥</strong>은 항상 최선을 다하여 모든 프로젝트를 완벽히 수행하겠습니다.</p>
				<div class="zenielIntroduce">
					<a href="{{ asset('img/201703.pdf') }}" target="_blank" class="download to_animate {{ $menuColor }}" data-animation="fadeInUp">{{ $year }}년도 제니엘맥 회사소개서 보기</a>
				</div>
			</div>
		</div>
	 	<!-- <div class="row row-circle-margin" >
	 				<div class="text-center">
	 					<div class="col-md-4 col-sm-4 col-xs-4 whatwedo-circle-margin1 to_animate" data-animation="fadeInUp">
	 						<a href="Business.asp#통신사업">
	 							<i class="glyphicon glyphicon-phone fa-3x color-white whatwedo padding-icon2" ></i>
	 							<h3 class="text-center color-white font-size-25">통신사업</h3>
	 						</a>
	 					</div>
	 					<div class="col-md-4 col-sm-4 col-xs-4 to_animate" data-animation="fadeInUp">
	 						<a href="Business.asp#인재사업">
	 							<i class="glyphicon glyphicon-user fa-3x color-white whatwedo padding-icon2"></i>
	 							<h3 class="text-center color-white font-size-25">아웃소싱</h3>
	 						</a>
	 					</div>
	 					<div class="col-md-4 col-sm-4 col-xs-4 whatwedo-circle-margin3 to_animate" data-animation="fadeInUp">
	 						<a href="Business.asp#유통사업">
	 							<i class="glyphicon glyphicon-sort fa-3x color-white padding-icon2 whatwedo"></i>
	 							<h3 class="text-center color-white font-size-25">유통 복지몰사업</h3>
	 						</a>
	 					</div>
	 				</div> -->
		</div>
	</div>
</div>



<div>
@yield('content')
</div>




<div class="section bg-footer">
	<div class="container">
		<a href="{{ asset('img/201703.pdf') }}" target="_blank" class="download">{{ $year }}년도 제니엘맥 회사소개서 보기</a>
		<p class="col-md-12 pale-gray font-size-14 word-break font-line" style="text-align:center; padding-top:3%;">
		<span>주식회사 제니엘맥 &nbsp;&nbsp;대표이사 박봉걸 &nbsp;&nbsp;</span><span> (우) 04173 서울시 마포구 삼개로 16  근신빌딩 2신관 6층 601호<br/></span>
		<span>사업자 등록번호 : 101-81-88972&nbsp;&nbsp;</span> <span>통신판매신고 : 제2014-서울마포-2400호</span>
		<br/>
		<span>고객센터 : 1544-1719 &nbsp;&nbsp;</span><span> TEL : 02-796-3282 FAX: 02-796-3833<br/></span>
		<span>Copyright ©<!-- &#40;c&#41; --> {{ $year }} ZenielMac All Rights Reserved.</span>
		</p>
	</div>
</div>

<!-- <div style="position:fixed; z-index:9999; bottom:20px; right:20px; width:80px; height:80px;" >
	<a href="https://customer.happytalk.io/public_v1/chat_v4/public_point?go=C&is_login=N&uid=&site_id=4000000087&category_id=62641&division_id=62642&usergb=W&title=[테스트%20상담창]" target="_blank"><img src="https://happytalk.io/assets/main/img/btn-chat.png" class="img-responsive"></a>
</div> -->

<!--
<div class="section bg-footer">
	<div class="container">
		<div class="row col-md-12 padding3">

			<div class="float-left footer-left max-size align2">
				<img src="img/img_zenielmac_logo_white.png" alt="제니엘맥로고"/>
			</div>
			<p class="float-left footer-right color-white padding1 font-size-16 word-break">주식회사 제니엘맥 | 대표이사 현상규, 박봉걸 | (우)04212 | 서울시 마포구 마포대로 144 (공덕동) 태영빌딩 603호<br/>
			사업자 등록번호 : 101-81-88972 | 직업정보제공사업 신고번호 : 서울강남 제 2002-11호 <br/> 고객센터 : 1544-1719 사무실번호 : 02-796-3282 FAX: 02-796-3833<br/>
			Copyright(c)2016ZenielMac All Rights Reserved
			</p>
		</div>
	</div>
</div>
-->


<script src="{{ asset('js/vendor/jquery.appear.js') }}"></script>




<SCRIPT type="text/javascript">
<!--
	$(document).ready(function(){

		//animation to elements on scroll
		if (jQuery().appear) {
			// jQuery('.to_animate').appear().css({opacity: 0});
			jQuery('.to_animate').appear().css({'visibility': 'hidden'});
			jQuery('.to_animate').filter(':appeared').each(function(index){
				var self = jQuery(this);
				var animationClass = !self.data('animation') ? 'fadeInUp' : self.data('animation');
				var animationDelay = !self.data('delay') ? 30 : self.data('delay');
				setTimeout(function(){
					self.addClass("animated " + animationClass);
				}, index * animationDelay);
			});

			jQuery('body').on('appear', '.to_animate', function(e, $affected ) {
				jQuery($affected).each(function(index){
					var self = jQuery(this);
					var animationClass = !self.data('animation') ? 'fadeInUp' : self.data('animation');
					var animationDelay = !self.data('delay') ? 30 : self.data('delay');
					setTimeout(function(){
						self.addClass("animated " + animationClass);
					}, index * animationDelay);
				});
			});
		}

	});
//-->
</SCRIPT>

</body>
</html>