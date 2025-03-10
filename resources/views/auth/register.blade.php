<x-layout title="Register - Bloom Beauty">
    <div class="bg-register pb-5">
        <div class="container py-5 my-5 py-md-0 my-md-0 register">
            <div class="row justify-content-center p-5 mt-4 mt-md-0">
                <div class="col-md-6 border shadow roundend bg-white p-4 p-md-5 ">

                    <h3 class="text-center">Register</h3>
                    <p class="text-center text-muted">Please fill in the fields below:</p>

                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li><i class="bi bi-exclamation-circle"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label small">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="newsletter">
                            <label class="form-check-label" for="newsletter">Yes, I want to subscribe to the newsletter now</label>
                        </div>
                        <div class="my-3 text-center">
                        <button type="submit" class="btn btn-custom w-100">Register</button>
                        </div>
                    </form>
                    <div class="text-center my-3"><img src="/images/register.png" class="img-fluid"></div>
                    <div class="d-flex flex-row gap-4 justify-content-center">
                        <button class="btn btn-light  border d-flex align-items-center justify-content-center">
                            <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="me-2" width="20"> <span class="d-md-block d-none">Register With Google</span>
                        </button>
                        <a href="{{ route('github.login') }}" class="btn btn-dark border d-flex align-items-center justify-content-center">
                            <i class="bi bi-github pe-2"></i> <span class="d-md-block d-none">Register With GitHub</span>
                        </a>
                    </div>
                    <p class="text-center mt-4 back-to-log">Do you already have an account? <a href="{{route('login')}}">Back to Log In</a></p>
                </div>
            </div>
        </div>
    </div>
</x-layout>