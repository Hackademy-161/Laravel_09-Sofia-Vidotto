<x-layout title="Write Your Article - Bloom Beauty">
    <div class="bg-register">
        <div class="container pt-5 ">
            <div class="row justify-content-center py-5 mb-5">
                <div class="col-12 col-md-6 pt-2" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <h2 class="fw-bold pt-5">Write your <em>article</em>.</h2>
                    <!-- form -->
                    <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" placeholder="Title">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <textarea name="article" cols="30" rows="12" class="form-control" placeholder="Your Article">{{old('article')}}</textarea>
                            @error('article')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="file" class="form-control" name="img">
                        </div>
                        <div class="alert alert-warning" role="alert">
                            Please review your article carefully before submitting. Once submitted, it will be visible to others.
                        </div>
                        <button type="submit" class="btn btn-custom w-100 mt-2">Submit Review</button>
                    </form>
                    @if (session('message'))
                    <div class="alert alert-success mt-5">
                        {{ session('message')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-layout>