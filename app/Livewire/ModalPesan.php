<?php

namespace App\Livewire;

use Livewire\Component;

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

    public function render()
    {
        return view('livewire.modal-pesan');
    }
}
