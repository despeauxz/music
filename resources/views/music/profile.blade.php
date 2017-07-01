@extends('music.layout.app')

@section('content')
	<section id="content">
		<section class="vbox">
			<section class="scrollable">
				<section class="hbox stretch">
					<aside class="aside-lg bg-light lter b-r"><section class="vbox">
							<section class="scrollable">
								<div class="wrapper">
									<div class="text-center m-b m-t">
										<img src="http://musik.app/a3.png" class="img-circle thumb-lg">

										<div>
											<div class="h3 m-t-xs m-b-xs">{{ Auth::user()->getUsername() }}</div>
											<small class="text-muted">
												<i class="fa fa-map-marker"></i> Ilorin, Nigeria
											</small>
										</div>
									</div>
									<div class="panel wrapper">
										<div class="row text-center">
											<div class="col-xs-6">
												<a href="#">
													<span class="m-b-xs h4 block">0</span>
													<small class="text-muted">Followers</small>
												</a>
											</div>
											<div class="col-xs-6">
												<a href="#">
													<span class="m-b-xs h4 block">0</span>
													<small class="text-muted">Following</small>
												</a>
											</div>
										</div>
									</div>
									<div class="btn-group btn-group-justified m-b">
										<a class="btn btn-success btn-rounded" data-toggle="button">
											<span class="text">
												<i class="fa fa-eye"></i> Follow 
											</span>
											<span class="text-active">
												<i class="fa fa-eye"></i> Following </span>
											</a>
											<a class="btn btn-dark btn-rounded">
												<i class="fa fa-comment-o"></i> Chat 
											</a>
										</div>
										<div>
											<small class="text-uc text-xs text-muted">About me</small>
											<small class="text-uc text-xs text-muted">Description</small>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
											<div class="line"></div>
											<small class="text-uc text-xs text-muted">Connection</small>
											<p class="m-t-sm">
												<a href="#" class="btn btn-rounded btn-twitter btn-icon">
													<i class="fa fa-twitter"></i>
												</a>
												<a href="#" class="btn btn-rounded btn-facebook btn-icon">
													<i class="fa fa-facebook"></i>
												</a>
												<a href="#" class="btn btn-rounded btn-gplus btn-icon">
													<i class="fa fa-google-plus"></i>
												</a>
											</p>
										</div>
									</div>
								</section>
							</section></aside>

					<aside class="bg-white">
						<section class="vbox">
							<header class="header bg-light lt">
								<ul class="nav nav-tabs nav-white">
									<li class="active">
										<a href="#activity" data-toggle="tab">Activity</a>
									</li>
									<li class="">
										<a href="#events" data-toggle="tab">Events</a>
									</li>
									<li class="">
										<a href="#interaction" data-toggle="tab">Interaction</a>
									</li>
								</ul>
							</header>
							<section class="scrollable">
								<div class="tab-content">
									<div class="tab-pane active" id="activity">
										<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
											<li class="list-group-item">
												<a href="#" class="thumb-sm pull-left m-r-sm">
													<img src="http://musik.app/a0.jpg" class="img-circle">
												</a>
												<a href="#" class="clear">
													<small class="pull-right">3 minuts ago</small>
													<strong class="block">Drew Wllon</strong>
													<small>Wellcome and play this web application template ... </small>
												</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="events">
										<div class="text-center wrapper">
											<i class="fa fa-spinner fa fa-spin fa fa-large"></i>
										</div>
									</div>
									<div class="tab-pane" id="interaction">
										<div class="text-center wrapper">
											<i class="fa fa-spinner fa fa-spin fa fa-large"></i>
										</div>
									</div>
								</div>
							</section>
						</section>
					</aside>

					<aside class="col-lg-3 b-l">
						<section class="vbox">
							<section class="scrollable padder-v">
								<div class="panel">
									<h4 class="font-thin padder">Latest Tweets</h4>
									<ul class="list-group">
										<li class="list-group-item">
											<p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play, have fun </p>
											<small class="block text-muted">
												<i class="fa fa-clock-o"></i> 2 minuts ago
											</small>
										</li>
										<li class="list-group-item">
											<p>Morbi nec<a href="#" class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
											<small class="block text-muted">
												<i class="fa fa-clock-o"></i> 1 hour ago
											</small>
										</li>
										<li class="list-group-item">
											<p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
											<small class="block text-muted">
												<i class="fa fa-clock-o"></i> 2 hours ago
											</small>
										</li>
									</ul>
								</div>
								<div class="panel clearfix">
									<div class="panel-body">
										<a href="#" class="thumb pull-left m-r">
											<img src="http://musik.app/a0.jpg" class="img-circle">
										</a>
										<div class="clear">
											<a href="#" class="text-info">@Mike Mcalidek
												<i class="fa fa-twitter"></i>
											</a>
											<small class="block text-muted">2,415 followers / 225 tweets</small>
											<a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>
										</div>
									</div>
								</div>
							</section>
						</section>
					</aside>
				</section>
			</section>
			<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
		</section>
	</section>	
@endsection
