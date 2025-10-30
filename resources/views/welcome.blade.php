
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio TASS</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Ton contenu --><x-portfolio-layout>
    <x-slot name="title">Portfolio - TASSOU YERIMA MAMA</x-slot>
    
    <!-- Header/Hero -->
    @livewire('header')
    
    <!-- Compétences -->
    @livewire('skills')
    
    <!-- Projets -->
    @livewire('projects')
    
    <!-- Contact -->
    @livewire('contact-form')
</x-portfolio-layout>
</body>
</html>
