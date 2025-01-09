<form wire:submit="update">
    <div class="mb-3 form-floating">
        <input class="form-control" id="name" wire:model="name" name="name" type="text">
        <label for="name">Nome</label>
    </div>
    <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit">Aggiorna</button>
    </div>

    <div wire:loading>
        Sto salvando ....
    </div>
</form>
