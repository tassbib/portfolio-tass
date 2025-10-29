<div>
    <section id="competences" class="relative py-20 bg-gradient-to-br from-white via-gray-50 to-blue-50 overflow-hidden">
    
    <!-- Background décoratif avec SVG -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="skills-grid" width="80" height="80" patternUnits="userSpaceOnUse">
                    <path d="M 80 0 L 0 0 0 80" fill="none" stroke="currentColor" stroke-width="1" class="text-blue-600"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#skills-grid)"/>
        </svg>
    </div>
    
    <!-- Formes décoratives flottantes -->
    <div class="absolute top-10 right-10 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
    <div class="absolute bottom-10 left-10 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- En-tête avec icône SVG -->
        <div class="text-center mb-16 animate__animated animate__fadeIn">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl mb-6 shadow-xl transform hover:rotate-12 transition-transform">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                </svg>
            </div>
            
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Mes Compétences
            </h2>
            <p class="text-gray-600 text-lg">
                Expertise technique et maîtrise des technologies modernes
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            
            <!-- Backend -->
            <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100 transform hover:scale-105 transition-all duration-300" 
                 x-data="{ show: false }" 
                 x-intersect="show = true">
                
                <!-- En-tête Backend avec SVG -->
                <div class="flex items-center space-x-4 mb-8">
                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 p-4 rounded-xl shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Backend</h3>
                </div>
                
                <div class="space-y-6">
                    <!-- PHP/Laravel -->
                    <div class="group">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                                <span class="font-semibold text-gray-700">PHP/Laravel</span>
                            </div>
                            <span class="text-blue-600 font-bold">95%</span>
                        </div>
                        <div class="relative w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 h-3 rounded-full transition-all duration-2000 ease-out shadow-lg"
                                 :style="show ? 'width: 95%' : 'width: 0%'">
                                <div class="absolute inset-0 bg-white opacity-20 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Livewire -->
                    <div class="group">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <span class="font-semibold text-gray-700">Livewire</span>
                            </div>
                            <span class="text-purple-600 font-bold">90%</span>
                        </div>
                        <div class="relative w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-purple-600 h-3 rounded-full transition-all duration-2000 ease-out shadow-lg"
                                 :style="show ? 'width: 90%' : 'width: 0%'">
                                <div class="absolute inset-0 bg-white opacity-20 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- MySQL -->
                    <div class="group">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                                </svg>
                                <span class="font-semibold text-gray-700">MySQL/PostgreSQL</span>
                            </div>
                            <span class="text-green-600 font-bold">85%</span>
                        </div>
                        <div class="relative w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-green-600 h-3 rounded-full transition-all duration-2000 ease-out shadow-lg"
                                 :style="show ? 'width: 85%' : 'width: 0%'">
                                <div class="absolute inset-0 bg-white opacity-20 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- APIs REST -->
                    <div class="group">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                </svg>
                                <span class="font-semibold text-gray-700">APIs REST/JWT</span>
                            </div>
                            <span class="text-indigo-600 font-bold">88%</span>
                        </div>
                        <div class="relative w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-indigo-400 to-indigo-600 h-3 rounded-full transition-all duration-2000 ease-out shadow-lg"
                                 :style="show ? 'width: 88%' : 'width: 0%'">
                                <div class="absolute inset-0 bg-white opacity-20 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Frontend -->
            <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100 transform hover:scale-105 transition-all duration-300" 
                 x-data="{ show: false }" 
                 x-intersect="show = true">
                
                <!-- En-tête Frontend avec SVG -->
                <div class="flex items-center space-x-4 mb-8">
                    <div class="bg-gradient-to-br from-pink-500 to-orange-600 p-4 rounded-xl shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Frontend</h3>
                </div>
                
                <div class="space-y-6">
                    <!-- HTML/CSS -->
                    <div class="group">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                                </svg>
                                <span class="font-semibold text-gray-700">HTML/CSS</span>
                            </div>
                            <span class="text-orange-600 font-bold">92%</span>
                        </div>
                        <div class="relative w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-orange-600 h-3 rounded-full transition-all duration-2000 ease-out shadow-lg"
                                 :style="show ? 'width: 92%' : 'width: 0%'">
                                <div class="absolute inset-0 bg-white opacity-20 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tailwind CSS -->
                    <div class="group">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-cyan-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                                <span class="font-semibold text-gray-700">Tailwind CSS</span>
                            </div>
                            <span class="text-cyan-600 font-bold">90%</span>
                        </div>
                        <div class="relative w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-cyan-600 h-3 rounded-full transition-all duration-2000 ease-out shadow-lg"
                                 :style="show ? 'width: 90%' : 'width: 0%'">
                                <div class="absolute inset-0 bg-white opacity-20 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Alpine.js -->
                    <div class="group">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 19.5h20L12 2z"/>
                                </svg>
                                <span class="font-semibold text-gray-700">Alpine.js</span>
                            </div>
                            <span class="text-teal-600 font-bold">85%</span>
                        </div>
                        <div class="relative w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-teal-400 to-teal-600 h-3 rounded-full transition-all duration-2000 ease-out shadow-lg"
                                 :style="show ? 'width: 85%' : 'width: 0%'">
                                <div class="absolute inset-0 bg-white opacity-20 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- JavaScript -->
                    <div class="group">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 3h18a1 1 0 011 1v16a1 1 0 01-1 1H3a1 1 0 01-1-1V4a1 1 0 011-1zm9 12v-2h2v2h2v2h-2v2h-2v-2H8v-2h4z"/>
                                </svg>
                                <span class="font-semibold text-gray-700">JavaScript</span>
                            </div>
                            <span class="text-yellow-600 font-bold">80%</span>
                        </div>
                        <div class="relative w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 h-3 rounded-full transition-all duration-2000 ease-out shadow-lg"
                                 :style="show ? 'width: 80%' : 'width: 0%'">
                                <div class="absolute inset-0 bg-white opacity-20 animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Technologies & Outils -->
        <div class="mt-16 bg-white rounded-3xl shadow-xl p-12 border border-gray-100">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-500 to-blue-600 rounded-2xl mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800">Technologies & Outils</h3>
                <p class="text-gray-600 mt-2">Stack technique moderne et performante</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-3">
                <!-- Laravel -->
                <span class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 text-blue-800 rounded-full font-semibold hover:scale-110 hover:shadow-lg transition-all border border-blue-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                    </svg>
                    <span>Laravel</span>
                </span>
                
                <!-- Livewire -->
                <span class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-purple-50 to-purple-100 text-purple-800 rounded-full font-semibold hover:scale-110 hover:shadow-lg transition-all border border-purple-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span>Livewire</span>
                </span>
                
                <!-- Tailwind CSS -->
                <span class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-cyan-50 to-cyan-100 text-cyan-800 rounded-full font-semibold hover:scale-110 hover:shadow-lg transition-all border border-cyan-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                    </svg>
                    <span>Tailwind CSS</span>
                </span>
                
                <!-- MySQL -->
                <span class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-green-50 to-green-100 text-green-800 rounded-full font-semibold hover:scale-110 hover:shadow-lg transition-all border border-green-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7"/>
                    </svg>
                    <span>MySQL</span>
                </span>
                
                <!-- PostgreSQL -->
                <span class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-indigo-50 to-indigo-100 text-indigo-800 rounded-full font-semibold hover:scale-110 hover:shadow-lg transition-all border border-indigo-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7"/>
                    </svg>
                    <span>PostgreSQL</span>
                </span>
                
                <!-- Git -->
                <span class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-red-50 to-red-100 text-red-800 rounded-full font-semibold hover:scale-110 hover:shadow-lg transition-all border border-red-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21.62 11.108l-8.731-8.729a1.292 1.292 0 00-1.823 0L9.257 4.19l2.299 2.3a1.532 1.532 0 011.939 1.95l2.214 2.217a1.53 1.53 0 011.583 2.531c-.599.6-1.566.6-2.166 0a1.536 1.536 0 01-.337-1.662l-2.074-2.063V14.9c.146.071.286.169.407.29a1.537 1.537 0 010 2.166 1.536 1.536 0 01-2.174 0 1.528 1.528 0 010-2.164c.152-.15.322-.264.504-.339v-5.49a1.529 1.529 0 01-.83-2.008l-2.26-2.271-5.987 5.982c-.5.504-.5 1.32 0 1.824l8.731 8.729a1.286 1.286 0 001.821 0l8.69-8.689a1.284 1.284 0 000-1.821"/>
                    </svg>
                    <span>Git</span>
                </span>
                
                <!-- APIs REST -->
                <span class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-orange-50 to-orange-100 text-orange-800 rounded-full font-semibold hover:scale-110 hover:shadow-lg transition-all border border-orange-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316"/>
                    </svg>
                    <span>APIs REST</span>
                </span>
                
                <!-- JWT -->
                <span class="group flex items-center space-x-2 px-6 py-3 bg-gradient-to-r from-pink-50 to-pink-100 text-pink-800 rounded-full font-semibold hover:scale-110 hover:shadow-lg transition-all border border-pink-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    <span>JWT</span>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Alpine.js (si pas déjà inclus) -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Animate.css (si pas déjà inclus) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</div>