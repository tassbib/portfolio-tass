<div>
    <section id="accueil" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        
        <!-- Background animé avec gradient -->
        <div class="absolute inset-0 gradient-animate bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-800"></div>
        
        <!-- Motif géométrique SVG en arrière-plan -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <circle cx="20" cy="20" r="1" fill="white" opacity="0.5"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)"/>
            </svg>
        </div>
        
        <!-- Particules animées -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 left-20 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute top-40 right-20 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-40 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 4s;"></div>
        </div>
        
        <!-- Icônes flottantes SVG -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Code Icon -->
            <div class="absolute top-1/4 left-10 animate-float" style="animation-delay: 0s;">
                <svg class="w-16 h-16 text-white opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                </svg>
            </div>
            
            <!-- Database Icon -->
            <div class="absolute top-1/3 right-20 animate-float" style="animation-delay: 1s;">
                <svg class="w-12 h-12 text-white opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                </svg>
            </div>
            
            <!-- Server Icon -->
            <div class="absolute bottom-1/4 right-10 animate-float" style="animation-delay: 2s;">
                <svg class="w-14 h-14 text-white opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                </svg>
            </div>
            
            <!-- Lightning Icon -->
            <div class="absolute top-1/2 left-20 animate-float" style="animation-delay: 3s;">
                <svg class="w-10 h-10 text-white opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
        </div>
        
        <!-- Contenu principal -->
        <div class="relative z-10 text-center px-4 animate__animated animate__fadeIn">
            
            <!-- Photo de profil avec badge -->
            <div class="mb-8 relative inline-block float-animation">
                <div class="relative">
                    <img src="https://ui-avatars.com/api/?name=Tassou+Yerima&size=200&background=3498db&color=fff&bold=true" 
                         alt="TASSOU YERIMA MAMA" 
                         class="w-48 h-48 rounded-full border-8 border-white shadow-2xl hover:scale-110 transition-transform duration-300">
                    
                    <!-- Badge "Disponible" avec SVG -->
                    <div class="absolute bottom-2 right-2 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center shadow-lg animate-pulse">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Disponible
                    </div>
                </div>
                
                <!-- Cercle décoratif animé -->
                <div class="absolute inset-0 -z-10">
                    <div class="w-full h-full rounded-full border-4 border-white opacity-30 animate-ping"></div>
                </div>
            </div>
            
            <!-- Titre avec effet de frappe -->
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-4 animate__animated animate__fadeInDown">
                TASSOU YERIMA MAMA
            </h1>
            
            <!-- Sous-titre animé avec icône -->
            <div class="text-2xl md:text-3xl text-blue-200 mb-8 animate__animated animate__fadeInUp">
                <div class="flex items-center justify-center space-x-3">
                    <svg class="w-8 h-8 text-yellow-400 animate-spin-slow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                    <span x-data="{ 
                        titles: ['Développeur Laravel', 'Expert Livewire', 'Créateur d\'APIs', 'Passionné de Code'],
                        currentIndex: 0,
                        currentTitle: 'Développeur Laravel'
                    }" x-init="setInterval(() => { currentIndex = (currentIndex + 1) % titles.length; currentTitle = titles[currentIndex]; }, 3000)">
                        <span x-text="currentTitle" class="font-semibold"></span>
                        <span class="animate-pulse text-white">|</span>
                    </span>
                    <svg class="w-8 h-8 text-yellow-400 animate-spin-slow" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="animation-delay: 1.5s;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
            </div>
            
            <!-- Stats avec icônes SVG -->
            <div class="flex flex-wrap justify-center gap-6 mb-8 animate__animated animate__fadeIn animate__delay-1s">
                <!-- Applications développées -->
                <div class="bg-white bg-opacity-20 backdrop-blur-lg rounded-2xl px-6 py-4 flex items-center space-x-3 hover:bg-opacity-30 transition-all transform hover:scale-105">
                    <div class="bg-white bg-opacity-30 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div class="text-left">
                        <p class="text-3xl font-bold text-white">12+</p>
                        <p class="text-sm text-blue-100">Applications</p>
                    </div>
                </div>
                
                <!-- Utilisateurs actifs -->
                <div class="bg-white bg-opacity-20 backdrop-blur-lg rounded-2xl px-6 py-4 flex items-center space-x-3 hover:bg-opacity-30 transition-all transform hover:scale-105">
                    <div class="bg-white bg-opacity-30 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="text-left">
                        <p class="text-3xl font-bold text-white">500+</p>
                        <p class="text-sm text-blue-100">Utilisateurs</p>
                    </div>
                </div>
                
                <!-- Années d'expérience -->
                <div class="bg-white bg-opacity-20 backdrop-blur-lg rounded-2xl px-6 py-4 flex items-center space-x-3 hover:bg-opacity-30 transition-all transform hover:scale-105">
                    <div class="bg-white bg-opacity-30 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <div class="text-left">
                        <p class="text-3xl font-bold text-white">3+</p>
                        <p class="text-sm text-blue-100">Années</p>
                    </div>
                </div>
            </div>
            
            <!-- Technologies avec badges -->
            <div class="flex flex-wrap justify-center gap-3 mb-8 animate__animated animate__fadeIn animate__delay-1s">
                <span class="bg-white bg-opacity-20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold flex items-center space-x-2 hover:bg-opacity-30 transition-all">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/>
                    </svg>
                    <span>PHP/Laravel</span>
                </span>
                <span class="bg-white bg-opacity-20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold flex items-center space-x-2 hover:bg-opacity-30 transition-all">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                    <span>Livewire</span>
                </span>
                <span class="bg-white bg-opacity-20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold flex items-center space-x-2 hover:bg-opacity-30 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>APIs REST</span>
                </span>
                <span class="bg-white bg-opacity-20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold flex items-center space-x-2 hover:bg-opacity-30 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                    </svg>
                    <span>MySQL</span>
                </span>
            </div>
            
            <!-- Boutons CTA avec icônes SVG -->
            <div class="flex flex-wrap justify-center gap-4 animate__animated animate__fadeInUp animate__delay-2s">
                <a href="#projets" class="group bg-white text-blue-600 px-8 py-4 rounded-full font-bold hover:bg-blue-100 transform hover:scale-105 transition-all shadow-lg flex items-center space-x-2">
                    <svg class="w-5 h-5 transform group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    <span>Voir mes projets</span>
                </a>
                <a href="#contact" class="group bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-blue-600 transform hover:scale-105 transition-all flex items-center space-x-2">
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>Me contacter</span>
                </a>
            </div>
            
            <!-- Scroll indicator avec SVG animé -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#apropos" class="flex flex-col items-center text-white group">
                    <span class="text-sm mb-2 opacity-75 group-hover:opacity-100 transition-opacity">Défiler vers le bas</span>
                    <svg class="w-8 h-8 group-hover:text-blue-200 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Styles personnalisés -->
    <style>
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }
        
        .gradient-animate {
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</div>
