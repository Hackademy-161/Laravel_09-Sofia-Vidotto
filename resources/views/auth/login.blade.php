<x-layout email="Login">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 border shadow roundend bg-white">
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
                        <input type="text" class="form-control" name="email" placeholder="email">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-custom w-100 mt-4">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>