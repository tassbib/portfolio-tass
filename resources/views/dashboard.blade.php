<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio TASS</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Ton contenu ici -->
    
<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between bg-white/10 backdrop-blur-sm rounded-2xl px-6 py-4 shadow-xl border border-white/20">
            <h2 class="font-bold text-2xl text-white leading-tight flex items-center drop-shadow-lg">
                <svg class="w-8 h-8 mr-3 text-blue-300 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                <span>{{ __('Dashboard') }} - Bienvenue <span class="text-blue-300">{{ Auth::user()->name }}</span></span>
            </h2>
            <div class="flex items-center space-x-3 bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm border border-white/20">
                <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm text-white font-semibold">{{ now()->format('d M Y, H:i') }}</span>
            </div>
        </div>
    </x-slot>

    <!-- Background avec image -->
    <div class="relative min-h-screen overflow-hidden">
        
        <!-- Image de fond -->
        <div class="fixed inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop" 
                 alt="Background" 
                 class="w-full h-full object-cover">
            
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900/95 via-blue-900/90 to-purple-900/95"></div>
            
            <!-- Grille animée -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>
        </div>
        
        <!-- Particules flottantes -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute top-20 left-10 w-96 h-96 bg-blue-500 opacity-20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-500 opacity-20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/3 w-72 h-72 bg-pink-500 opacity-20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>

        <div class="relative py-12 z-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <!-- Stats Cards avec glassmorphism -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    
                    <!-- Card 1 - Total Projets -->
                    <div class="group bg-white/10 backdrop-blur-xl overflow-hidden shadow-2xl rounded-3xl p-6 transform transition duration-500 hover:scale-105 hover:bg-white/15 animate__animated animate__fadeInUp border border-white/20">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-white/70 text-sm font-medium mb-2 flex items-center">
                                    <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 animate-pulse"></span>
                                    Total Projets
                                </p>
                                <p class="text-5xl font-bold text-white mb-3 drop-shadow-lg">12</p>
                                <span class="inline-flex items-center text-green-300 text-sm font-semibold bg-green-500/20 px-3 py-1 rounded-full backdrop-blur-sm">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                                    </svg>
                                    +15% ce mois
                                </span>
                            </div>
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 p-5 rounded-2xl shadow-2xl transform group-hover:rotate-12 transition-transform duration-500">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                        </div>
                        <!-- Barre de progression -->
                        <div class="mt-4 bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-full rounded-full" style="width: 75%;"></div>
                        </div>
                    </div>
                    
                    <!-- Card 2 - Utilisateurs Actifs -->
                    <div class="group bg-white/10 backdrop-blur-xl overflow-hidden shadow-2xl rounded-3xl p-6 transform transition duration-500 hover:scale-105 hover:bg-white/15 animate__animated animate__fadeInUp border border-white/20" style="animation-delay: 0.1s;">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-white/70 text-sm font-medium mb-2 flex items-center">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                                    Utilisateurs Actifs
                                </p>
                                <p class="text-5xl font-bold text-white mb-3 drop-shadow-lg">500+</p>
                                <span class="inline-flex items-center text-green-300 text-sm font-semibold bg-green-500/20 px-3 py-1 rounded-full backdrop-blur-sm">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                                    </svg>
                                    +22% ce mois
                                </span>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-green-600 p-5 rounded-2xl shadow-2xl transform group-hover:rotate-12 transition-transform duration-500">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                        </div>
                        <!-- Barre de progression -->
                        <div class="mt-4 bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r from-green-400 to-green-600 h-full rounded-full" style="width: 85%;"></div>
                        </div>
                    </div>
                    
                    <!-- Card 3 - Messages -->
                    <div class="group bg-white/10 backdrop-blur-xl overflow-hidden shadow-2xl rounded-3xl p-6 transform transition duration-500 hover:scale-105 hover:bg-white/15 animate__animated animate__fadeInUp border border-white/20" style="animation-delay: 0.2s;">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-white/70 text-sm font-medium mb-2 flex items-center">
                                    <span class="w-2 h-2 bg-purple-400 rounded-full mr-2 animate-pulse"></span>
                                    Messages
                                </p>
                                <p class="text-5xl font-bold text-white mb-3 drop-shadow-lg">24</p>
                                <span class="inline-flex items-center text-orange-300 text-sm font-semibold bg-orange-500/20 px-3 py-1 rounded-full backdrop-blur-sm animate-pulse">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                    </svg>
                                    5 nouveaux
                                </span>
                            </div>
                            <div class="relative bg-gradient-to-br from-purple-500 to-purple-600 p-5 rounded-2xl shadow-2xl transform group-hover:rotate-12 transition-transform duration-500">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                </svg>
                                <!-- Badge notification -->
                                <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs font-bold rounded-full w-7 h-7 flex items-center justify-center animate-bounce border-2 border-white">5</span>
                            </div>
                        </div>
                        <!-- Barre de progression -->
                        <div class="mt-4 bg-white/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r from-purple-400 to-purple-600 h-full rounded-full" style="width: 60%;"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Actions rapides avec glassmorphism -->
                <div class="bg-white/10 backdrop-blur-xl overflow-hidden shadow-2xl rounded-3xl p-8 mb-8 animate__animated animate__fadeInUp border border-white/20" style="animation-delay: 0.3s;">
                    <div class="flex items-center mb-6">
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 p-3 rounded-2xl mr-4 shadow-xl">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white drop-shadow-lg">Actions Rapides</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        
                        <!-- Action 1 -->
                        <a href="#" class="group relative bg-gradient-to-br from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white p-6 rounded-2xl text-center transition-all duration-300 transform hover:scale-110 hover:shadow-2xl hover:shadow-blue-500/50 overflow-hidden">
                            <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                            <svg class="relative w-14 h-14 mx-auto mb-4 transform group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            <div class="relative font-bold text-lg mb-1">Nouveau Projet</div>
                            <p class="relative text-xs text-blue-100">Créer un projet</p>
                        </a>
                        
                        <!-- Action 2 -->
                        <a href="#" class="group relative bg-gradient-to-br from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white p-6 rounded-2xl text-center transition-all duration-300 transform hover:scale-110 hover:shadow-2xl hover:shadow-green-500/50 overflow-hidden">
                            <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                            <div class="relative">
                                <svg class="w-14 h-14 mx-auto mb-4 transform group-hover:scale-125 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold rounded-full w-7 h-7 flex items-center justify-center animate-bounce border-2 border-white shadow-lg">5</span>
                            </div>
                            <div class="relative font-bold text-lg mb-1">Messages</div>
                            <p class="relative text-xs text-green-100">Voir les messages</p>
                        </a>
                        
                        <!-- Action 3 -->
                        <a href="{{ route('profile.show') }}" class="group relative bg-gradient-to-br from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white p-6 rounded-2xl text-center transition-all duration-300 transform hover:scale-110 hover:shadow-2xl hover:shadow-purple-500/50 overflow-hidden">
                            <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                            <svg class="relative w-14 h-14 mx-auto mb-4 transform group-hover:rotate-180 transition-transform duration-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="relative font-bold text-lg mb-1">Paramètres</div>
                            <p class="relative text-xs text-purple-100">Gérer le profil</p>
                        </a>
                        
                        <!-- Action 4 -->
                        <a href="{{ route('home') }}" class="group relative bg-gradient-to-br from-indigo-500 to-indigo-600 hover:from-indigo-600 hover:to-indigo-700 text-white p-6 rounded-2xl text-center transition-all duration-300 transform hover:scale-110 hover:shadow-2xl hover:shadow-indigo-500/50 overflow-hidden">
                            <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                            <svg class="relative w-14 h-14 mx-auto mb-4 transform group-hover:scale-125 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div class="relative font-bold text-lg mb-1">Portfolio</div>
                            <p class="relative text-xs text-indigo-100">Voir le site public</p>
                        </a>
                    </div>
                </div>
                
                <!-- Projets récents avec glassmorphism -->
                <div class="bg-white/10 backdrop-blur-xl overflow-hidden shadow-2xl rounded-3xl p-8 animate__animated animate__fadeInUp border border-white/20" style="animation-delay: 0.4s;">
                    <div class="flex items-center mb-6">
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 p-3 rounded-2xl mr-4 shadow-xl">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white drop-shadow-lg">Projets Récents</h3>
                    </div>
                    
                    <div class="space-y-4">
                        
                        <!-- Projet 1 -->
                        <div class="group bg-white/5 backdrop-blur-sm border-l-4 border-blue-500 pl-6 py-5 pr-6 hover:bg-white/10 rounded-r-2xl transition-all duration-300 transform hover:translate-x-2 cursor-pointer hover:shadow-xl">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="bg-blue-500/20 backdrop-blur-sm p-4 rounded-xl mr-4 border border-blue-400/30">
                                        <svg class="w-7 h-7 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white text-lg group-hover:text-blue-300 transition-colors drop-shadow">Système de Gestion de Colis</h4>
                                        <p class="text-sm text-white/70 flex items-center mt-1">
                                            <svg class="w-4 h-4 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            200+ utilisateurs actifs
                                        </p>
                                    </div>
                                </div>
                                <span class="bg-green-500/20 backdrop-blur-sm text-green-300 text-xs font-bold px-4 py-2 rounded-full border border-green-400/30">En production</span>
                            </div>
                        </div>
                        
                        <!-- Projet 2 -->
                        <div class="group bg-white/5 backdrop-blur-sm border-l-4 border-green-500 pl-6 py-5 pr-6 hover:bg-white/10 rounded-r-2xl transition-all duration-300 transform hover:translate-x-2 cursor-pointer hover:shadow-xl">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="bg-green-500/20 backdrop-blur-sm p-4 rounded-xl mr-4 border border-green-400/30">
                                        <svg class="w-7 h-7 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white text-lg group-hover:text-green-300 transition-colors drop-shadow">Interface MikroTik Manager</h4>
                                        <p class="text-sm text-white/70 flex items-center mt-1">
                                            <svg class="w-4 h-4 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            50+ utilisateurs actifs
                                        </p>
                                    </div>
                                </div>
                                <span class="bg-green-500/20 backdrop-blur-sm text-green-300 text-xs font-bold px-4 py-2 rounded-full border border-green-400/30">En production</span>
                            </div>
                        </div>
                        
                        <!-- Projet 3 -->
                        <div class="group bg-white/5 backdrop-blur-sm border-l-4 border-purple-500 pl-6 py-5 pr-6 hover:bg-white/10 rounded-r-2xl transition-all duration-300 transform hover:translate-x-2 cursor-pointer hover:shadow-xl">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="bg-purple-500/20 backdrop-blur-sm p-4 rounded-xl mr-4 border border-purple-400/30">
                                        <svg class="w-7 h-7 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-white text-lg group-hover:text-purple-300 transition-colors drop-shadow">Plateforme Gestion Municipale</h4>
                                        <p class="text-sm text-white/70 flex items-center mt-1">
                                            <svg class="w-4 h-4 mr-1 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                            </svg>
                                            150+ utilisateurs actifs
                                        </p>
                                    </div>
                                </div>
                                <span class="bg-green-500/20 backdrop-blur-sm text-green-300 text-xs font-bold px-4 py-2 rounded-full border border-green-400/30">En production</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Voir tous les projets -->
                    <div class="mt-8 text-center">
                        <a href="#" class="inline-flex items-center bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-full font-bold hover:shadow-2xl hover:shadow-blue-500/50 transform hover:scale-110 transition-all group">
                            <span>Voir tous les projets</span>
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</x-app-layout>

</body>
</html>



