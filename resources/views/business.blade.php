@extends('layouts.master')

@section('content')

<SCRIPT type="text/javascript">
<!--
    // 네비게이션 스크롤 및 링크 처리 2016-05-27 김승태
    $(document).ready(function(){
        // Add scrollspy to <body>
        $('body').scrollspy({target: "#navbar-menu2", offset: 100});

        // Add smooth scrolling on all links inside the navbar
        $("#navbar-menu2 a").on('click', function(event) {
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
    
    <a name="Business1">
    <div class="section  section-padding" id="Business1">
    <div class="container">
        <div class="row">
                <h2 class="text-center h2-margin nanum-barun-gothic-ultralight  to_animate" data-animation="fadeInUp">유통<strong>사업</strong></h2>
                <div class="col-md-6  to_animate" data-animation="fadeInUp">
                    <h3 class="blue">B2B특판</h3>
                    <p class="font-size-16 word-break">최고의 운영 노하우와 인프라로 믿을 수 있는 유통기업<br/>
                    기업의 효율성을 극대화하고 모듈형 시스템 제공<br/>
                    기업 판촉 및 특판운영</p>
                </div>
            <div class="col-md-6  to_animate" data-animation="fadeInUp">
                    <h3 class="blue">B2C사업</h3>
                    <p class="font-size-16">고객 needs에 충족하는 최고의 품질, 합리적 가격의 상품을 제공<br/>
                    온/오프라인 직영 및 위탁운영</p>
            </div>
        </div>
        <div class="row p-y-3">
            <div class="col-md-6  to_animate" data-animation="fadeInUp">
                    <h3 class="blue">B2E사업</h3>
                    <p class="font-size-16 word-break">자체개발 솔루션을 통한 판매 대행 직원 기념일 서비스 운영 기업 복지몰 운영관리(wealshop 자체운영)</p>
            </div>
            <div class="col-md-6  to_animate" data-animation="fadeInUp">
                    <h3 class="blue  word-break">이통사 쇼핑몰 상품공급</h3>
                    <p class="font-size-16 word-break">이동통신사 온라인 공식 쇼핑몰 개통사은품, 판매상품 공급 및 운영<br/>
                    (SK TWD)</p>
            </div>
            </div>
        </div>
    </div>





<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="text-center h2-margin  to_animate" data-animation="fadeInUp">WEAL SHOP</h3>
                <p class="text-center color-cha word-break  to_animate" data-animation="fadeInUp">(주)제니엘맥에서 운영하는 자체 복지몰로 사용기업 및 구매하는 임직원의 편의성을 고려한 UI &amp; UX 구축한 사이트</p>
                <img src="{{ asset('img/img_computer.png') }}" class="img-responsive center-block  to_animate" data-animation="fadeInUp" alt="윌샵사이트 이미지" />
            </div>
        </div>  
    </div>
</div>


        <div class="section  section-padding yellow-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center nanum-barun-gothic-ultralight  to_animate" data-animation="fadeInUp">윌샵CI</h3>
                        <div class="wealshop-ci-bg center te  to_animate" data-animation="fadeInUp">
                            <!--img src="img/img_wealshop_ci.png" class="img-responsive center" alt="윌샵로고" /-->
                            <a href="http://www.wealshop.co.kr" target="_blank">
                                <p class="text-center color-cha font-size-16 bg-bottom-padding">www.wealshop.co.kr</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>






<a name="Business2">
<div class="section  section-padding" id="Business2">
    <div class="container">
        <div class="row">
            <h2 class="text-center term4 nanum-barun-gothic-ultralight  to_animate" data-animation="fadeInUp">인재
                <strong>사업</strong>
            </h2>
            <div class="col-md-6 term1 word-break  to_animate" data-animation="fadeInUp">
                <h3>아웃소싱</h3>
                <p class="color-cha">물류대행, 매장 관리대행, 복지포인트 지급대행, 고객센터 위탁운영 등</br>
                고용의 유연성 확보 및 차별화 된 관리 시스템 제공
                </p>
                <h3>프로모션</h3>
                <p class="color-cha">행사기획, 인력파견, 사은품 구매대행, 정산대행, 경품대행 등</br>온/오프라인 프로모션 운영</p>
                <h3>인재파견</h3>
                <p class="color-cha">근로자 파견, 도급<!--, 채용대행 --> 등</br>고객사의 환경에 적합한 맞춤 인재 서비스 제공</p>
            </div>
            <div class="col-md-6 to_animate img-margin" data-animation="fadeInUp">
                <img src="{{ asset('img/img_picto.png') }}" class="img-responsive" alt="아웃소싱 프로모션이 합쳐진 이미지"  />
            </div>  
        </div>
    </div>
</div>



<!-- <div class="section section-margin bg5">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="purple-content color-white" >
                <i class="glyphicon glyphicon-user fa-3x bg2 icon-padding"></i>
                <p class="margin1 color-white font-size-14 text-center word-break width108">전문성을 갖춘 프로그램을 통한 인력파견</p>
            </div>

            <div class="purple-content color-white color-white" >
                <i class="glyphicon glyphicon-briefcase fa-3x icon-padding  bg3"></i>
                <p class="margin1 color-white font-size-14 text-center word-break width108">채용등으로 고용의 유연성 확보</p>
            </div>
            <div class="purple-content color-white color-white" >
                <i class="glyphicon glyphicon-signal fa-3x  bg4 icon-padding"></i>
                <p class="margin1 color-white font-size-14 text-center word-break width108">업무효율성증대</p>
            </div>
        </div>
    </div>
</div> -->




        <div class="section bg5 padding5">
            <div class="container max-width500">
                <div class="row text-center">
                        <div class="col-md-4 color-white  to_animate" data-animation="fadeInUp" >
                            <i class="glyphicon glyphicon-user fa-3x bg2 icon-padding"></i>
                            <p class="margin1 color-white font-size-14 text-center word-break">전문성을 갖춘 프로그램을 통한 인력파견</p>
                        </div>
                        <div class="col-md-4 color-white  to_animate" data-animation="fadeInUp" >
                            <i class="glyphicon glyphicon-briefcase fa-3x icon-padding  bg3"></i>
                            <p class="margin1 color-white font-size-14 text-center word-break">채용등으로 고용의 유연성 확보</p>
                        </div>
                        <div class="col-md-4 color-white  to_animate" data-animation="fadeInUp" >
                            <i class="glyphicon glyphicon-signal fa-3x  bg4 icon-padding"></i>
                            <p class="margin1 color-white font-size-14 text-center word-break">업무효율성증대</p>
                        </div>
                </div>
            </div>
        </div>



<a name="Business3">
<div class="section  section-padding" id="Business3">
    <div class="container max-width800">
        <h2 class="text-center h2-margin nanum-barun-gothic-ultralight  to_animate" data-animation="fadeInUp">통신<strong>사업</strong></h2>
        <p class="text-center bottom-margin word-break  to_animate" data-animation="fadeInUp">고객지원 시스템, 홍보시스템, 매출 분석 시스템 업무처리 시스템을 갖추고 있습니다.</p>
        <div class="row orange-bg width-box- orange padding1" >
            <div class="col-md-4 color-white text-center  to_animate" data-animation="fadeInUp">
                <i class="glyphicon glyphicon-phone fa-4x"></i>
                <p class="margin-top-orangebox color-white font-size-16 text">통신사 공식인증
                    <br/>대리점운영</p>
            </div>
            <div class="col-md-4 color-white text-center line-orangebox  to_animate" data-animation="fadeInUp">
                <i class="fa fa-desktop fa-4x"></i>
                <p class="margin-top-orangebox color-white font-size-16 text">메이저 온라인 쇼핑몰
                    <br/>입점 및 운영대행</p>
            </div>
            <div class="col-md-4 color-white text-center line-orangebox  to_animate" data-animation="fadeInUp">
                <i class="fa fa-building fa-4x"></i>
                <p class="margin-top-orangebox color-white font-size-16 text">스마트폰 판매 및
                    <br/>기업 특판 운영</p>
            </div>
        </div>
    </div>
</div>


        <div class="section">
            <div class="container">
                <h3 class="orange text-center  to_animate" data-animation="fadeInUp">Promotion</h3>
                <div class="row  left-circle-line" style="margin-bottom:6%;">
                    <div class="col-md-4 line-bottom-margin  to_animate" data-animation="fadeInUp">
                        <p class="orange font-size-14">2005년 - 2009년</p>
                        <p class="text-bold orange promotin-p-margin font-size-18">A망 운영 온라인 판매</p>
                    </div>
                    <div class="col-md-4 line-bottom-margin word-break  to_animate" data-animation="fadeInUp">
                        <p class="orange font-size-14">2009년 - 2015년</p>
                        <p class="text-bold orange promotin-p-margin font-size-18">통신사 B2B 스마트 비즈 대리점</p>
                    </div>
                    <div class="col-md-4 line-bottom-margin word-break  to_animate" data-animation="fadeInUp" >
                        <p class="orange font-size-14">2015년 - 현재</p>
                        <p class="text-bold orange promotin-p-margin font-size-18">통신사 B2C 케이디 대리점 운영</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- 20171205 웹디김미선 주석처리<div class="section section-padding">
            <div class="container">
                <div class="row bg6">
                            <div class="my-t1 text-right my-t-position">
                                <h3 class="my-t-font1  to_animate" data-animation="fadeInUp">통신사 온라인 공식 대리점</h3>
                                <p class="my-t-font2 nanum-barun-gothic-ultralight  to_animate" data-animation="fadeInUp">MY-T 쇼핑몰</p>
                                <a href="javascript: goMyT();" class="myt-button  to_animate" data-animation="fadeInUp">바로보기</a>
                            </div>
                </div>
            </div>
        </div> -->
        <!-- <SCRIPT type="text/javascript">
        function goMyT() {
                var winMyT = window.open("http://www.my-t.co.kr", "winMyT", "" );
                winMyT.focus();
            }

        //
        </SCRIPT> -->

@endsection