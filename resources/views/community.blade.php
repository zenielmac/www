@extends('layouts.master')

@section('content')





<div class="section section-padding img-bg" >
	<div class="container bg-notice">
		<h2 class="text-center nanum-barun-gothic-ultralight to_animate" data-animation="fadeInUp">공지<strong>사항</strong></h2>
		<div class="row max-528">


            <!--
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notice-box" >
				<div class="inner-notice to_animate" data-animation="fadeInUp">
					<p class="block">NO.2</p>
					<h3 class="block word-break nanum-barun-gothic-ultralight text-over">제니엘맥 주소이전</h3>
					<a class="btn btn-info btn-lg" data-toggle="modal" data-target="#Mo2">더보기</a>
				</div>
				<div id="Mo2" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">제니엘맥 주소이전</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-12">
										<p>NO.2</p>
										<h3>제니엘맥 주소이전</h3>
										<blockquote>
										<p>제니엘맥 주소가 이전되었습니다.<br><br>이전주소 : 서울시 마포구 삼개로 16 근신빌딩 2신관 6층 601호 <br><br>자세한 위치는 메뉴 contact us에서 확인해주시길 바랍니다. </p>
										<footer></footer> 
										</blockquote>
									</div>
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>
			</div>
            -->
            
            
            <div id="noticeList">

                @foreach($tbl_notices as $rs)

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notice-box" >
                    <div class="inner-notice to_animate" data-animation="fadeInUp">
                        <p class="block">NO.{{ $rs->number }}</p>
                        <h3 class="block word-break nanum-barun-gothic-ultralight text-over">{{ $rs->title }}</h3>
                        <a class="btn btn-info btn-lg" data-toggle="modal" data-target="#Mo{{ $rs->number }}">더보기</a>
                    </div>

                    <!-- Modal -->
                    <div id="Mo{{ $rs->number }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">{{ $rs->title }}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>NO.{{ $rs->number }}</p>
                                            <h3>{{ $rs->title }}</h3>
                                            <blockquote>
                                            <p>{!! nl2br( $rs->contents ) !!}</p>
                                            <footer><!--2016-05-27--></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- //Modal -->

                </div>

                @endforeach

            </div>    




		</div>

	</div>
</div>






			<!--
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notice-box" >
				<div class="inner-notice to_animate" data-animation="fadeInUp" >
					<p class="block">NO.5</p>
					<h3 class="block word-break nanum-barun-gothic-ultralight text-over">2016년 청년취업인턴제 기업/인턴 모집</h3>
					<a href="#">더보기</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notice-box" >
				<div class="inner-notice to_animate" data-animation="fadeInUp">
					<p class="block">NO.4</p>
					<h3 class="block word-break nanum-barun-gothic-ultralight text-over">일자리 전도사 제니엘의 '도전 열정 20년'</h3>
					<a href="#">더보기</a>
				</div>
			</div>
		</div>
		<div class="row max-528">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notice-box" >
				<div class="inner-notice to_animate" data-animation="fadeInUp" >
					<p class="block">NO.3</p>
					<h3 class="block word-break nanum-barun-gothic-ultralight text-over">새로운 출발! 제니엘에서 준비하세요! </h3>
					<a href="#">더보기</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notice-box" >
				<div class="inner-notice to_animate" data-animation="fadeInUp">
					<p class="block">NO.2</p>
					<h3 class="block word-break nanum-barun-gothic-ultralight text-over">일자리 전도사 제니엘의 '도전 열정 20년'</h3>
					<a href="#">더보기</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notice-box" >
				<div class="inner-notice to_animate" data-animation="fadeInUp" >
					<p class="block">NO.1</p>
					<h3 class="block word-break nanum-barun-gothic-ultralight text-over">제니엘 푸른꿈 일자리 재단 출범 </h3>
					<a href="#">더보기</a>
				</div>
			</div>
		</div>-->
		<!-- <div class="row">
			<div class="col-md-12 text-center">
				<ul class="pagination">
					<li>
						<a href="#">이전</a>
					</li>
					<li>
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">다음</a>
					</li>
				</ul>
			</div>
		</div> -->

	</div>
</div>
    
@endsection