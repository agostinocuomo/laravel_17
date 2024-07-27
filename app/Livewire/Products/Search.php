<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $keyword = '';
    public function render()
    {
        if ($this->keyword) {
            //dd(Product::where('name', '==', $this->keyword)->get());
            dd(Product::where('name', 'LIKE', '%' . $this->keyword . '%')->get());
        }

        // $this->dispatch('table', );
        return view('livewire.products.search');
    }
}
