<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $isShow = true;

    public function switchShow()
    {

        return $this->isShow = !$this->isShow;
    }

    public function render()
    {

        return view('livewire.products.table', [
            'products' => Product::paginate(15),
        ]);
    }
}