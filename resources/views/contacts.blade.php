@extends('layouts.master')

@section('content')

<div class="section section-padding">
	<div class="container">


		<div class="row">
			<h2 class="text-center nanum-barun-gothic-ultralight to_animate" data-animation="fadeInUp">Contact <strong>Us</strong></h2>

			<div id="map" style="height:390px;" class="col-md-6 to_animate" data-animation="fadeInUp"></div>
			<SCRIPT type="text/javascript">

				function initMap() {
					var myLatLng = {lat: 37.53910500743731, lng: 126.9471369505587};

					var mapOptions = { //구글 맵 옵션 설정
						zoom : 15, //기본 확대율
						center : myLatLng, // 지도 중앙 위치
						scrollwheel : false, //마우스 휠로 확대 축소 사용 여부
						mapTypeControl : false //맵 타입 컨트롤 사용 여부
					};

					// Create a map object and specify the DOM element for display.
					var map = new google.maps.Map(document.getElementById('map'), mapOptions);

					var image = '{{ asset('img/marker.png') }}'; //마커 이미지 설정   

					var marker = new google.maps.Marker({ //마커 설정
						map : map,
						position : map.getCenter() //마커 위치
						// icon : image //마커 이미지
					});

				}
			</SCRIPT>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5nYDIKd8W_lv47g0RAe6DGCAHOW_8oLE&callback=initMap">
			</script>

			<div class="col-md-6 to_animate" data-animation="fadeInUp">
				<address class="address-border word-break address-border-line">
					<p>서울시 마포구 삼개로 16<br/> 근신빌딩 2신관 6층 601호 (우)04173 </p>
					<p><strong>TEL.</strong> 1544-1719, 02-796-3182, 02-796-3282</p>
					<p><strong>FAX.</strong> 02-796-3833</p>
					<p><strong>대중교통</strong></p><p> 5호선 마포역 3번 출구에서 약110m (약 2분소요)</p>
				</address>
			</div>

		</div>




<div class="section  section-padding gray-bg margin-style to_animate" data-animation="fadeInUp" >
	<div class="text-center container Alliance" >

		<h3 class=" to_animate" data-animation="fadeInUp">제휴문의</h3>
		<p class=" to_animate" data-animation="fadeInUp">제니엘맥은 제휴업체 및 인재를 모십니다.</p>

		<!--인재팀-->
		<div class="Alliance_HumanResourcesTeam to_animate" data-animation="fadeInUp">
			<div class="dl_box">
				<dl>
					<dt>
						<strong>OUTSOURCING</strong>
						<em>아웃소싱</em>
					</dt>
					<dd style="word-break: keep-all;">
						인재파견&#47; 도급운영,콜센터구축,인사노무
					</dd>
				</dl>
			</div>
			<div class="address" id="address-center">
				<p>전화번호 &#58; 070&#45;4607&#45;6338</p>
				<p>이메일 &#58; <a href="mailto:gom@zeniel.co.kr">etax@zenielmac.com</a></p>
			</div>
		</div>

		<!--아이템2-->
		<div class="Alliance_TelecomTeam">
			<div class="dl_box">
				<dl>
					<dt>
						<strong>OUTSOURCING</strong>
						<em>통신팀</em>
					</dt>
					<dd style="word-break: keep-all;">
						기업 법인폰&#47; B2B,B2C&#47; 법인회선관리 서비스
					</dd>
				</dl>
			</div>
			<div class="address" id="address-center">
				<p>전화번호 &#58; 070&#45;4607&#45;6313</p>
				<p>이메일 &#58; <a href="mailto:MAC123@zeniel.co.kr">MAC123@zeniel.co.kr</a></p>
			</div>
		</div>

		<!--아이템3-->
		<!-- <div class="Alliance_Team3">
			<div class="dl_box">
				<dl>
					<dt>
						<strong>OUTSOURCING</strong>
						<em>아이템3</em>
					</dt>
					<dd style="word-break: keep-all;">
						인재파견&#47; 도급운영,콜센터구축,인사노무
					</dd>
				</dl>
			</div>
			<div class="address" id="address-center">
				<p>전화번호 &#58; 070&#45;4607&#45;0000</p>
				<p>이메일 &#58; <a href="mailto:zeniel@zeniel.co.kr">zeniel@zeniel.co.kr</a></p>
			</div>
		</div> -->

	 </div>
