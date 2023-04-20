<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductForm extends Component
{
    public $name;
    public $price;

    public function render(): View
    {
        return view('livewire.product-form')
            ->extends('layouts.app')
            ->section('content');
    }

    public function submit()
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * @return array<string,array<int,string>>
     */
    protected function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'price' => ['required'],
        ];
    }
}
