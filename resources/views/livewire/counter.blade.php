<form wire:submit.prevent="saveContact">
    @include('fragments.errors')
    <input class="form-control" type="text" wire:model.lazy="name">
    @error('name') <span class="error">{{ $message }}</span> @enderror

    <input class="form-control" type="text" wire:model.lazy="email">
    @error('email') <span class="error">{{ $message }}</span> @enderror

    <button class="btn btn-primary btn-block" type="submit">Save Contact</button>
</form>
