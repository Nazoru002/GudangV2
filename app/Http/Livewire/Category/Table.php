<?php

namespace App\Http\Livewire\Category;

use App\Category;
use Livewire\Component;

class Table extends Component
{
    public $data = [];

    protected $listeners = [
        'refresh-table' => 'getData',
    ];

    public function mount()
    {
        $this->getData();
    }

    public function render()
    {
        return view('livewire.category.table');
    }

    public function getData()
    {
        try {
            $data = Category::orderBy('created_at', 'DESC')->get();
            $this->data = $data;
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }

    public function hapusData($id)
    {
        try {
            $data = Category::findOrFail($id);
            $data->delete();
            $this->getData();

        } catch (\Exception $e) {
            dd($e);
        }
    }
}
