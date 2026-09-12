<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Encoding" content="IE=edge">
    
    <!-- Primary Meta Tags -->
    <title>{{ $personal['name'] }} — Portofolio {{ $personal['title'] }}</title>
    <meta name="title" content="{{ $personal['name'] }} — Portofolio Professional">
    <meta name="description" content="{{ $personal['bio_summary'] }}">
    <meta name="keywords" content="Reyhan Rainaldy, UI UX Designer, Data Analyst, Front End Developer, Surabaya, UNESA, Portofolio Laravel, Katalon QA">
    <meta name="author" content="Reyhan Rainaldy">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $personal['name'] }} — Portofolio Professional">
    <meta property="og:description" content="{{ $personal['bio_summary'] }}">
    <meta property="og:image" content="{{ asset($personal['avatar']) }}">

    <!-- Google Fonts: Outfit, Syne, Plus Jakarta Sans, & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0A0E1A] text-slate-100 antialiased selection:bg-cyan-500 selection:text-black relative min-h-screen">

    <!-- Custom Glowing Cursor -->
    <div id="custom-cursor" class="custom-cursor hidden md:block"></div>

    <!-- Preloader -->
    @include('components.preloader')

    <!-- Fixed Navbar -->
    @include('components.navbar')

    <!-- Main Content Sections -->
    <main class="overflow-x-hidden">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

</body>
</html>
