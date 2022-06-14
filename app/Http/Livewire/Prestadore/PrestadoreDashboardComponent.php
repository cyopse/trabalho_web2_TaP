<?php

namespace App\Http\Livewire\Prestadore;

use Livewire\Component;

class PrestadoreDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.prestadore.prestadore-dashboard-component')->layout('layouts.base');
    }
}
