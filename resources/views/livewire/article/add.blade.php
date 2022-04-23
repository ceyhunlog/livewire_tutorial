<form wire:submit.prevent='addArticle'>
    <div class="form-group">
        <label for="exampleInputTitle"></label>
        <input wire:model='title' type="text" name="" class="form-control" id="exampleInputTitle" placeholder="Title..">
        @error('title')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
