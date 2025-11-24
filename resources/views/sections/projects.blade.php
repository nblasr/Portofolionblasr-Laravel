<section id="projects" class="py-20 px-6 bg-gradient-to-b from-[#1e293b] to-[#0f172a]">
    <div class="max-w-7xl mx-auto">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Featured <span class="text-cyan-400">Projects</span>
            </h2>
            <p class="text-gray-400 text-lg sm:text-xl">
                Here are some of my recent works that highlight my technical skills, creativity, and passion for software development.
            </p>
        </div>
        
        {{-- Projects Grid (DYNAMIC dengan LOOP) --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            @foreach($projects as $project)
            <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-2xl overflow-hidden hover:border-cyan-400 hover:shadow-2xl hover:shadow-cyan-400/20 transition-all duration-300 group">
                <div class="p-8">
                    {{-- Project Title (dari controller) --}}
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-cyan-400 transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    
                    {{-- Project Description (dari controller) --}}
                    <p class="text-gray-400 text-lg mb-6 leading-relaxed">
                        {{ $project['description'] }}
                    </p>
                    
                    {{-- Tech Stack (LOOP dari array) --}}
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($project['tech_stack'] as $tech)
                        <span class="px-4 py-2 bg-cyan-400/10 border border-cyan-400/30 rounded-full text-cyan-400 text-sm font-semibold hover:bg-cyan-400/20 transition-colors cursor-pointer">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                    
                    {{-- GitHub Link (dari controller) --}}
                    <a href="{{ $project['github_url'] }}" target="_blank" class="inline-flex items-center space-x-2 px-6 py-3 bg-gray-900 border border-gray-700 rounded-xl hover:border-cyan-400 hover:text-cyan-400 hover:shadow-lg hover:shadow-cyan-400/30 transition-all transform hover:scale-105 cursor-pointer">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        <span class="font-semibold">View Code on GitHub</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        {{-- View All Projects Button --}}
        <div class="flex justify-center mt-12">
            <a href="{{ $social['github'] }}?tab=repositories" target="_blank" class="group inline-flex items-center space-x-3 px-8 py-4 bg-gradient-to-r from-cyan-400 to-cyan-500 text-gray-900 rounded-xl font-bold text-lg hover:from-cyan-500 hover:to-cyan-600 hover:shadow-2xl hover:shadow-cyan-400/50 transition-all transform hover:scale-105 cursor-pointer">
                <span>View All Projects</span>
                <svg class="w-6 h-6 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>