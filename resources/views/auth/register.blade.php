<x-layout email="Register">

    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-6 border shadow roundend bg-white p-5">
                <form method="POST" action="{{route('register')}}">
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
                        <input type="text" class="form-control" name="name" placeholder="Username">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="email" placeholder="email">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Conferma Password">
                    </div>

                    <button type="submit" class="btn btn-custom w-100 mt-4">Register</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>