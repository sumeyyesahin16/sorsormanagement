@extends('app.master')
@section('css')
@endsection

@section('header-title')
Dashboard
@endsection


@section('content')

						<!-- ROW-1 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
								<!-- Col Header -->
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body text-center">
												<h3 class="text-primary">Total Statistics</h3>
											</div>
										</div>
									</div><!-- Col Header Ends -->

									<!--Col Start -->
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-primary mb-0 box-primary-shadow">
													<i class="fe fe-trending-up text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Users' Count</h6>
												<h2 class="mb-2 number-font">{{$userCount}}</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div><!--Col Ends-->

									<!--Col Start -->
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-primary mb-0 box-primary-shadow">
													<i class="fe fe-trending-up text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Total Shares</h6>
												<h2 class="mb-2 number-font">
													@foreach($userShares as $us)
														{{$us->count_shares}}
													@endforeach
												</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div><!--Col Ends-->

									<!--Col Start -->
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-primary mb-0 box-primary-shadow">
													<i class="fe fe-trending-up text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Total Likes</h6>
												<h2 class="mb-2 number-font">
													@foreach($userShares as $us)
														{{$us->count_likes}}
													@endforeach
												</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div><!--Col Ends-->
									<!--Col Start -->
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-primary mb-0 box-primary-shadow">
													<i class="fe fe-trending-up text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Total Comments</h6>
												<h2 class="mb-2 number-font">
													@foreach($userShares as $us)
														{{$us->count_comments}}
													@endforeach
												</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div><!--Col Ends-->



								</div>
							</div>
						</div>
						<!-- ROW-1 END -->



						<!-- ROW-2 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
								<!-- Col Header -->
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body text-center">
												<h3 class="text-primary">Posts Types</h3>
											</div>
										</div>
									</div><!-- Col Header Ends -->

									<!--Col Start -->
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-primary mb-0 box-primary-shadow">
													<i class="fe fe-trending-up text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Shared Posts</h6>
												<h2 class="mb-2 number-font">{{$userSharePost}}</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div><!--Col Ends-->

									<!--Col Start -->
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-primary mb-0 box-primary-shadow">
													<i class="fe fe-trending-up text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Shared Photos</h6>
												<h2 class="mb-2 number-font">
												{{$userSharePhoto}}
												</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div><!--Col Ends-->

									<!--Col Start -->
									<div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
										<div class="card">
											<div class="card-body text-center statistics-info">
												<div class="counter-icon bg-primary mb-0 box-primary-shadow">
													<i class="fe fe-trending-up text-white"></i>
												</div>
												<h6 class="mt-4 mb-1">Shared Videos</h6>
												<h2 class="mb-2 number-font">
													{{$userShareVideo}}
												</h2>
												<p class="text-muted"></p>
											</div>
										</div>
									</div><!--Col Ends-->

								</div>
							</div>
						</div>
						<!-- ROW-2 END -->

						<!-- ROW-3 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
								<!-- Col Header -->
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body text-center">
												<h3 class="text-primary">Special Users</h3>
											</div>
										</div>
									</div><!-- Col Header Ends -->

									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
										<div class="card">
											<div class="card-body text-center">
												<i class="mdi mdi-account-multiple icon-size  text-primary text-primary-shadow"></i>												<h6 class="mt-4 mb-2">SorSor Pro</h6>
												<h2 class="mb-2  number-font">
													{{$userProCount}}
												</h2>
											</div>
										</div>
									</div><!-- COL END -->
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
										<div class="card">
											<div class="card-body text-center">
												<i class="fa fa-dollar text-secondary fa-3x text-secondary-shadow"></i>
												<h6 class="mt-4 mb-2">SorSor Verified</h6>
												<h2 class="mb-2  number-font">
													{{$userVerifiedCount}}
												</h2>
											</div>
										</div>
									</div><!-- COL END -->


								</div>
							</div>
						</div>
						<!-- ROW-3 END -->

						<!-- ROW-4 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
								<!-- Col Header -->
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body text-center">
												<h3 class="text-primary">Payments</h3>
											</div>
										</div>
									</div><!-- Col Header Ends -->

									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
										<div class="card">
											<div class="card-body text-center">
												<i class="fa fa-dollar text-secondary fa-3x text-secondary-shadow"></i>
												<h6 class="mt-4 mb-2">Purchased Contents</h6>
												<h2 class="mb-2  number-font">
													@foreach($purchasedContent as $pu)
														{{$pu->price}} ₺
													@endforeach
												</h2>
											</div>
										</div>
									</div><!-- COL END -->
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
										<div class="card">
											<div class="card-body text-center">
												<i class="fa fa-dollar text-secondary fa-3x text-secondary-shadow"></i>
												<h6 class="mt-4 mb-2">Users' Total Payments</h6>
												<h2 class="mb-2  number-font">
													@foreach($userPayment as $up)
														{{$up->amount}} ₺
													@endforeach
												</h2>
											</div>
										</div>
									</div><!-- COL END -->

								</div>
							</div>
						</div><!-- ROW-4 END -->


@endsection

@section('js')
	<script src="{{ URL::asset('assets/plugins/counters/counterup.min.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/counters/waypoints.min.js') }}"></script>
	<script src="{{ URL::asset('assets/plugins/counters/counters-1.js') }}"></script>
@endsection




