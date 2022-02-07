@extends('layouts.master')

@section('content')
    

<SCRIPT type="text/javascript">
    <!--
        // 네비게이션 스크롤 및 링크 처리 2016-05-27 김승태
        $(document).ready(function(){
          // Add scrollspy to <body>
          $('body').scrollspy({target: "#navbar-menu1", offset: 100});
    
          // Add smooth scrolling on all links inside the navbar
          $("#navbar-menu1 a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();
    
                    // Store hash
                    var hash = this.hash;
    
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top-95
                    }, 800, function(){
    
                        // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                    });
                }  // End if
            });
        });
    //-->
    </SCRIPT>
    
    <a name="ceohello">
    <div class="section section-padding" id="ceohello">
        <div class="container">
            <div class="row align  margin-top-150" >
                <div class="col-md-6 to_animate" data-animation="fadeInUp">
                    <img src="{{ asset('img/img_ceo.png') }}" class="img-responsive img-alignleft" /> 
                </div>
                <div class="col-md-6 ceo word-break">
                    <div class="to_animate" data-animation="fadeInUp">
                    <i class="fa fa-quote-left fa-3x blue"></i>
                    <h2 class="blue text-left ceo-margin h2-margin nanum-barun-gothic-ultralight">CEO Message</h2>
                    </div>
                    <div class="to_animate" data-animation="fadeInUp">
                    <p>안녕하십니까? 대표이사 박봉걸 입니다.<br/><br/>
                    제니엘맥 홈페이지를 방문 해주신 고객 여러분께 감사의 인사를 드립니다.
                    제니엘맥은 고객사의 매출증대를 위해 항상 노력하고 있습니다.</p>
                    <p>저희는 '고객의 성공을 바탕으로 성장하는 기업'이라는 비전 아래 고객의 가치를
                    최우선하고 신뢰를 통한 고객만족을 제공해  드리기 위해 노력하고
                    있습니다.</p>
                    <p>고객 여러분의 작은 소리도 귀담아 듣고 항상 고객의 입장에서 생각하며,  고객감동을 넘어
                    행복 그 이상의 가치를 제공 할 수 있도록 부단한 노력을 기울일 것입니다.</p>
                    <p>또한 앞서가는 서비스와 혁신적인 마케팅 전략을 통해 변화속에서 미래의 비전을 만들어 가는 회사가 될 것을 약속 드리겠습니다.<br/><br/>
                     변함없는 신뢰와 격려를 부탁 드립니다.
                    감사합니다.</p>
                    </div>
                    <div class="to_animate" data-animation="fadeInUp">
                    <p class="text-right">제니엘맥 대표이사 <span class="color-cha font-size-40 term3"  id="ceoname">박봉걸</span></p>
                    <i class="fa fa-quote-right fa-3x blue"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--
    <div id="회사개요">
    <div class="section section-padding" id="bg-orange">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"  >
                    <div class="inner3 word-break text-center to_animate" data-animation="fadeInUp">
                        <h1 class="color-white font-light nanum-barun-gothic-ultralight">&#34일하는 즐거움을 만들어내는 행복추구기업&#34</h1>
                        <p class="color-white">인재경영을 통한 &#34행복추구기업&#34제니엘맥은 항상 최선을 다하여 모든 프로젝트를 완벽히 수행하겠습니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    
    
    
    
    
    <div class="section img-bg">
        <div class="container  color-white">
            <h3 class="font-size-40 text-center margin-h3">주요
            <strong>사업</strong>
            </h3>
            <div class="row margin-left- padding-1">
                <div class="col-md-2 bg-color2 padding-top-70">
                    <img src="{{ asset('img/img_smartphone.png') }}" class="img-responsive center" /> 
                    <h4 class="text-align margin-top-h4">통신판매사업</h4>
                    <p class="text-align">Telesales Business</p>
                </div>
                <div class="col-md-2 bg-color2 padding-top-70">
                    <img src="{{ asset('img/img_cart.png') }}" class="img-responsive center" />  
                    <h4 class="text-align margin-top-h4">기업 복지몰 사업</h4>
                    <p class="text-align">Company Welfare Mall</p>
                </div>
                <div class="col-md-2 bg-color2 padding-top-70">
                    <img src="{{ asset('img/smile-icon.png') }}" class="img-responsive center" />  
                    <h4 class="text-align margin-top-h4">아웃소싱 사업</h4>
                    <p class="text-align">Outsourcing Service</p>
                </div>
            </div>
            <div class="row margin-left- margin-left-500  padding-1">
                <div class="col-md-2 bg-color2 padding-top-70">
                    <img src="{{ asset('img/img_wealshop_ci_white.png') }}" class="img-responsive center" />  
                    <h4 class="text-align margin-top-h4">복지몰 윌샵 운영</h4>
                    <p class="text-align">Store Operations</p>
                </div>
                <div class="col-md-2 bg-color2 padding-top-70">
                    <p class="text-align color-white my-t-font">my-T</p>
                    <h4 class="text-align margin-top-h4">SK텔레콤 인증<br/> 온라인몰</h4>
                    <p class="text-align">Certification Telecsales Mall</p>
                </div>
                <div class="col-md-2 bg-color2">
                    <img src="{{ asset('img/img_add.png') }}" class="img-responsive center padding"> 
                </div>
            </div>
        </div>
    </div> -->
    
    <a name="majorbusiness">
    <div class="section img-bg section-padding" id="majorbusiness">
        <div class="container  color-white">
            <h3 class="font-size-40 text-center margin-h3 nanum-barun-gothic-ultralight to_animate" data-animation="fadeInUp">주요
            <strong>사업</strong>
            </h3>
            <div class="row text-center center-block max-width700">
    
                <div class="col-md-6 col-sm-6 col-xs-12 bg-color to_animate" data-animation="fadeInUp">
                    <div class="inner">
                        <a href="Business.asp#유통사업">
                            <img src="{{ asset('img/img_cart.png') }}" class="img-responsive center" />  
                            <h4 class="text-align margin-top-h4 color-white font-size-20 font-light">유통사업</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 bg-color to_animate" data-animation="fadeInUp">
                    <div class="inner">
                        <a href="Business.asp#인재사업">
                            <img src="{{ asset('img/smile-icon.png') }}" class="img-responsive center" />  
                            <h4 class="text-align margin-top-h4 color-white font-size-20 font-light">아웃소싱 사업</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 bg-color to_animate" data-animation="fadeInUp">
                    <div class="inner">
                        <a href="http://www.wealshop.co.kr/" target="_blank">
                            <img src="{{ asset('img/img_wealshop_ci_white.png') }}" class="img-responsive center" />  
                            <h4 class="text-align margin-top-h4 color-white font-size-20 font-light">복지몰 사업</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 bg-color to_animate" data-animation="fadeInUp">
                    <div class="inner">
                        <a href="http://www.my-t.co.kr/new/" target="_blank">
                            <img src="{{ asset('img/img_smartphone.png') }}" class="img-responsive center" /> 
                            <h4 class="text-align margin-top-h4 color-white font-size-20 font-light">통신 사업</h4>
                        </a>
                    </div>
                </div>
    
                </div>
            </div>
        </div>
    </div>
    
    
    <a name="organization">
    <div class="section yellow-bg section-padding" id="organization">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="text-center nanum-barun-gothic-ultralight to_animate" data-animation="fadeInUp">조직도</h2>
                    <img src="{{ asset('img/img_company3.png') }}" class="img-responsive center to_animate" data-animation="fadeInUp"  alt="제니엘맥 조직도"/>
                    <!--div class="resize-bg"></div-->  
                </div>
            </div>
        </div>
    </div>
    <SCRIPT type="text/javascript">
    <!--
        $(document).ready(function(){
            /*
            $("#area_history a").click(function(){
                $
            });
            */
            $('#area_history a').on('shown.bs.tab', function(event){
    //			$(event.target).addClass('active');
    //			$(event.relatedTarget).removeClass('active');
            });
        });
    //-->
    </SCRIPT>
    <a name="history">
    <div id="area_history" class="section section-padding word-break">
        <div class="container" id="history">
            <h2 class="h2-margin nanum-barun-gothic-ultralight to_animate" data-animation="fadeInUp">제니엘맥 <strong>연혁</strong></h2>
            <div class="row year-bottom to_animate" data-animation="fadeInUp">
                <div class="col-xs-6 col-sm-3 col-margin">
                    <a data-toggle="tab" href="#history-now" class="col-in " ><!-- active -->
                        현재 - 2012
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 col-margin">
                    <a data-toggle="tab" href="#history-2011" class="col-in">2011 - 2008</a>
                </div>
                <div class='clearfix visible-xs-block'></div>
                <div class="col-xs-6 col-sm-3 col-margin">
                    <a data-toggle="tab" href="#history-2007" class="col-in">2007 - 2004</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-margin">
                    <a data-toggle="tab" href="#history-2003" class="col-in">2003 - 2002</a>
                </div>
            </div>
    
    
    
    <!-- 블럭형태 연혁디자인
            <div class="tab-content to_animate" data-animation="fadeInUp">
    
                <div id="history-now" class="tab-pane fade in active">
    
                    <div id="historyCarouselNow" class="carousel slide" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators-nocls history-round-btn text-center btn-term">
                            <li data-target="#historyCarouselNow" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarouselNow" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
    
                            <!--현재-2012-2
                            <ol class="item active">
                                <li class="row row-line">
                                    <p class="text-center list-font">특허등록  ‘컨텐츠 사용 집계 시스템 및 그 방법’ </p>
                                </li>
                                <li class="row row-line ">
                                    <p class="text-center list-font">통신사 대리점 오프라인 관리 운영</p>
                                </li>
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci-zeniel.jpg') }}"  class="text-center" alt="제니엘 로고"/>  
                                    <p class="list-font">2014년 제니엘 그룹 경영실적 최우수상 수상</p>
                                </li>
                            </ol>
                            <ol class="item">
                                <!--현재-2012-1
                                <li class="row row-line text-center">
                                    <p class="text-center list-font">통신사 공식 온라인 ACC(accessory)Mall 운영</p>
                                </li>
                                <li class="row row-line text-center">
                                    <p class="text-center list-font">통신사 사은품 센터 및 고객상담센터 운영</p>
                                </li>
                                <li class="row row-line text-center">
                                    <p class="text-center list-font">HR토탈서비스 시행_ 채용대행, 인재파견&도급, 헤드헌팅</p>
                                </li>
                            </ol>
    
                        </div>
                        <ol class="carousel-indicators-nocls2 history-round-btn text-center btn-term">
                            <li data-target="#historyCarouselNow" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarouselNow" data-slide-to="1"></li>
                        </ol>
                    </div>
    
                </div>
    
    
                <div id="history-2011" class="tab-pane fade">
    
                    <div id="historyCarousel2011" class="carousel slide" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators-nocls history-round-btn text-center btn-term">
                            <li data-target="#historyCarousel2011" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarousel2011" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
    
                            <ol class="item active">
                                <!--2011-2008-2
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_k2.png') }}" alt="k2 로고" /> 
                                    <p class="text-center list-font">K2코리아 특판 계약 체결</p>
                                </li>
                                <li class="row row-line text-center">
                                    <p class="text-center list-font">유통사업부 신설</p>
                                </li>
                                <li class="row row-line text-center">
                                    <p class="text-center list-font">일자리 창출 기업지원 특별우대기업 선정</p>
                                </li>
                            </ol>
                            <ol class="item">
                                <!--2011-2008-1
                                <li class="row row-line text-center">
                                    <p class="text-center list-font">통신 대리점 개설 _ 유무선 통신상품</p>
                                </li>
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci-zeniel.jpg') }}" alt="제니엘 로고" /> 
                                    <p class="text-center list-font">2008년 제니엘 그룹 영업목표 달성 최우수상 수상</p>
                                </li>
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_wealshop.png') }}" alt="윌샵 로고" />  
                                    <p class="text-center list-font">기업 복지몰 WEAL SHOP 서비스 개시</p>
                                </li>
                            </ol>
    
                        </div>
                        <ol class="carousel-indicators-nocls2 history-round-btn text-center btn-term">
                            <li data-target="#historyCarousel2011" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarousel2011" data-slide-to="1"></li>
                        </ol>
                    </div>
    
                </div>
    
                <div id="history-2007" class="tab-pane fade">
    
                    <div id="historyCarousel2007" class="carousel slide" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators-nocls history-round-btn text-center btn-term">
                            <li data-target="#historyCarousel2007" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarousel2007" data-slide-to="1"></li>
                            <li data-target="#historyCarousel2007" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
    
                            <ol class="item active">
                                <!--2007-2004-3
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_sk-telecom.png') }}" alt="sk텔레콤 로고" />  
                                    <p class="text-center list-font">SK 텔레콤 판촉 Promotion</p>
                                </li>
    
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_sk-telecom.png') }}" alt="sk텔레콤 로고" /> 
                                    <p class="text-center list-font">SK 텔레콤 전속 매니저팀 운영</p>
                                </li>
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_korea-petroleum.png') }}" alt="한국석유공사 로고" /> 
                                    <p class="text-center list-font">한국석유공사 의전 행사</p>
                                </li>
                            </ol>
    
                            <ol class="item">
                                <!--2007-2004-2
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_sk-networks.png') }}" alt="sk네트웍스 로고" /> 
                                    <p class="text-center list-font">SK Networks 대형 유통망 판촉 Promotion </p>
                                </li>
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_asiana.png') }}" alt="아시아나 로고" /> 
                                    <p class="text-center list-font">아시아나 항공 내국인 홍보 Promotion </p>
                                </li>
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_cj.png') }}" alt="cj 로고" />  
                                    <p class="text-center list-font">CJ 백설 브랜드 런칭 Promotion</p>
                                </li>
                            </ol>
    
                            <ol class="item">
                                <!--2007-2004-1
                                <li class="row row-line text-center">
                                    <img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고" /> 
                                    <p class="text-center list-font">2004년 ㈜ 제니엘맥 상호 변경</p>
                                </li>
                            </ol>
    
                        </div>
                        <ol class="carousel-indicators-nocls2 history-round-btn text-center btn-term">
                            <li data-target="#historyCarousel2007" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarousel2007" data-slide-to="1"></li>
                            <li data-target="#historyCarousel2007" data-slide-to="2"></li>
                        </ol>
                    </div>
    
                </div>
    
                <div id="history-2003" class="tab-pane fade">
    
                    <ol>
                        <!--2003-2002-1
                        <li class="row row-line text-center">
                            <img src="{{ asset('img/ci_sbc.png') }}" alt="중소기업 진흥청 로고" /> 
                            <p class="text-center list-font">중소기업 진흥청 사업 설명회 운영</p>
                        </li>
    
                        <li class="row row-line text-center">
                            <img src="{{ asset('img/ci_sk-networks.png') }}" alt="sk네트웍스 로고" /> 
                            <p class="text-center list-font">SK Networks 정보통신부분 전속 Promotion 계약</p>
                        </li>
                        <li class="row row-line text-center">
                            <p class="text-center list-font">2002년 설립</p>
                        </li>
                    </ol>
    
                </div>
            </div>
    
        </div>
    </div>
    
    -->
    
    
    
    
    
            <div class="tab-content to_animate" data-animation="fadeInUp">
    
                <div id="history-now" class="tab-pane fade in active">
    
                    <div id="historyCarouselNow" class="carousel slide" data-ride="carousel" data-interval="false">
                        <!--위에버튼은 필요없어서 주석처리
                        <ol class="carousel-indicators-nocls history-round-btn text-center btn-term">
                            <li data-target="#historyCarouselNow" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarouselNow" data-slide-to="1"></li>
                        </ol>
                        -->
    
                        <div class="carousel-inner word-break" role="listbox">
    
    
    
                            <!--현재-2012-2-->
                            <ol class="item active"> 
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고" /></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">특허등록  ‘컨텐츠 사용 집계 시스템 및 그 방법’ </p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">통신사 대리점 오프라인 관리 운영</p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">2014년 제니엘 그룹 경영실적 최우수상 수상</p>
                                    <div class='clearfix'></div>
                                </li>
                            </ol>
                            <ol class="item">
                                <!--현재-2012-1-->
                                <li class="row row-line padding15" >
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">통신사 공식 온라인 ACC(accessory)Mall 운영</p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">통신사 사은품 센터 및 고객상담센터 운영</p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">HR토탈서비스 시행_ 채용대행, 인재파견&도급, 헤드헌팅</p>
                                    <div class='clearfix'></div>
                                </li>
                            </ol>
    
                        </div>
                        <ol class="carousel-indicators-nocls2 history-round-btn text-center btn-term">
                            <li data-target="#historyCarouselNow" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarouselNow" data-slide-to="1"></li>
                        </ol>
                    </div>
    
                </div>
    
    
                <div id="history-2011" class="tab-pane fade">
    
                    <div id="historyCarousel2011" class="carousel slide" data-ride="carousel" data-interval="false">
                        <!--<ol class="carousel-indicators-nocls history-round-btn text-center btn-term">
                            <li data-target="#historyCarousel2011" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarousel2011" data-slide-to="1"></li>
                        </ol>-->
                        <div class="carousel-inner word-break" role="listbox">
    
                            <ol class="item active">
                                <!--2011-2008-2-->
    
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_k2.png') }}" alt="k2 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">K2코리아 특판 계약 체결</p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">유통사업부 신설</p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">일자리 창출 기업지원 특별우대기업 선정</p>
                                    <div class='clearfix'></div>
                                </li>
                            </ol>
                            <ol class="item">
                                <!--2011-2008-1-->
                                <li class="row row-line padding15" >
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">통신 대리점 개설 _ 유무선 통신상품</p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci-zeniel.jpg') }}" alt="제니엘 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">2008년 제니엘 그룹 영업목표 달성 최우수상 수상</p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_wealshop.png') }}" alt="윌샵 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">기업 복지몰 WEAL SHOP 서비스 개시</p>
                                    <div class='clearfix'></div>
                                </li>
                            </ol>
    
                        </div>
                        <ol class="carousel-indicators-nocls2 history-round-btn text-center btn-term">
                            <li data-target="#historyCarousel2011" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarousel2011" data-slide-to="1"></li>
                        </ol>
                    </div>
    
                </div>
    
                <div id="history-2007" class="tab-pane fade">
    
                    <div id="historyCarousel2007" class="carousel slide" data-ride="carousel" data-interval="false">
                        <!--<ol class="carousel-indicators-nocls history-round-btn text-center btn-term">
                            <li data-target="#historyCarousel2007" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarousel2007" data-slide-to="1"></li>
                            <li data-target="#historyCarousel2007" data-slide-to="2"></li>
                        </ol>-->
                        <div class="carousel-inner word-break" role="listbox">
    
                            <ol class="item active">
                                <!--2007-2004-3-->
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_sk-telecom.png') }}" alt="sk텔레콤 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">SK 텔레콤 판촉 Promotion</p>
                                    <div class='clearfix'></div>
                                </li>
    
                                <li class="row row-line padding15" >
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_sk-telecom.png') }}" alt="sk텔레콤 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">SK 텔레콤 전속 매니저팀 운영</p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" > 
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_korea-petroleum.png') }}" alt="한국석유공사 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">한국석유공사 의전 행사</p>
                                    <div class='clearfix'></div>
                                </li>
                            </ol>
    
                            <ol class="item">
                                <!--2007-2004-2-->
                                <li class="row row-line padding15" > 
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_sk-networks.png') }}" alt="sk네트웍스 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">SK Networks 대형 유통망 판촉 Promotion </p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_asiana.png') }}" alt="아시아나 로고" class="img-responsive center col-lg-4 col-md-4" /></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">아시아나 항공 내국인 홍보 Promotion </p>
                                    <div class='clearfix'></div>
                                </li>
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_cj.png') }}" alt="cj 로고" class="img-responsive center col-lg-4 col-md-4" /></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">CJ 백설 브랜드 런칭 Promotion</p>
                                    <div class='clearfix'></div>
                                </li>
                            </ol>
    
                            <ol class="item">
                                <!--2007-2004-1-->
                                <li class="row row-line padding15" >  
                                    <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"><img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고"/></div>
                                    <div class='clearfix visible-sm-block'></div>
                                    <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">2004년 ㈜ 제니엘맥 상호 변경</p>
                                    <div class='clearfix'></div>
                                </li>
                            </ol>
    
                        </div>
                        <ol class="carousel-indicators-nocls2 history-round-btn text-center btn-term">
                            <li data-target="#historyCarousel2007" data-slide-to="0" class="active"></li>
                            <li data-target="#historyCarousel2007" data-slide-to="1"></li>
                            <li data-target="#historyCarousel2007" data-slide-to="2"></li>
                        </ol>
                    </div>
    
                </div>
    
                <div id="history-2003" class="tab-pane fade">
    
                    <ol>
                        <!--2003-2002-1-->
                        <li class="row row-line padding15" >
                            <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;"> 
                            <img src="{{ asset('img/ci_sbc.png') }}" alt="중소기업 진흥청 로고" class="img-responsive center col-lg-4 col-md-4" /></div>
                            <div class='clearfix visible-sm-block'></div>
                            <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">중소기업 진흥청 사업 설명회 운영</p>
                            <div class='clearfix'></div>
                        </li>
    
                        <li class="row row-line padding15" >
                            <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;">
                            <img src="img/ci_sk-networks.png" alt="sk네트웍스 로고" class="img-responsive center col-lg-4 col-md-4" /></div>
                                    <div class='clearfix visible-sm-block'></div>
                            <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">SK Networks 정보통신부분 전속 Promotion 계약</p>
                            <div class='clearfix'></div>
                        </li>
                        <li class="row row-line padding15" >  
                            <div style="display:inline-block;line-height:42px;vertical-align:top; margin:0 15px;">
                            <img src="{{ asset('img/ci_zenielmac.png') }}" alt="제니엘맥 로고" class="img-responsive center col-lg-4 col-md-4" /></div>
                            <div class='clearfix visible-sm-block'></div>
                            <p class="list-font" style="display:inline-block; line-height:42px;vertical-align:top; margin:0 15px;">2002년 설립</p>
                            <div class='clearfix'></div>
                        </li>
                    </ol>
    
                </div>
            </div>
    
        </div>
    </div>


@endsection