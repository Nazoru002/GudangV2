<?php

namespace App\Http\Livewire\Category;

use App\Category;
use Livewire\Component;

class Create extends Component
{
    public $name_category = null;

    protected $listeners = [
        'reset-variable' => 'resetVariable',
    ];

    public function render()
    {
        return view('livewire.category.create');
    }

    public function add()
    {
        try {
            $add = Category::firstOrCreate([
                'name' => $this->name_category
            ]);
            
            $this->emit('close-create');
            $this->emit('refresh-table');
            $this->reset('name_category');
            $this->emit('success', 'Data Berhasil Disimpan !');
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan');
        }
    }
}
