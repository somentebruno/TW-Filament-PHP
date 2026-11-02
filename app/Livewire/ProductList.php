<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.product-list', [
            'products' => Product::query()
                ->with('category')
                ->latest()
                ->get(),
        ]);
    }
}