</div>






		<!--채용안내시작-->
		<h3 class="text-center margin-style  to_animate" data-animation="fadeInUp">제니엘맥 채용안내</h3>
			<ul>
			<!--인재상-->
			<li class="container">
				<div class="col-md-12 talent  to_animate" data-animation="fadeInUp">
					<h4 style="font-family: Nanum Gothic, nanum-barun-gothic-ultralight, 'Malgun Gothic', '맑은 고딕','돋움'; font-size: 23px;">인재상</h4>
					<p >제니엘맥 최고의 자산은 사람입니다. 도전과 열정이 가득한 최고의 인재들과 함께 성장합니다. </p>
				</div>
				<ul class="row">
					<li class="col-md-12 bg-txt-mom to_animate" data-animation="fadeInUp">
						<strong class="deco-text">Creative</strong>
						<div class=" bg-text">
							<img src="{{ asset('img/deco-text.png') }}" alt="인재상 글자 이미지"/>  
							<span>지속성장에 기여할 수 있는 인재로, 자기분야에 대한 전문성을 갖추고 다양한 가치를 이해하며 새로운것을 배우려는
							창의적인 인재</span>
						</div>
					</li>
					<li class="col-md-12 bg-text bg-txt-mom to_animate" data-animation="fadeInUp">
						<strong class="deco-text">Passion</strong>
						<div class=" bg-text">
							<img src="{{ asset('img/deco-text.png') }}" alt="인재상 글자 이미지"/>  
							<span>자신의 능력을 소신껏 발휘하고 결과에 책임질줄 아는 성숙한 마인드로, 자기 분야에서 최고가 되고자 하는
							열정적인 인재</span>
						</div>
					</li>
					<li class="col-md-12 bg-text bg-txt-mom to_animate" data-animation="fadeInUp">
						<strong class="deco-text">Challenge</strong>
						<div class=" bg-text">
							<img src="{{ asset('img/deco-text.png') }}" alt="인재상 글자 이미지"/>  
							<span>현실에 안주하지 않고 과감한 목표를 세워, 주도적으로 판단하고 행동하며 끈기있게 노력하는 프로근성을 가진
								도전적인 인재</span>
						</div>
					</li>
				</ul>
			</li>
			<!--인재상끝-->

			<!--채용정보-->
			<li class="container term incrut">
				<h4 class="text-center to_animate" data-animation="fadeInUp">채용정보</h4>
				<ul class=" row contact-term">
					<!--채용직군-->
					<li class="col-md-4 incrut-table to_animate" data-animation="fadeInUp">
						<div class="incrut-inner">
							<strong>영업직</strong>
							<ul>
								<li>
									<em>유통MD</em>
									<span>상품 기획 및 소싱, 영업 및 고객관리 등 사업부 업무를 수행합니다.</span>
								</li>
								<li>
									<em>통신</em>
									<span>이동통신 대리점 업무, 영업 및 고객관리 등 사업부 업무를 수행합니다.</span>
								</li>
								<li>
									<em>인재</em>
									<span>아웃소싱, 인재파견등의 잡매니저 업무 및 온/오프라인 프로모션등 사업부 업무를 수행합니다.</span>
								</li>
							</ul>
						</div>
					</li>
					<li class="col-md-4 incrut-table to_animate" data-animation="fadeInUp">
						<div class="incrut-inner">
							<strong>관리직</strong>
							<ul >
								<li>
									<span>재무, 회계, 총무, 인사 및 경영지원등 기업 운영 제반사항 지원 및 관리업무를 수행합니다.</span>
								</li>
							</ul>
						</div>
					</li>
					<li class="col-md-4 incrut-table to_animate" data-animation="fadeInUp">
						<div class="incrut-inner">
							<strong>전산직</strong>
								<ul>
									<li>
										<em>IT개발</em>
										<span>당사 전산 시스템 개발 및 유지 보수 업무를 수행합니다.</span>
									</li>
									<li>
										<em>웹디자인</em>
										<span>사용자가 다양한 정보를 보다 쉽고 편하게 이해할 수 있도록 상품 디자인 및 홈페이지 외 웹디자인 업무를 수행합니다.</span>
									</li>
								</ul>
						</div>
					</li>
					<div class="add to_animate" data-animation="fadeInUp">*각 채용 직군별 수시 채용 진행</div>
					<!--채용직군끝-->
					<!--채용절차-->
					<li  class="incruit-order">
						<h5 class="to_animate" data-animation="fadeInUp">채용절차</h5>
						<ol class="to_animate" data-animation="fadeInUp">
								<li class="one">1.서류전형</li>
								<li class="two">2.실무자 면접</li>
								<li class="three">3.임원면접</li>
								<li class="four">4.최종합격</li>
							</ol>
					<!--
					<li class="incrut-step-mom">
						<h5 class="margin-style to_animate" data-animation="fadeInUp">채용절차</h5>

						<ol class="incrut-step" style="width:1000px; margin:0 auto;">
							<li class="col-md-3 col-sm-6 col-xs-6 to_animate" data-animation="fadeInUp" style="display:table; width:200px; height:200px;" >
								<div class="step-inner"style="display:table-cell"  id="first-step">
									<strong>1</strong>
									<p>서류 전형</p>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-6 to_animate" data-animation="fadeInUp">
								<div class="step-inner">
									<strong>2</strong>
									<p>실무자 면접</p>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-6 to_animate" data-animation="fadeInUp">
								<div class="step-inner">
									<strong>3</strong>
									<p>임원면접</p>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-6 to_animate" data-animation="fadeInUp">
								<div class="step-inner">
									<strong>4</strong>
									<p>최종합격</p>
								</div>
							</li>
						</ol>-->
						<p class="incrut-notice to_animate" data-animation="fadeInUp" style="clear:both;">모집분야, 전형절차 및 기타문의사항은  <a href="mailto:etax@zenielmac.com" style="color:#fde624;">etax@zenielmac.com</a> 으로 보내주시기 바랍니다.</p>
						<!--채용절차끝-->
					</li>
					<!--채용정보끝-->
					<!--복리후생-->
					 <li class="welfare">
						<h4 class="to_animate" data-animation="fadeInUp">복리후생</h4>
						<ul class="container">
							<div class="row">
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
										<em>기본 복리후생</em>
										<span>4대보험<span class="mini-font">(국민연금, 고용보험, 건강보험, 산재보험)</span>,퇴직연금제도 운영</span>
									</div>
								</li>
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
										<em>경조금</em>
										<span>각종 경조사 발생시 규정에 따라 경조금 지급 및 휴가부여</span>
									</div>
								</li>
							</div>
							<div class="row">
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
										<em>상조회</em>
										<span>제니엘 그룹사 운영<span class="mini-font">(상조회에 규정에 따른 경조금 지급)</span></span>
									</div>
								</li>
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
										<em>복지 포인트 지급</em>
										<span>그룹사 복지 사이트에서 사용가능한 복지 포인트 지급</span>
									</div>
								</li>
							</div>
							<div class="row">
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
										<em>통신비지원</em>
										<span>법인폰제공 또는 통신비 지급</span>
									</div>
								</li>
									<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
										<div class="welfare-inner">
											<em>임직원 기념일 선물</em>
											<span>부모님생신 및 명절 선물 지급</span>
										</div>
									</li>
							</div>
							<div class="row">
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
									<em>우수사원 해외연수</em>
									<span>입사 3년이상 직원대상으로 우수사원 선발하여 해외연수 실시</span>
									</div>
								</li>
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
										<em>임직원 행사</em>
										<span>매년 한마음체육대회, 워크샵 실시</span>
									</div>
								</li>
							</div>
							<div class="row">
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
										<em>포상금 제도</em>
										<span>분기별 본부 평가 시행, 최우수 본부 및 우수본부 포상금 지급</span>
									</div>
								</li>
								<li class="col-md-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="welfare-inner">
										<em>건강검진</em>
										<span>전 임직원 대상 건강검진 실시</span>
									</div>
								</li>
							</div>
						</ul>
					 </li>
					<!--복리후생끝-->
				</ul>
				<!--채용안내 전부끝-->
	</div>

</div>


@endsection