<x-layout title="Login - Bloom Beauty">
    <div class="bg-register pb-5">
        <div class="container py-5 my-5 register">
            <div class="row justify-content-center p-5 mt-4 mt-md-0">
                <div class="col-md-6 border shadow roundend bg-white p-4 p-md-5">
                    <h3 class="text-center">Login</h3>
                    <p class="text-center text-muted">Please enter your e-mail and password:</p>

                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label small">Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-custom w-100">Login</button>
                    </form>
                    <div class="text-center my-3"><img src="/images/register.png" class="img-fluid"></div>
                    <div class="d-flex flex-row gap-5 justify-content-center">
                    <button class="btn btn-light  border d-flex align-items-center justify-content-center">
                            <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="me-2" width="20"> <span class="d-md-block d-none">Login With Google</span>
                        </button>
                        <button href="{{ url('/auth/redirect') }}" class="btn btn-dark border d-flex align-items-center justify-content-center">
                            <i class="bi bi-github pe-2"></i> <span class="d-md-block d-none">Login With GitHub</span>
                        </button>
                    </div>
                    <p class="text-center mt-4 back-to-log">Forgot you password? <a href="#">Recover Password</a></p>
                    <p class="text-center mt-4 back-to-log">You don't have an account? <a href="{{route('register')}}">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</x-layout>