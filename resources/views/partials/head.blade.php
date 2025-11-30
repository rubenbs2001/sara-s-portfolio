@php
    $metatag = [
        'title' => 'Sara Velázquez | Portfolio',
        'description' => 'Welcome to the portfolio of Sara Velázquez, showcasing my projects and skills in web development and design.',
        'keywords' => 'Sara Velázquez, portfolio, web development, web design, projects, skills'
    ]
@endphp

<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=5">
<meta name="author" content="Sara Velázquez">

<meta name="title" content="{{ $metatag['title'] }}">
<meta name="description" content="{{ $metatag['description'] }}">
<meta name="keywords" content="{{ $metatag['keywords'] }}">

<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="article">
<meta property="og:title" content="{{ $metatag['title'] }}">
<meta property="og:description" content="{{ $metatag['description'] }}">
<meta property="og:site_name" content="Sara Velázquez">
<meta property="og:image" content="">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@your_twitter_handle">
<meta name="twitter:title" content="{{ $metatag['title'] }}">
<meta name="twitter:description" content="{{ $metatag['description'] }}">
<meta name="twitter:image" content="">

<link rel="icon" href="" sizes="any">

<link rel="preconnect" href="https://fonts.gstatic.com">

@vite(["resources/css/app.css", 'resources/js/app.js'])

