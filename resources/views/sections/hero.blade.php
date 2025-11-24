<section id="home" class="min-h-screen flex items-center justify-center px-6 relative overflow-hidden bg-[#0f172a]">
    {{-- Animated Background Glows --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute w-[700px] h-[700px] bg-cyan-500/10 rounded-full blur-3xl -top-48 -left-48 animate-pulse"></div>
        <div class="absolute w-[700px] h-[700px] bg-cyan-500/10 rounded-full blur-3xl -bottom-48 -right-48 animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="max-w-6xl mx-auto text-center relative z-10">
        {{-- Welcome Badge --}}
        <div class="inline-block mb-8">
            <span class="px-6 py-2.5 bg-cyan-400/10 border border-cyan-400/30 rounded-full text-cyan-400 text-base font-semibold tracking-wide">
                Welcome to my portfolio
            </span>
        </div>
        
        {{-- Main Heading (DATA DARI CONTROLLER) --}}
        <h1 class="text-6xl sm:text-7xl lg:text-8xl font-extrabold mb-8 leading-tight">
            Hi there! I'm <span class="text-cyan-400">{{ $name }}</span>
        </h1>
        
        {{-- Subtitle (DATA DARI CONTROLLER) --}}
        <p class="text-2xl sm:text-3xl lg:text-4xl text-gray-400 mb-10 font-light">
            {{ $title }}
        </p>
        
        {{-- Description (DATA DARI CONTROLLER) --}}
        <p class="text-xl sm:text-2xl text-gray-300 max-w-4xl mx-auto mb-14 leading-relaxed">
            {{ $description }}
        </p>
        
        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mb-16">
            <a href="#projects" class="px-10 py-5 bg-cyan-400 text-gray-900 rounded-xl font-bold text-xl hover:bg-cyan-500 hover:shadow-2xl hover:shadow-cyan-400/50 transition-all duration-300 transform hover:scale-105 cursor-pointer">
                View My Work
            </a>
            <a href="#contact" class="px-10 py-5 bg-transparent text-gray-100 rounded-xl font-bold text-xl hover:bg-gray-800 hover:shadow-xl transition-all duration-300 transform hover:scale-105 border-2 border-gray-700 hover:border-cyan-400 cursor-pointer">
                Get In Touch
            </a>
        </div>
        
        {{-- Social Icons (DATA DARI CONTROLLER) --}}
        <div class="flex items-center justify-center gap-8">
            <a href="{{ $social['github'] }}" target="_blank" class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center hover:bg-cyan-400 hover:text-gray-900 hover:shadow-xl hover:shadow-cyan-400/50 transition-all duration-300 transform hover:scale-110 cursor-pointer">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
            </a>
            <a href="{{ $social['linkedin'] }}" target="_blank" class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center hover:bg-cyan-400 hover:text-gray-900 hover:shadow-xl hover:shadow-cyan-400/50 transition-all duration-300 transform hover:scale-110 cursor-pointer">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
            </a>
            <a href="mailto:{{ $social['email'] }}" class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center hover:bg-cyan-400 hover:text-gray-900 hover:shadow-xl hover:shadow-cyan-400/50 transition-all duration-300 transform hover:scale-110 cursor-pointer">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </a>
        </div>
    </div>
</section>