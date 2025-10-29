<?php

namespace App\Livewire;

use Livewire\Component;

class Projects extends Component
{
    public $projects = [];
    
    public function mount()
    {
        $this->projects = [
            [
                'title' => 'Système de Gestion de Colis',
                'description' => 'Application complète avec suivi en temps réel, gestion des livraisons et tableau de bord analytique.',
                'tech' => ['Laravel 10', 'Livewire', 'MySQL', 'Tailwind'],
                'icon' => '📦',
                'users' => '200+',
                'status' => 'En production'
            ],
            [
                'title' => 'Interface MikroTik Manager',
                'description' => 'Gestion avancée de routeurs MikroTik avec monitoring réseau et configuration automatisée.',
                'tech' => ['Laravel 9', 'API REST', 'PostgreSQL'],
                'icon' => '🌐',
                'users' => '50+',
                'status' => 'En production'
            ],
            [
                'title' => 'Plateforme Gestion Municipale',
                'description' => 'Solution complète pour la gestion administrative, financière et citoyenne des communes.',
                'tech' => ['Laravel 10', 'Livewire', 'Charts.js'],
                'icon' => '🏛️',
                'users' => '150+',
                'status' => 'En production'
            ],
            [
                'title' => 'Système Gestion Agricole',
                'description' => 'Plateforme de suivi des cultures, gestion des stocks et marketplace pour producteurs.',
                'tech' => ['Laravel 9', 'Livewire', 'MySQL'],
                'icon' => '🌾',
                'users' => '100+',
                'status' => 'En développement'
            ],
        ];
    }
    
    public function render()
    {
        return view('livewire.projects');
    }
}
