<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ProductForm extends Component
{
    use LivewireAlert;

    protected $listeners = [
        'confirmed'
    ];

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

        $this->flash('success', 'Basic Alert');

        // // $this->alert('info', 'This is not as toast alert', [
        // //     'toast' => false
        // // ]);
        //
        // $this->alert('question', 'How are you today?', [
        //     'showConfirmButton' => true
        // ]);

        return redirect()->route('products.index');
    }

    public function confirmed()
    {
        // Do something
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
