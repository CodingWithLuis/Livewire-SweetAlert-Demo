<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Productos') }}</div>

                    <div class="card-body">
                        <form wire:submit.prevent="submit">

                            <div class="mb-3">
                                <label for="name" class="form-label">Producto</label>
                                <input type="text" class="form-control" id="name" wire:model="name">
                                @error('name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="price" wire:model="price">
                                @error('price') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
