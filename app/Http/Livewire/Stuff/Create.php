<?php

namespace App\Http\Livewire\Stuff;

use App\Category;
use App\Stock;
use App\Stuff;
use Livewire\Component;

class Create extends Component
{
    public $name = null;
    public $desc = null;
    public $category_id = null;
    public $stock_modal = 0;
    public $data_category = [];

    protected $listeners = [
        'reset-variable' => 'resetVariable',
    ];

    public function mount()
    {
        $data_category = Category::get();
        $this->data_category = $data_category;
    }

    public function render()
    {
        return view('livewire.stuff.create');
    }

    public function add()
    {
        try {
            $stuff = Stuff::firstOrCreate([
                'name' => $this->name,
                'description' => $this->desc,
                'category_id' => $this->category_id
            ]);

            $stock = Stock::firstOrCreate([
                'stuff_id' => $stuff->id,
                'stock_cap' => $this->stock_modal,
                'stock_date' => date('Y-m-d')
            ]);

            $this->emit('refresh-table');
            $this->emit('close-create');
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }

    public function resetVariable()
    {
        $this->reset([
            'name',
            'desc',
            'category_id',
            'stock_modal'
        ]);
    }
}
