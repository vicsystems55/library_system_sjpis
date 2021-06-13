<!DOCTYPE html>
<html lang="en-US">

<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Morad">
    <!-- description -->
    <meta name="description" content="">
    <!-- keywords -->
    <meta name="keywords" content="">

	<!-- Stylesheets
	============================================= -->
	<link href="{{config('app.url')}}/landing_page/css/css-assets.css" rel="stylesheet">
	<link href="{{config('app.url')}}/landing_page/css/style.css" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="{{config('app.url')}}/landing_page/images/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="{{config('app.url')}}/landing_page/images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="{{config('app.url')}}/landing_page/images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="{{config('app.url')}}/landing_page/images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Title
	============================================= -->
	<title>MinidigoGlobal</title>

</head>

<body class="homepage">

	<!-- Loading Progress
	============================================= -->


	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		@yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer">
		
			<div id="footer-bar-1" class="footer-bar">
		
				<div class="footer-bar-wrap">
		
					<div class="container">
						<div class="row">
							<div class="col-md-12">
		
								<div class="fb-row">
									<div class="copyrights-message">
										<span>Copyright © 2021</span> <a href="javascript:;" target="_blank">mindigo.co.uk.</a> <span>All Rights Reserved.</span>
									</div><!-- .copyrights-message end -->
							
		
								</div><!-- .fb-row end -->
		
							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->
		
				</div><!-- .footer-bar-wrap -->
		
			</div><!-- #footer-bar-1 end -->
		
		</footer><!-- #footer end -->

	</div><!-- #full-container end -->

	<a class="scroll-top-icon scroll-top" href="javascript:;"><i class="fa fa-angle-up"></i></a>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{config('app.url')}}/landing_page/js/jquery.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/jRespond.min.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/jquery.fitvids.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/jquery.stellar.js"></script>
	<script src="{{config('app.url')}}/landing_page/scss/slick/slick.min.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/jquery.magnific-popup.min.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/jquery.waitforimages.min.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/jquery.waypoints.min.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/simple-scrollbar.min.js"></script>
	<script src="{{config('app.url')}}/landing_page/js/functions.js"></script>

</body>
</html>
