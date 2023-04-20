<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class ProductList extends Component
{
    public Collection $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.product-list')
            ->extends('layouts.app')
            ->section('content');
    }
}
