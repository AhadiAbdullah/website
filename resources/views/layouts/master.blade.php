<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>FriendsAndAlliesProject - Foundation</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" media="all" href="{{asset('style.css')}}" />
	<link rel="stylesheet" type="text/css" media="all" href="{{asset('css/fontawesome/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" type="text/css" media="all" href="{{asset('css/flexslider.css')}}" />
	<link rel="stylesheet" type="text/css" media="all" href="{{asset('css/grid.css')}}" />
	<link rel="stylesheet" type="text/css" media="all" href="{{asset('css/meanmenu.css')}} " />
	<link rel="stylesheet" type="text/css" media="all" href="{{asset('css/jquery.modal.min.css')}} " />
</head>
<body class="home blog two-column right-sidebar" data-twttr-rendered="true">
	<div id="page">
	<!-- Toolbar -->
	<div id="toolbar">
			<div class="container_16">
				<div class="grid_16">
				<ul>
					<li class="phone"><a href="tel:+1 554 555 5555" >Tel.: +1 554 555 5555</a></li>
					<li class="contact"><a href="mailto:caroline.clarin@friendsandalliesproject.org"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
					<li class="donate"><a rel="modal:open" href="#popup" id="donate">Donate <i class="fa fa-tint" aria-hidden="true"></i></a></li>
				</ul>
				</div>
			</div>
		</div>
		<!-- /#toolbar -->
		<header id="branding" class="site-header" role="banner">
			<div id="sticky_navigation">
				<div class="container_16">
					<hgroup class="fleft grid_5">
						<h1 id="site-title"><a href="#" title="Charitas - Foundation" rel="home">Friends And Allies Project</a></h1>
						<h2 id="site-description">Non-profit Organization</h2>
					</hgroup>
					<nav role="navigation" class="site-navigation main-navigation grid_11" id="site-navigation">
						<div class="menu-main-menu-container">
							<ul id="menu-main-menu" class="nav-menu">
								<li class="menu-item "><a href="{{url('/')}}">Home</a></li>
								<li class="menu-item "><a href="{{route('about')}}">About Us</a></li>
								<li class="menu-item "><a href="{{route('cause')}}">Our Programs</a></li>
								<li class="menu-item "><a href="{{route('events')}}">Events</a></li>
								<li class="menu-item "><a href="{{route('staff')}}">Our Staff</a></li>
								<li class="menu-item "><a href="{{route('contact')}}">Contacts</a></li>
							</ul>
						</div>
					</nav>
					<!-- .site-navigation .main-navigation -->
					<div class="grid_16 mob-nav"></div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
		@yield('content')
		<!-- model -->
		<!-- Modal HTML embedded directly into document -->
		<div id="popup" class="modal">
		<div class="container">
			<form action="{{route('payment.post')}}" method="post">
				@csrf
				<label for="modal-select">Currency:</label>
					<select name="currency" id="modal-select">
						<option value="usd">USD</option>
						<option value="eur">EUR</option>
						<option value="afn">AFN</option>
					</select>
				<label for="modal-input">Amount:</label>
				<input id="modal-input" type="number" min="1" step="any" name="amount" placeholder="$50">
			
				<input id="modal-btn" type="submit" value="Donate">
			</form>
		</div>
		</div>
		<!-- /model -->
		 <footer id="colophon" class="site-footer" role="contentinfo">
			<div id="tertiary" class="sidebar-container" role="complementary">
				<div class="container_16">
					<!-- First Widget Area -->
					<div class="grid_5">
						<aside id="meta-0" class="widget widget_adress">
							<h3>Contact us</h3>
							<address class="vcard">
								<b>Address</b> -<span class="adr"> Fergus Falls, Minnesota, U.S.A</span><br>
								<b>Phone:</b><span class="tel"> +1 (514)456 7899</span><br />
								<b>E-mail:</b><span class="email"> caroline.clarin@friendsandalliesproject.org</span><br />
								<b>Website:</b><span class="url"> www.friendsandalliesproject.org</span><br />
							</address>
						</aside>
					</div>
					<!-- Second Widget Area -->
					<div class="grid_4">
						<aside id="meta-1" class="widget widget_meta">
							<h3>Latest Events</h3>
							<ul>
								<li><a href="{{route('events')}}">Our Events</a></li>
								
							</ul>
						</aside>						
					</div>
					<!-- Third Widget Area -->
					<div class="grid_3">
						<aside id="meta-2" class="widget widget_meta">
							<h3>Get involved</h3>
							<ul>
								<li><a href="{{route('contact')}}" title="Contact Us">Contact Us</a></li>
							</ul>
						</aside>
					</div>
					<!-- Forth Widget Area -->
					<div class="grid_4">
						<aside id="meta-3" class="widget widget_meta">
							<h3>Latest Tweets</h3>
							<div class="latest-tweets-body">
								<a href="#">@caroline</a> Thanks! We're always make things around here :)
							</div>
							<div class="clear"></div>
							<div><a href="#" class="radius follow">Follow @caroline</a></div>
						</aside>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<!-- Site Info -->
			<div class="site-info">
				<div class="container_16">
					<!-- CopyRight -->
					<div class="grid_8">
						<p class="copy">Copyright ©  <?php echo date('Y');?>.  All Rights reserved.  </p>
					</div>
					<!-- Design By -->
					<div class="grid_8">
						<p class="designby">Developed by <a href="mailto:abdullah.ahadi78@gmail.com">Abdullah</a></p>
					</div>
					<div class="clear"></div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->

	<!-- Scripts -->
	<script type='text/javascript' src= "{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/base.js')}}"></script>
	<!-- Scripts for plugins -->
	<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
	<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
	<script src="{{asset('js/jquery.scrollParallax.min.js')}}"></script>

	<script src="https://js.stripe.com/v3/"></script>
	<!-- jQuery Modal -->
	<script type='text/javascript' src= "{{asset('js/jquery.modal.min.js')}}"></script>
<script>
 $(document).ready(function() {
	 $("#modal-btn").click(function(e){
		 var amount = $("#modal-input").val()
		 var currency = $("#modal-select").val()
		 if(!amount){
			 e.preventDefault();
			$("#modal-input").css('border-color', 'red');
		}else if(currency === 'afn' && amount < 100) {
			$("#modal-input").after('<p class="AFNmsg">Please enter at least 100 AFN</p>')
			 return false;
		}else {
			$('.AFNmsg').hide();
			return true;
		}
	})
	$('#modal-select').on('change', function(e) {
		$("#modal-input").val('');
		$('.AFNmsg').hide();
		if(e.target.value === 'afn'){
			$("#modal-input").attr("placeholder", "Please enter at least 100 AFN");
		}else {
			$("#modal-input").attr("placeholder", "$50");
		}
	})
})
</script>
</body>
</html>