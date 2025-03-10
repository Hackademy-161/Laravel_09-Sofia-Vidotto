<x-layout title="Reset Password - Bloom Beauty">
    <div class="bg-register pb-5 vh-100 mt-5 pt-5">
        <div class="container py-5 my-5 py-md-0 my-md-0 register">
            <div class="row justify-content-center p-5 mt-4 mt-md-0">
                <div class="col-md-6 border shadow roundend bg-white p-4 p-md-5">
                    <h3 class="text-center">Reset Password</h3>
                    <p class="text-center text-muted">Please enter your e-mail:</p>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" class="form-control" value="{{ request()->route('token') }}">
                        <input type="email" name="email" class="form-control" required placeholder="Email">
                        <input type="password" name="password" class="form-control" required placeholder="Nuova password">
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="Conferma password">
                        <button type="submit" class="btn btn-custom w-100 mt-3">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>