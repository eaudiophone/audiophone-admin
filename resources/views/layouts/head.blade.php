<!DOCTYPE html>
<html>
	<head lang="{{ app() -> getLocale() }}">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Audiophone - @yield( 'title' )</title>
		<link rel="stylesheet" href="{{ asset( config( 'assets.BOOTSTRAP_CSS' ) ) }}">
		<link rel="stylesheet" href="{{ asset( config( 'assets.FONTAWESOME' ) ) }}">
		<link rel="shorcut icon" type="image/png" href="{{asset( config( 'assets.LOGO' ) )}}">
	</head>
	<body>
		