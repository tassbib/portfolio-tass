<nav class="bg-gray-900 sticky top-0 z-50 shadow-2xl backdrop-blur-lg bg-opacity-95" x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = window.pageYOffset > 50"
     :class="{ 'shadow-xl bg-opacity-100': scrolled }">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo avec SVG animé -->
            <div class="flex-shrink-0">
                <a href="#accueil" class="flex items-center space-x-2 group">
                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 p-2 rounded-lg transform group-hover:rotate-12 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <span class="text-white text-2xl font-bold group-hover:text-blue-400 transition-colors">
                        TASS
                    </span>
                </a>
            </div>
            
            <!-- Menu Desktop avec icônes SVG -->
            <div class="hidden md:flex items-center space-x-1">
                <!-- Accueil -->
                <a href="#accueil" class="group flex items-center space-x-1 text-white hover:text-blue-400 transition-all px-3 py-2 rounded-lg hover:bg-gray-800 text-sm font-medium">
                    <svg class="w-4 h-4 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span>Accueil</span>
                </a>
                
                <!-- À propos -->
                <a href="#apropos" class="group flex items-center space-x-1 text-white hover:text-blue-400 transition-all px-3 py-2 rounded-lg hover:bg-gray-800 text-sm font-medium">
                    <svg class="w-4 h-4 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>À propos</span>
                </a>
                
                <!-- Compétences -->
                <a href="#competences" class="group flex items-center space-x-1 text-white hover:text-blue-400 transition-all px-3 py-2 rounded-lg hover:bg-gray-800 text-sm font-medium">
                    <svg class="w-4 h-4 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <span>Compétences</span>
                </a>
                
                <!-- Projets -->
                <a href="#projets" class="group flex items-center space-x-1 text-white hover:text-blue-400 transition-all px-3 py-2 rounded-lg hover:bg-gray-800 text-sm font-medium">
                    <svg class="w-4 h-4 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    <span>Projets</span>
                </a>
                
                <!-- Contact -->
                <a href="#contact" class="group flex items-center space-x-1 text-white hover:text-blue-400 transition-all px-3 py-2 rounded-lg hover:bg-gray-800 text-sm font-medium">
                    <svg class="w-4 h-4 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>Contact</span>
                </a>
                
                <!-- Séparateur -->
                <div class="h-6 w-px bg-gray-700 mx-2"></div>
                
                <!-- Bouton Dashboard/Connexion -->
                @auth
                <a href="{{ route('dashboard') }}" class="group flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-blue-700 hover:to-purple-700 transition-all transform hover:scale-105 shadow-lg">
                    <svg class="w-4 h-4 transform group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span>Dashboard</span>
                </a>
                @else
                <a href="{{ route('login') }}" class="group flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-blue-700 hover:to-purple-700 transition-all transform hover:scale-105 shadow-lg">
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    <span>Connexion</span>
                </a>
                @endauth
            </div>
            
            <!-- Bouton Menu Mobile avec animation -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-white hover:text-blue-400 focus:outline-none p-2 rounded-lg hover:bg-gray-800 transition-all">
                    <svg class="h-6 w-6 transition-transform duration-300" :class="{ 'rotate-90': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Menu Mobile avec animations et icônes -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="md:hidden bg-gray-800 border-t border-gray-700 shadow-xl">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Accueil Mobile -->
            <a href="#accueil" @click="open = false" class="group flex items-center space-x-3 text-white hover:bg-gray-700 hover:text-blue-400 px-3 py-3 rounded-lg transition-all">
                <svg class="w-5 h-5 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="font-medium">Accueil</span>
            </a>
            
            <!-- À propos Mobile -->
            <a href="#apropos" @click="open = false" class="group flex items-center space-x-3 text-white hover:bg-gray-700 hover:text-blue-400 px-3 py-3 rounded-lg transition-all">
                <svg class="w-5 h-5 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span class="font-medium">À propos</span>
            </a>
            
            <!-- Compétences Mobile -->
            <a href="#competences" @click="open = false" class="group flex items-center space-x-3 text-white hover:bg-gray-700 hover:text-blue-400 px-3 py-3 rounded-lg transition-all">
                <svg class="w-5 h-5 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                </svg>
                <span class="font-medium">Compétences</span>
            </a>
            
            <!-- Projets Mobile -->
            <a href="#projets" @click="open = false" class="group flex items-center space-x-3 text-white hover:bg-gray-700 hover:text-blue-400 px-3 py-3 rounded-lg transition-all">
                <svg class="w-5 h-5 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
                <span class="font-medium">Projets</span>
            </a>
            
            <!-- Contact Mobile -->
            <a href="#contact" @click="open = false" class="group flex items-center space-x-3 text-white hover:bg-gray-700 hover:text-blue-400 px-3 py-3 rounded-lg transition-all">
                <svg class="w-5 h-5 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span class="font-medium">Contact</span>
            </a>
            
            <!-- Divider -->
            <div class="h-px bg-gray-700 my-2"></div>
            
            <!-- Dashboard/Connexion Mobile -->
            @auth
            <a href="{{ route('dashboard') }}" class="group flex items-center space-x-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white hover:from-blue-700 hover:to-purple-700 px-3 py-3 rounded-lg transition-all font-medium">
                <svg class="w-5 h-5 transform group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                </svg>
                <span>Dashboard</span>
            </a>
            @else
            <a href="{{ route('login') }}" class="group flex items-center space-x-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white hover:from-blue-700 hover:to-purple-700 px-3 py-3 rounded-lg transition-all font-medium">
                <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                </svg>
                <span>Connexion</span>
            </a>
            @endauth
        </div>
    </div>
</nav>

<!-- Alpine.js (si pas déjà inclus) -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
