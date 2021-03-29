<?php

namespace App\Http\Livewire\Category;

use App\Category;
use Livewire\Component;

class Edit extends Component
{
    public $data = [];
    protected $listeners = [
        'edit-data' => 'editData'
    ];

    public function render()
    {
        return view('livewire.category.edit');
    }

    public function editData($id)
    {
        try {
            $edit = Category::findOrFail($id);
            $this->data = $edit->toArray();
            
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }

    public function store()
    {
        try {
            $add = Category::findOrFail($this->data['id']);
            $add->update([
                'name' => $this->data['name']
            ]);

            $this->emit('refresh-table');
            $this->emit('close-edit');
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }
}
