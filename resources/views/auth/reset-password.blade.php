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

                <form class="p-5 border rounded" action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ request()->token }}" name="token">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                            utente</label>
                        <input type="email" name="email" class="form-control" id="email" required
                            value="{{ request()->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma
                            password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-dark">Aggiorna password</button>

                </form>
            </div>
        </div>
    </div>
</x-app>
