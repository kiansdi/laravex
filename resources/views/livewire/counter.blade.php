<form wire:submit.prevent="saveContact">
    <input class="form-control" type="text" wire:model="name">
    @error('name') <span class="error">{{ $message }}</span> @enderror

    <input class="form-control" type="text" wire:model="email">
    @error('email') <span class="error">{{ $message }}</span> @enderror

    <button class="btn btn-primary btn-block" type="submit">Save Contact</button>
</form>
