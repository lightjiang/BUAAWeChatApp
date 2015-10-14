<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>北航微教务 - by Pride 1952 @ BUAA</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.lug.ustc.edu.cn/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="/css/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="/css/jqm-demos.css">
	<script src="/js/jquery.js"></script>
	<script src="/js/index.js"></script>
	<script src="/js/jquery.mobile-1.4.5.min.js"></script>
	<script>
		$(function() {
			$( "[data-role='navbar']" ).navbar();
			$( "[data-role='header'], [data-role='footer']" ).toolbar();
		});
		// Update the contents of the toolbars
		$( document ).on( "pagecontainerchange", function() {
			// Each of the four pages in this demo has a data-title attribute
			// which value is equal to the text of the nav button
			// For example, on first page: <div data-role="page" data-title="Info">
			var current = $( ".ui-page-active" ).jqmData( "title" );
			// Change the heading
			$( "[data-role='header'] h1" ).text( current );
			// Remove active class from nav buttons
			$( "[data-role='navbar'] a.ui-btn-active" ).removeClass( "ui-btn-active" );
			// Add active class to current nav button
			$( "[data-role='navbar'] a" ).each(function() {
				if ( $( this ).text() === current ) {
					$( this ).addClass( "ui-btn-active" );
				}
			});
		});
	</script>
</head>
<body>
    <div data-role="header" data-position="fixed" data-theme="a">
		<!--<a href="../toolbar/" data-rel="back" class="ui-btn ui-btn-left ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-l">Back</a>-->
        <h1>title</h1>
    </div><!-- /header -->