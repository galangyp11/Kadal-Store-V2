<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class ModalPesan extends Component
{
    public $isModalOpen = false;

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function render(Request $request)
    {
        // $data = $request->validate([
        //     'id_game' => ['required', 'string'],
        //     'server_game'=> ['required', 'string'],
        //     'payment'=> ['required', 'string'], 
        //     'email'=> ['required', 'string'],
        // ]);

        

        return view('livewire.modal-pesan');
    }
}
