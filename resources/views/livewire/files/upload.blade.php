<form wire:submit.prevent="save">
    <div class="form-group">
        <input type="file" wire:model="photo">
    </div>
 
    <div class="form-group">
        @error('photo') <span class="error">{{ $message }}</span> @enderror
    </div>
 
    <div class="form-group">
        <button type="submit">Save Photo</button>
    </div>
</form>

{{ $newPhoto }}