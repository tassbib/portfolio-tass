<div>
    <section id="contact" class="relative py-20 min-h-screen overflow-hidden">
        
        <!-- Image de fond avec overlay -->
        <div class="absolute inset-0 z-0">
            <!-- Image de fond (vous pouvez changer l'URL) -->
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop" 
                 alt="Background" 
                 class="w-full h-full object-cover">
            
            <!-- Overlay gradient animé -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/95 via-purple-900/90 to-indigo-900/95 backdrop-blur-sm"></div>
            
            <!-- Motif de grille animé -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>
        </div>
        
        <!-- Particules flottantes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 opacity-20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-500 opacity-20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-pink-500 opacity-20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Header avec SVG -->
            <div class="text-center mb-12 animate__animated animate__fadeInDown">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full mb-6 backdrop-blur-sm shadow-2xl">
                    <svg class="w-10 h-10 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">
                    Contactez-moi
                </h2>
                <p class="text-blue-100 text-lg max-w-2xl mx-auto drop-shadow">
                    Une question ? Un projet ? Discutons-en ! Je réponds généralement en moins de 24h.
                </p>
            </div>
            
            <!-- Formulaire avec effet glassmorphism -->
            <div class="bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl p-8 md:p-12 border border-white/20 animate__animated animate__fadeInUp">
                
                <!-- Message de succès -->
                @if (session()->has('message'))
                <div class="mb-6 p-4 bg-green-500/20 backdrop-blur-sm border-l-4 border-green-400 rounded-lg animate__animated animate__fadeIn">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-green-300 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <p class="font-semibold text-white">{{ session('message') }}</p>
                    </div>
                </div>
                @endif
                
                <form wire:submit.prevent="submitForm" class="space-y-6">
                    
                    <!-- Nom -->
                    <div class="transform transition-all duration-300 hover:scale-[1.02]">
                        <label class="flex items-center text-white font-semibold mb-2 drop-shadow">
                            <svg class="w-5 h-5 mr-2 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Nom complet *
                        </label>
                        <div class="relative">
                            <input type="text" 
                                   wire:model="name" 
                                   class="w-full px-4 py-3 pl-12 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white placeholder-white/50 rounded-xl focus:border-blue-400 focus:ring-4 focus:ring-blue-500/30 focus:outline-none transition-all @error('name') border-red-400 focus:border-red-400 focus:ring-red-500/30 @enderror"
                                   placeholder="Jean Dupont">
                            <svg class="w-5 h-5 text-white/50 absolute left-4 top-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        @error('name') 
                        <div class="flex items-center mt-2 text-red-300 text-sm animate__animated animate__shakeX">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <!-- Email -->
                    <div class="transform transition-all duration-300 hover:scale-[1.02]">
                        <label class="flex items-center text-white font-semibold mb-2 drop-shadow">
                            <svg class="w-5 h-5 mr-2 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Email *
                        </label>
                        <div class="relative">
                            <input type="email" 
                                   wire:model="email" 
                                   class="w-full px-4 py-3 pl-12 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white placeholder-white/50 rounded-xl focus:border-blue-400 focus:ring-4 focus:ring-blue-500/30 focus:outline-none transition-all @error('email') border-red-400 focus:border-red-400 focus:ring-red-500/30 @enderror"
                                   placeholder="jean.dupont@email.com">
                            <svg class="w-5 h-5 text-white/50 absolute left-4 top-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                        @error('email') 
                        <div class="flex items-center mt-2 text-red-300 text-sm animate__animated animate__shakeX">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <!-- Sujet -->
                    <div class="transform transition-all duration-300 hover:scale-[1.02]">
                        <label class="flex items-center text-white font-semibold mb-2 drop-shadow">
                            <svg class="w-5 h-5 mr-2 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                            Sujet *
                        </label>
                        <div class="relative">
                            <input type="text" 
                                   wire:model="subject" 
                                   class="w-full px-4 py-3 pl-12 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white placeholder-white/50 rounded-xl focus:border-blue-400 focus:ring-4 focus:ring-blue-500/30 focus:outline-none transition-all @error('subject') border-red-400 focus:border-red-400 focus:ring-red-500/30 @enderror"
                                   placeholder="Demande de collaboration">
                            <svg class="w-5 h-5 text-white/50 absolute left-4 top-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                        </div>
                        @error('subject') 
                        <div class="flex items-center mt-2 text-red-300 text-sm animate__animated animate__shakeX">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <!-- Message -->
                    <div class="transform transition-all duration-300 hover:scale-[1.02]">
                        <label class="flex items-center text-white font-semibold mb-2 drop-shadow">
                            <svg class="w-5 h-5 mr-2 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Message *
                        </label>
                        <div class="relative">
                            <textarea wire:model="message" 
                                      rows="6" 
                                      class="w-full px-4 py-3 pl-12 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white placeholder-white/50 rounded-xl focus:border-blue-400 focus:ring-4 focus:ring-blue-500/30 focus:outline-none transition-all resize-none @error('message') border-red-400 focus:border-red-400 focus:ring-red-500/30 @enderror"
                                      placeholder="Décrivez votre projet ou votre question..."></textarea>
                            <svg class="w-5 h-5 text-white/50 absolute left-4 top-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        @error('message') 
                        <div class="flex items-center mt-2 text-red-300 text-sm animate__animated animate__shakeX">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <!-- Bouton Submit avec animation -->
                    <button type="submit" 
                            class="group relative w-full bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white py-4 rounded-xl font-bold text-lg hover:shadow-2xl hover:shadow-purple-500/50 transform hover:scale-[1.02] transition-all duration-300 overflow-hidden"
                            wire:loading.attr="disabled">
                        
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                        
                        <span wire:loading.remove class="relative flex items-center justify-center">
                            <svg class="w-6 h-6 mr-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Envoyer le message
                        </span>
                        
                        <span wire:loading class="relative flex items-center justify-center">
                            <svg class="animate-spin h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Envoi en cours...
                        </span>
                    </button>
                </form>
                
                <!-- Infos de contact avec effet glassmorphism -->
                <div class="mt-12 pt-8 border-t-2 border-white/20">
                    <h3 class="text-center text-white font-semibold text-lg mb-6 drop-shadow">Ou contactez-moi directement</h3>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        
                        <!-- Email -->
                        <a href="mailto:zoumaro95@gmail.com" class="group flex flex-col items-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 hover:shadow-lg hover:shadow-blue-500/30 transform hover:scale-105 transition-all duration-300">
                            <div class="bg-blue-500 p-4 rounded-full mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <p class="text-white/70 font-semibold mb-1">Email</p>
                            <p class="text-blue-300 font-bold text-sm group-hover:underline">zoumaro95@gmail.com</p>
                        </a>
                        
                        <!-- Téléphone -->
                        <a href="tel:+22966665754" class="group flex flex-col items-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 hover:shadow-lg hover:shadow-green-500/30 transform hover:scale-105 transition-all duration-300">
                            <div class="bg-green-500 p-4 rounded-full mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <p class="text-white/70 font-semibold mb-1">Téléphone</p>
                            <p class="text-green-300 font-bold text-sm group-hover:underline">+229 66 66 57 54</p>
                        </a>
                        
                        <!-- Localisation -->
                        <div class="group flex flex-col items-center p-6 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 hover:shadow-lg hover:shadow-purple-500/30 transform hover:scale-105 transition-all duration-300">
                            <div class="bg-purple-500 p-4 rounded-full mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <p class="text-white/70 font-semibold mb-1">Localisation</p>
                            <p class="text-purple-300 font-bold text-sm">Cotonou, Bénin 🇧🇯</p>
                        </div>
                    </div>
                </div>
                
                <!-- Réseaux sociaux -->
                <div class="mt-8 text-center">
                    <p class="text-white/70 mb-4 drop-shadow">Suivez-moi sur les réseaux</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full transform hover:scale-110 transition-all shadow-lg hover:shadow-blue-500/50">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-400 hover:bg-blue-500 text-white p-3 rounded-full transform hover:scale-110 transition-all shadow-lg hover:shadow-blue-400/50">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-700 hover:bg-blue-800 text-white p-3 rounded-full transform hover:scale-110 transition-all shadow-lg hover:shadow-blue-700/50">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-800 hover:bg-gray-900 text-white p-3 rounded-full transform hover:scale-110 transition-all shadow-lg hover:shadow-gray-800/50">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </section>
</div>
