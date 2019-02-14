@extends("layout.master")

@section("body")
<section class="bg-1-white ptb-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-md-12 col-lg-8 ptb-50 pr-30 pr-md-15">
					<h4 class="mb-30 mt-20 clearfix"><b>Most Popular Videos</b></h4>

					<div class="row">
						<div class="col-sm-12 mb-30 swiper-area ">

							<!-- SETTING IMAGE WITH bg-6 -->
							<div class="p-40 bg-layer-4 pos-relative z-1 oflow-hidden pr-0 color-white">


							</div>
						</div>
					</div>

					<div class="row">
						@foreach($phrases as $phrase)
						<div class="col-md-6 col-lg-6 col-xl-4 mb-30">
							<div class="card h-100 bg-white">
								<div class="plr-25 ptb-15">
									<h5 class="color-ash"><b>{{$phrase->title}}</b></h5>
									<h4 class="mtb-10"><a href="#"><b>{{$phrase->text}}</b></a></h4>
									<ul class="list-li-mr-10 color-lt-black">
										<li>{{$phrase->updated_at}}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					</div>


					

					
					<h4 class="mb-30 mt-20 clearfix"><b>Most Popular Videos</b></h4>
					
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
							<div class="card h-100 bg-white">
								<div class="plr-25 ptb-15 h-100">
									<div class="dplay-tbl">
										<div class="dplay-tbl-cell">
											<h5 class="color-ash"><b>FASHION</b></h5>
											<h2 class="mtb-10"><a href="#">
												<b>As an Alchoholic, Your Company "Parks" are Killing me</b></a></h2>
											<ul class="list-li-mr-10 color-lt-black">
												<li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
												<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
											</ul>
										</div><!-- dplay-tbl-cell -->
									</div><!-- dplay-tbl -->
								</div><!-- plr-25 ptb-15 -->
							</div><!-- card -->
						</div><!-- col-lg-4 col-md-6 -->
						
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 mb-30">
						
							<!-- SETTING IMAGE WITH bg-8 -->
							<div class="card pos-relative h-100 bg-8 bg-layer-4 color-white">
								<div class="plr-25 ptb-15 h-100">
									<div class="dplay-tbl">
										<div class="dplay-tbl-cell">
										
											<h5 class="color-grey"><b>ART</b></h5>
											<h2 class="mtb-10"><a href="#">
												<b>As an Alchoholic, Your Company "Parks" are Killing me</b></a></h2>
											<ul class="list-li-mr-10 color-grey">
												<li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
												<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
											</ul>
											
										</div><!-- dplay-tbl-cell -->
									</div><!-- dplay-tbl -->
								</div><!-- plr-25 ptb-15 -->
							</div><!-- card -->
						</div><!-- col-lg-4 col-md-6 -->

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

					</div><!-- row -->
					
					<h6 class="text-center mt-20"><a class="btn-brdr-grey color-ash plr-30" href="#"><b>LOAD MORE</b></a></h6>
				</div><!-- col-sm-9 -->
				
				<div class="col-md-12 col-lg-3 bg-2-white ptb-50 pl-30 pl-md-15">
					<div class="row">
						<div class="col-md-12 col-lg-8">
							<div class="mx-w-md-400x mlr-md-auto">
							
								<div class="mb-50">
									<h5 class="mb-30"><b>TOP STORIES</b></h5>
									
									<div class="sided-80x mb-20">
										<div class="s-left">
											<img src="images/top_1_120x120.jpg" alt="">
										</div><!-- s-left -->
										<div class="s-right">
											<h5 class="pt-5"><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left">
											<img src="images/top_2_120x120.jpg" alt="">
										</div><!-- s-left -->
										<div class="s-right">
											<h5 class="pt-5"><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left">
											<img src="images/top_3_120x120.jpg" alt="">
										</div><!-- s-left -->
										<div class="s-right">
											<h5 class="pt-5"><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left">
											<img src="images/top_4_120x120.jpg" alt="">
										</div><!-- s-left -->
										<div class="s-right">
											<h5 class="pt-5"><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
								</div><!-- mb-50 -->
								
								<a class="mb-50 pos-relative dplay-block" href="#">
									
									<img src="images/sidebar_2_400X600.jpg" alt="">
									<div class="abs-tblr z-10 bg-layer-4">
									
										<div class="dplay-tbl text-center color-white">
											<div class="dplay-tbl-cell">
												<h1 class="mb-10"><b class="mr-15">S</b><b class="ml-15">A</b></h1>
												<h1 class="mt-10"><b class="mr-15">L</b><b class="ml-15">E</b></h1>
											</div>
										</div><!-- dplay-tbl -->
									</div><!-- abs-tblr -->
								</a><!-- mb-50 -->
								
								<div class="mb-50">
									<h5 class="mb-30"><b>NEWEST VIDEO</b></h5>
									
									<div class="sided-80x mb-20">
										<div class="s-left">
											<a class="v-icn" href="#"><i class="ion-play"></i></a>
											<img src="images/top_5_120x120.jpg" alt="">
										</div><!-- s-left -->
										<div class="s-right">
											<h5 class="pt-5"><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left">
											<a class="v-icn" href="#"><i class="ion-play"></i></a>
											<img src="images/top_6_120x120.jpg" alt="">
										</div><!-- s-left -->
										<div class="s-right">
											<h5 class="pt-5"><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left">
											<a class="v-icn" href="#"><i class="ion-play"></i></a>
											<img src="images/top_7_120x120.jpg" alt="">
										</div><!-- s-left -->
										<div class="s-right">
											<h5 class="pt-5"><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left">
											<a class="v-icn" href="#"><i class="ion-play"></i></a>
											<img src="images/top_1_120x120.jpg" alt="">
										</div><!-- s-left -->
										<div class="s-right">
											<h5 class="pt-5"><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
								</div><!-- mb-50 -->
								
								<a class="mb-50 pos-relative dplay-block" href="#">
								
									<img src="images/sidebar_1_400X300.jpg" alt="">
									<div class="abs-tblr z-10 bg-layer-4">
									
										<div class="dplay-tbl text-center color-white">
											<div class="dplay-tbl-cell">
												<h3><b>CHARITY</b></h3>
												<h4><b>tournament</b></h4>
											</div>
										</div><!-- dplay-tbl -->
									</div><!-- abs-tblr -->
								</a><!-- mb-50 -->
								
								<div class="mb-0">
									<h5 class="mb-30"><b>NEWEST VIDEO</b></h5>
									
									<div class="sided-80x mb-20">
										<div class="s-left color-ash text-center">
											<div class="dplay-tbl">
												<div class="dplay-tbl-cell">
													<h2><b>16</b></h2>
													<h4><b>JAN</b></h4>
												</div><!-- dplay-tbl-cell -->
											</div><!-- dplay-tbl -->
										</div><!-- s-left -->
										<div class="s-right">
											<h5><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left color-ash text-center">
											<div class="dplay-tbl">
												<div class="dplay-tbl-cell">
													<h2><b>16</b></h2>
													<h4><b>JAN</b></h4>
												</div><!-- dplay-tbl-cell -->
											</div><!-- dplay-tbl -->
										</div><!-- s-left -->
										<div class="s-right">
											<h5><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left color-ash text-center">
											<div class="dplay-tbl">
												<div class="dplay-tbl-cell">
													<h2><b>16</b></h2>
													<h4><b>JAN</b></h4>
												</div><!-- dplay-tbl-cell -->
											</div><!-- dplay-tbl -->
										</div><!-- s-left -->
										<div class="s-right">
											<h5><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
									
									<div class="sided-80x mb-20">
										<div class="s-left color-ash text-center">
											<div class="dplay-tbl">
												<div class="dplay-tbl-cell">
													<h2><b>16</b></h2>
													<h4><b>JAN</b></h4>
												</div><!-- dplay-tbl-cell -->
											</div><!-- dplay-tbl -->
										</div><!-- s-left -->
										<div class="s-right">
											<h5><a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h5>
										</div><!-- s-left -->
									</div><!-- sided-80x -->
								</div><!-- mb-50 -->
								
							</div><!-- mx-w-400 -->
						</div><!-- col-sm-9 -->
					</div><!-- row -->
				</div><!-- col-sm-3 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>
@endsection
