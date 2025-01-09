<div class="container mt-5">
    <div class="gap-2 align-middle d-flex justify-content-between">
        <h3>Elenco Categorie inserite</h3>

        <a href="{{ route('category.create') }}" class="btn btn-success me-md-2">
            Crea Nuova categoria
        </a>
    </div>
    <table class="table mt-2 border">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">#{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="gap-2 d-grid d-md-flex justify-content-md-end">


                            <a href="{{ route('category.edit', $category) }}" class="btn btn-warning me-md-2">
                                Modifica
                            </a>
                            <button wire:click="delete({{ $category }})" type="button"
                                class="btn btn-danger me-md-2">Elimina</button>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
