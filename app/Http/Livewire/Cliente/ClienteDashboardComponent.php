<?php

namespace App\Http\Livewire\Cliente;

use Livewire\Component;

class ClienteDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.cliente.cliente-dashboard-component')->layout('layouts.base');
    }
}
