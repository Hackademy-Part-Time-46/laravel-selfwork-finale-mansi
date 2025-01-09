<x-app>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="mb-4 text-sm font-medium text-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="p-5 border rounded" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                            utente</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>

                    <button type="submit" class="btn btn-dark">Invia link</button>

                </form>
            </div>
        </div>
    </div>
</x-app>
