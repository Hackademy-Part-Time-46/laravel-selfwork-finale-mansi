<form wire:submit="store">
    <div class="mb-3 form-floating">
        <input class="form-control" id="name" wire:model="name" name="name" type="text">
        <label for="name">Nome</label>
    </div>
    <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
    </div>

    <div wire:loading>
        Sto ragionando ....
    </div>
</form>
