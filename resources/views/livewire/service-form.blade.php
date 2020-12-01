<form wire:submit.prevent="submit">

        <div class="form-group">
            <label for="exampleInputName">Tipo de servicio</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model="type_service">
            @error('type_service') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputDesc">Descripción del servicio</label>
            <input type="text" class="form-control" id="exampleInputDesc" placeholder="Enter name" wire:model="description">
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputbody">Teléfono</label>
            <textarea class="form-control" id="exampleInputbody" placeholder="Enter Body" wire:model="phone"></textarea>
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>

