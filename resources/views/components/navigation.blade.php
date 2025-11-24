{{-- Navigation Bar --}}
<nav class="fixed top-0 left-0 right-0 z-50 bg-[#0f172a]/95 backdrop-blur-lg border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="text-2xl font-bold text-cyan-400 hover:text-cyan-300 transition-colors cursor-pointer">
                nblasr
            </a>
            
            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center space-x-8 text-base">
                <a href="#home" class="text-gray-300 hover:text-cyan-400 transition-colors font-medium cursor-pointer">Home</a>
                <a href="#about" class="text-gray-300 hover:text-cyan-400 transition-colors font-medium cursor-pointer">About</a>
                <a href="#skills" class="text-gray-300 hover:text-cyan-400 transition-colors font-medium cursor-pointer">Skills</a>
                <a href="#projects" class="text-gray-300 hover:text-cyan-400 transition-colors font-medium cursor-pointer">Projects</a>
                <a href="#contact" class="text-gray-300 hover:text-cyan-400 transition-colors font-medium cursor-pointer">Contact</a>
                <a href="#contact" class="bg-cyan-400 text-gray-900 px-6 py-2.5 rounded-lg font-semibold hover:bg-cyan-500 hover:shadow-lg hover:shadow-cyan-400/50 transition-all cursor-pointer">
                    Hire Me
                </a>
            </div>
            
            {{-- Mobile Menu Button --}}
            <button class="md:hidden text-gray-300 hover:text-cyan-400 transition-colors cursor-pointer" id="mobile-menu-button">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
    
    {{-- Mobile Menu --}}
    <div class="hidden md:hidden border-t border-gray-800" id="mobile-menu">
        <div class="px-4 py-4 space-y-3 bg-[#0f172a]">
            <a href="#home" class="block px-4 py-2.5 text-gray-300 hover:text-cyan-400 hover:bg-gray-800 rounded-lg transition-colors font-medium cursor-pointer">Home</a>
            <a href="#about" class="block px-4 py-2.5 text-gray-300 hover:text-cyan-400 hover:bg-gray-800 rounded-lg transition-colors font-medium cursor-pointer">About</a>
            <a href="#skills" class="block px-4 py-2.5 text-gray-300 hover:text-cyan-400 hover:bg-gray-800 rounded-lg transition-colors font-medium cursor-pointer">Skills</a>
            <a href="#projects" class="block px-4 py-2.5 text-gray-300 hover:text-cyan-400 hover:bg-gray-800 rounded-lg transition-colors font-medium cursor-pointer">Projects</a>
            <a href="#contact" class="block px-4 py-2.5 text-gray-300 hover:text-cyan-400 hover:bg-gray-800 rounded-lg transition-colors font-medium cursor-pointer">Contact</a>
        </div>
    </div>
</nav>