</DOCTYPE html>
<html lang="en" class="app js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	

		<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">

    	<!-- Styles -->
    	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    	<!-- Scripts -->
	    <script>
	        window.Laravel = {!! json_encode([
	            'csrfToken' => csrf_token(),
	        ]) !!};
	    </script>

		<title>Musik | Web Application</title>
	</head>
	<body class="">
		<div id="app">
			<section class="vbox">
				<header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
					<div class="navbar-header aside bg-info nav-xs">
						<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
							<i class="icon-list"></i>
						</a>
						<a href="/" class="navbar-brand text-lt">
							<i class="icon-earphones"></i>
							<img src="{{ asset('logo.png') }}" alt="." class="hide">
							<span class="hidden-nav-xs m-l-sm">Musik</span>
						</a>
						<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user" aria-expanded="false" aria-haspopup="false">
							<i class="icon-settings"></i>
						</a>
					</div>

					<!--  Search form -->
					<form action="" class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-sm bg-white btn-icon rounded">
										<i class="fa fa-search"></i>
									</button>
								</span>
								<input type="text" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
							</div>
						</div>
					</form>

					<div class="navbar-right ">
						<ul class="nav navbar-nav m-n hidden-xs nav-user user open">
							<li class="hidden-xs">
								<a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
									<i class="icon-bell"></i>
									<span class="badge badge-sm up bg-danger count">2</span>
								</a>
								<section class="dropdown-menu aside-xl animated fadeInUp">
									<section class="panel bg-white">
										<div class="panel-heading b-light bg-light">
											<strong>You have <span class="count">2</span> notifications</strong>
										</div>
										<div class="list-group list-group-alt">
											<a href="#" class="media list-group-item">
												<span class="pull-left thumb-sm">
													<img src="http://musik.app/a3.png" alt="..." class="img-circle">
												</span>
												<span class="media-body block m-b-none"> Use awesome animate.css<br>
													<small class="text-muted">10 minutes ago</small>
												</span>
											</a>
											<a href="#" class="media list-group-item">
												<span class="media-body block m-b-none"> 1.0 initial released<br>
													<small class="text-muted">1 hour ago</small>
												</span>
											</a>
										</div>
										<div class="panel-footer text-sm">
											<a href="#" class="pull-right">
												<i class="fa fa-cog"></i>
											</a>
											<a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
										</div>
									</section>
								</section>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
									<span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
										<img src="http://musik.app/a3.png" alt="...">
									</span> {{ Auth::user()->getUsername() }}
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu animated fadeInRight">
									<li>
										<span class="arrow top"></span>
										<a href="#">Settings</a>
									</li>
									<li>
										<a href="/profile">Profile</a>
									</li>
									<li>
										<a href="#">
											<span class="badge bg-danger pull-right">3</span> Notifications
										</a>
									</li>
									<li>
										<a href="/logout" data-toggle="ajaxModal">Logout</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</header>
				


				<!-- Panel left -->
				<section>
					<section class="hbox stretch">
						<aside class="bg-black dk nav-xs aside hidden-print" id="nav">
							<section class="vbox">
								<section class="w-f-md scrollable">
									<div class="slimScrollDiv" style="position: relative;overflow: hidden;width: auto;height: auto;">
										<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railopacity="0.2" style="overflow: hidden;width: auto;height: auto;">
											<nav class="nav-primary hidden-xs">
												<ul class="nav bg clearfix">
													<li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted"> Discover </li>
													<li>
														<a href="/">
															<i class="icon-disc icon text-success"></i>
															<span class="font-bold">What's new</span>
														</a>
													</li>
													<li>
														<a href="/profile">
															<i class="icon-user icon text-success"></i>
															<span class="font-bold">Profile</span>
														</a>
													</li>
													<li>
														<a href="#">
															<i class="icon-music-tone-alt icon text-info"></i>
															<span class="font-bold">Genres</span>
														</a>
													</li>
													<li>
														<a href="#">
															<i class="icon-drawer icon text-primary-lter"></i>
															<span class="font-bold">Events</span>
														</a>
													</li>
													<li>
														<a href="/listen">
															<i class="icon-list icon text-info-dker"></i>
															<span class="font-bold">Listen</span>
														</a>
													</li>
													<li>
														<a href="#" data-target="#content" data-el="#bjax-el" data-replace="true">
															<i class="icon-social-youtube icon text-primary"></i>
															<span class="font-bold">Video</span>
														</a>
														<li class="m-b hidden-nav-xs"></li>
													</li>
													<li class="m-b hidden-nav-xs"></li>
												</ul>

												<ul class="nav text-sm">
													<li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
														<span class="pull-right">
															<a href="#">
																<i class="icon-plus i-lg"></i>
															</a>
														</span> Playlist
													</li>
													<li>
														<a href="#">
															<i class="icon-music-tone icon"></i>
															<span>Hip-Hop</span>
														</a>
													</li>
													<li>
														<a href="#">
															<i class="icon-playlist icon text-success-lter"></i>
															<b class="badge bg-success dker pull-right">9</b>
															<span>Jazz</span>
														</a>
													</li>
													<li>
														<a href="#">
															<i class="icon-grid icon"></i>
															<span>Blog</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
										
										<div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 10px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 531px;"></div>
										<div class="slimScrollRail" style="width: 10px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div>
									</div>
								</section>
								<footer class="footer hidden-xs no-padder text-center-nav-xs">
									<div class="bg hidden-xs">
										<div class="dropdown dropup wrapper-sm clearfix">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<span class="thumb-sm avatar pull-left m-l-xs">
													<img src="{{ asset('a3.png') }}" class="dker" alt="...">
													<i class="on b-black"></i>
												</span>
												<span class="hidden-nav-xs clear">
													<span class="block m-l">
														<strong class="font-bold text-lt">{{ Auth::user()->getUsername() }}</strong>
														<b class="caret"></b>
													</span>
													<span class="text-muted text-xs block m-l">Art Director</span>
												</span>
											</a>
											<ul class="dropdown-menu animated fadeInRight">
												<li>
													<span class="arrow bottom hidden-nav-xs"></span>
													<a href="#">Settings</a>
												</li>
												<li>
													<a href="/profile">Profile</a>
												</li>
												<li>
													<a href="#">
														<span class="badge bg-danger pull-right">3</span> Notifications
													</a>
												</li>
												<li class="divider"></li>
												<li>
													<a href="#" data-toggle="ajaxModal">Logout</a>
												</li>
											</ul>
										</div>
									</div>
								</footer>
							</section>
						</aside>

						@yield('content')
					</section>				
				</section>
			</section>
		</div>

		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/music.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/jquery.min.js') }}"></script>
	</body>
</html>
