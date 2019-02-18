@extends("templates.post")

@section("styles")
@endsection

@section("scripts")
@endsection

@section("body")
<section class="bg-1-white ptb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="sided-70x">
								<div>
									<p class="ptb-20 color-ash"><b>{{$item->subtitle}}</b></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<ul class="color-ash lh-70 text-right text-sm-left list-a-plr-10 font-13">
								<li><b>SHARE</b></li>
								<li><a href="#"><i class="color-facebook ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="color-twitter ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="color-google ion-social-google"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="mt-40 mt-sm-10">
						<?php echo($item->content)?>
					</div>			
					<div class="brdr-grey-1 mt-50 mt-sm-20"></div>
					<div class="mt-50 mb-20">
						<div class="row">
							<div class=" col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
								<div class="card h-100 min-h-350x">
									<div class="bg-white h-100">
									
										<!-- SETTING IMAGE WITH bg-10 -->
										<div class="h-50 bg-10"></div>
										
										<div class="plr-25 ptb-15 h-50">
											<div class="dplay-tbl">
												<div class="dplay-tbl-cell">
												
													<h5 class="color-ash"><b>ART</b></h5>
													<h4 class="mtb-10">
														<a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h4>
													<ul class="list-li-mr-10 color-lt-black">
														<li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
														<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
													</ul>
													
												</div><!-- dplay-tbl-cell -->
											</div><!-- dplay-tbl -->
										</div><!-- plr-25 ptb-15 -->
									</div><!-- hot-news -->
								</div><!-- card -->
							</div><!-- col-lg-4 col-md-6 -->
							
							<div class=" col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
								<div class="card h-100 min-h-350x">
									<div class="bg-white h-100">
									
										<!-- SETTING IMAGE WITH bg-10 -->
										<div class="h-50 bg-5"></div>
										
										<div class="plr-25 ptb-15 h-50">
											<div class="dplay-tbl">
												<div class="dplay-tbl-cell">
												
													<h5 class="color-ash"><b>ART</b></h5>
													<h4 class="mtb-10">
														<a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h4>
													<ul class="list-li-mr-10 color-lt-black">
														<li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
														<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
													</ul>
													
												</div><!-- dplay-tbl-cell -->
											</div><!-- dplay-tbl -->
										</div><!-- plr-25 ptb-15 -->
									</div><!-- hot-news -->
								</div><!-- card -->
							</div><!-- col-lg-4 col-md-6 -->
							
							<div class=" col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
								<div class="card h-100 min-h-350x">
									<div class="bg-white h-100">
									
										<!-- SETTING IMAGE WITH bg-10 -->
										<div class="h-50 bg-12"></div>
										
										<div class="plr-25 ptb-15 h-50">
											<div class="dplay-tbl">
												<div class="dplay-tbl-cell">
												
													<h5 class="color-ash"><b>ART</b></h5>
													<h4 class="mtb-10">
														<a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h4>
													<ul class="list-li-mr-10 color-lt-black">
														<li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
														<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
													</ul>
													
												</div><!-- dplay-tbl-cell -->
											</div><!-- dplay-tbl -->
										</div><!-- plr-25 ptb-15 -->
									</div><!-- hot-news -->
								</div><!-- card -->
							</div><!-- col-lg-4 col-md-6 -->
						</div><!-- row-->	
					</div><!-- mt-50 mb-20-->	
				</div><!-- col-sm-9 -->
				@include("layout.ads")
			</div><!-- row -->
		</div><!-- container -->
	</section>
@endsection