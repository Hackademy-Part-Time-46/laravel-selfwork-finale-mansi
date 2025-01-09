<x-app>
    <div class="px-4 mb-5 px-md-5">
        <div class="row gx-5 justify-content-center ">
            <div class="p-5 border rounded col-lg-8 col-xl-6">

                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 form-floating">
                        <input class="form-control" id="name" value name="title" type="text">
                        <label for="name">Nome</label>
                    </div>
                    <div class="mb-3">
                        <label for="name">Corpo</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3 form-control">
                        @foreach ($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="category_id" name="categories[]"
                                    value="{{ $category->id }}">
                                <label class="form-check-label" for="category_id">{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3 form-floating">
                        <input class="form-control" id="image" name="image" value type="file">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app>
