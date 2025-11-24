<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="nblasr - Future Software Engineer & Tech Enthusiast">
    <title>nblasr - Portfolio</title>
    
    {{-- Vite CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body class="bg-[#0f172a] text-gray-100 antialiased">
    
    {{-- Navigation --}}
    @include('components.navigation')
    
    {{-- Main Content --}}
    <main class="pt-16">
        @yield('content')
    </main>
    
    {{-- Footer --}}
    @include('components.footer')
    
</body>
</html>