<div>
    <section id="projets" class="relative py-20 min-h-screen overflow-hidden">
        
        <!-- Image de fond avec overlay -->
        <div class="absolute inset-0 z-0">
            <!-- Image de fond technologique -->
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop" 
                 alt="Background" 
                 class="w-full h-full object-cover">
            
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-blue-900/90 to-purple-900/95"></div>
            
            <!-- Grille animée -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="project-grid" width="60" height="60" patternUnits="userSpaceOnUse">
                            <circle cx="30" cy="30" r="2" fill="white"/>
                            <circle cx="0" cy="0" r="1" fill="white"/>
                            <circle cx="60" cy="60" r="1" fill="white"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#project-grid)"/>
                </svg>
            </div>
        </div>
        
        <!-- Particules flottantes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 opacity-20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-500 opacity-20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-pink-500 opacity-20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
            
            <!-- En-tête avec icône SVG -->
            <div class="text-center mb-16 animate__animated animate__fadeIn">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl mb-6 shadow-2xl transform hover:rotate-12 transition-transform">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">
                    Mes Projets
                </h2>
                
                <!-- Stats avec icônes SVG -->
                <div class="flex flex-wrap justify-center gap-6 text-lg">
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-6 py-3 rounded-full shadow-lg border border-white/20">
                        <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="font-semibold text-white">12+ applications</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-6 py-3 rounded-full shadow-lg border border-white/20">
                        <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="font-semibold text-white">500+ utilisateurs actifs</span>
                    </div>
                </div>
            </div>
            
            <!-- Grille de projets avec effet glassmorphism -->
            <div class="grid md:grid-cols-2 gap-8">
                @foreach($projects as $index => $project)
                <div class="group bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl overflow-hidden hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-3 border border-white/20"
                     x-data="{ show: false }" 
                     x-intersect="show = true"
                     x-show="show"
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 transform translate-y-8"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     style="transition-delay: {{ $index * 100 }}ms;">
                    
                    <!-- Barre de couleur supérieure -->
                    <div class="h-2 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>
                    
                    <div class="p-8">
                        <!-- Icon & Status -->
                        <div class="flex justify-between items-start mb-6">
                            <div class="relative">
                                <div class="text-6xl transform group-hover:scale-110 transition-transform duration-300 drop-shadow-lg">
                                    {{ $project['icon'] }}
                                </div>
                                <!-- Cercle décoratif -->
                                <div class="absolute inset-0 bg-blue-400/30 rounded-full -z-10 transform scale-150 opacity-0 group-hover:opacity-100 transition-opacity blur-xl"></div>
                            </div>
                            
                            <div class="flex flex-col items-end space-y-2">
                                <span class="flex items-center space-x-1 px-3 py-1 bg-green-500/20 backdrop-blur-sm text-green-300 text-xs font-semibold rounded-full shadow-sm border border-green-400/30">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>{{ $project['status'] }}</span>
                                </span>
                            </div>
                        </div>
                        
                        <!-- Title avec icône -->
                        <h3 class="text-2xl font-bold text-white mb-3 flex items-center group-hover:text-blue-300 transition-colors drop-shadow">
                            <svg class="w-6 h-6 mr-2 text-blue-400 opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                            {{ $project['title'] }}
                        </h3>
                        
                        <!-- Description -->
                        <p class="text-white/80 mb-6 leading-relaxed">
                            {{ $project['description'] }}
                        </p>
                        
                        <!-- Users avec icône SVG -->
                        <div class="flex items-center space-x-2 text-blue-300 mb-6 bg-blue-500/20 backdrop-blur-sm px-4 py-3 rounded-xl border border-blue-400/30">
                            <div class="bg-blue-500/30 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="font-bold text-lg text-white">{{ $project['users'] }}</span>
                                <span class="text-sm text-white/70 ml-1">utilisateurs actifs</span>
                            </div>
                        </div>
                        
                        <!-- Technologies avec icônes -->
                        <div class="mb-6">
                            <div class="flex items-center space-x-2 mb-3">
                                <svg class="w-4 h-4 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                                <span class="text-sm font-semibold text-white/60 uppercase tracking-wide">Technologies</span>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project['tech'] as $tech)
                                <span class="flex items-center space-x-1 px-3 py-1 bg-white/10 backdrop-blur-sm text-white text-sm font-medium rounded-full border border-white/20 hover:border-white/40 hover:bg-white/20 transition-all">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>{{ $tech }}</span>
                                </span>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Button avec icône animée -->
                        <button class="group/btn w-full bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white py-4 rounded-xl font-semibold hover:shadow-2xl hover:shadow-purple-500/50 transition-all transform hover:scale-105 flex items-center justify-center space-x-2 relative overflow-hidden">
                            <span class="absolute inset-0 bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 opacity-0 group-hover/btn:opacity-100 transition-opacity"></span>
                            <span class="relative">Voir les détails</span>
                            <svg class="relative w-5 h-5 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Effet de brillance au hover -->
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 group-hover:opacity-10 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-all duration-1000"></div>
                </div>
                @endforeach
            </div>
            
            <!-- CTA avec design moderne glassmorphism -->
            <div class="relative mt-20 text-center">
                <div class="inline-block bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl p-12 border border-white/20 transform hover:scale-105 transition-all">
                    <!-- Icône décorative -->
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl mb-6 shadow-2xl animate-pulse">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    
                    <p class="text-white mb-2 text-2xl font-bold drop-shadow-lg">
                        Vous avez un projet en tête ?
                    </p>
                    <p class="text-white/80 mb-8 text-lg">
                        Transformons vos idées en réalité ensemble
                    </p>
                    
                    <a href="#contact" class="group inline-flex items-center space-x-3 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white px-10 py-5 rounded-full font-bold hover:shadow-2xl hover:shadow-purple-500/50 transform hover:scale-110 transition-all">
                        <svg class="w-6 h-6 transform group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span>Discutons-en !</span>
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Cercles décoratifs -->
                <div class="absolute top-0 left-1/4 w-32 h-32 bg-blue-500 rounded-full mix-blend-screen filter blur-2xl opacity-30 animate-pulse"></div>
                <div class="absolute bottom-0 right-1/4 w-32 h-32 bg-purple-500 rounded-full mix-blend-screen filter blur-2xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
            </div>
        </div>
    </section>

    <!-- Alpine.js (si pas déjà inclus) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Animate.css (si pas déjà inclus) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</div>
