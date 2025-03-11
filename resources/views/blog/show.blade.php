<x-layout title="{{ $blog->title }} - Bloom Beauty">
    <div class="bg-register">
        <div class="container pt-2  terms">
            <div class="row justify-content-center pb-5 mb-5">
                <div class="col-5 d-flex justify-content-center flex-column mb-5 align-items-center" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <a href="{{route('review.create')}}">
                        <img src="{{ Storage::url($blog->img) }}" class="img-fluid"></a>
                </div>
                <div class="col-6 p-5">
                    <h6 class="data pb-4">{{$blog->created_at->format('d F, Y')}} by {{$blog->user->name}}</h6>
                    <h2 class="pb-4">{{$blog->title}}</h2>
                    <div class="body-article"> {!! Str::limit(strip_tags($blog->body), 400, '...') !!}</div>
                    <div class="tags pt-4">
                        <h5>TAGS</h5>
                        @if(!empty($blog->cat_1))
                        <span class="badge bg-blog">#{{$blog->cat_1}}</span>
                        @endif
                        @if(!empty($blog->cat_2))
                        <span class="badge bg-blog">#{{$blog->cat_2}}</span>
                        @endif
                        @if(!empty($blog->cat_3))
                        <span class="badge bg-blog">#{{$blog->cat_3}}</span>
                        @endif
                        @if(!empty($blog->cat_4))
                        <span class="badge bg-blog">#{{$blog->cat_4}}</span>
                        @endif
                    </div>
                    <div class="pt-4">
                        <h5>SHARE</h5>
                        <i class="bi bi-facebook link-pink fs-3 pe-3"></i> <i class="bi bi-instagram link-pink fs-3 pe-3"></i> <i class="bi bi-twitter-x link-pink fs-3"></i>
                    </div>
                </div>
                <div class="col-11 col-md-8 pt-2 bg-white shadow border rounded" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <div class="body-article  p-3">{!! $blog->body !!}</div>

                </div>
            </div>
        </div>

        <div class="text-center mb-5">
            <a href="{{ route('blog.index') }}" class="btn btn-dark text-center link-light">Back to Blog</a>
        </div>


        <div class="container my-5 py-5 comments">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card comments">
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4 pb-2">Comments on {{ $blog->title }} </h4>
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex flex-start">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="65"
                                            height="65" />
                                        <div class="flex-grow-1 flex-shrink-1">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-1">
                                                        Maria Smantha <span class="small">- 2 hours ago</span>
                                                    </p>

                                                    <div class="small d-flex justify-content-start">
                                                        <a href="#!" class="d-flex align-items-center me-3">
                                                            <i class="bi bi-star pb-1 pe-1"></i>
                                                            <p class="mb-0">Like</p>
                                                        </a>
                                                        <a href="#!" class="d-flex align-items-center me-3">
                                                            <i class="bi bi-chat pb-1 pe-1"></i>
                                                            <p class="mb-0">Comment</p>
                                                        </a>
                                                        <a href="#!" class="d-flex align-items-center me-3">
                                                            <i class="bi bi-share pb-1 pe-1"></i>
                                                            <p class="mb-0">Share</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <p class="small mb-0">
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus libero quisquam deleniti! Harum sed in eos quos corporis ipsam itaque explicabo nisi! Dolores molestiae mollitia facilis harum voluptas voluptatem, necessitatibus explicabo tempore! Facilis fuga dolor possimus iste laboriosam amet consectetur enim libero ab ratione? Qui deleniti accusamus incidunt saepe sapiente!
                                                </p>
                                            </div>

                                            <div class="d-flex flex-start mt-4">
                                                <a class="me-3" href="#">
                                                    <img class="rounded-circle shadow-1-strong"
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(11).webp" alt="avatar"
                                                        width="65" height="65" />
                                                </a>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                                Simona Disa <span class="small">- 3 hours ago</span>
                                                            </p>
                                                            <div class="small d-flex justify-content-start">
                                                                <a href="#!" class="d-flex align-items-center me-3">
                                                                    <i class="bi bi-star pb-1 pe-1"></i>
                                                                    <p class="mb-0">Like</p>
                                                                </a>
                                                                <a href="#!" class="d-flex align-items-center me-3">
                                                                    <i class="bi bi-chat pb-1 pe-1"></i>
                                                                    <p class="mb-0">Comment</p>
                                                                </a>
                                                                <a href="#!" class="d-flex align-items-center me-3">
                                                                    <i class="bi bi-share pb-1 pe-1"></i>
                                                                    <p class="mb-0">Share</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <p class="small mb-0">
                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus libero quisquam deleniti! Harum sed in eos quos corporis ipsam itaque explicabo nisi! Dolores molestiae mollitia facilis harum voluptas voluptatem, necessitatibus explicabo tempore! Facilis fuga dolor possimus iste laboriosam amet consectetur enim libero ab ratione? Qui deleniti accusamus incidunt saepe sapiente!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-start mt-4">
                                                <a class="me-3" href="#">
                                                    <img class="rounded-circle shadow-1-strong"
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                                                        width="65" height="65" />
                                                </a>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                                John Smith <span class="small">- 4 hours ago</span>
                                                            </p>
                                                            <div class="small d-flex justify-content-start">
                                                                <a href="#!" class="d-flex align-items-center me-3">
                                                                    <i class="bi bi-star pb-1 pe-1"></i>
                                                                    <p class="mb-0">Like</p>
                                                                </a>
                                                                <a href="#!" class="d-flex align-items-center me-3">
                                                                    <i class="bi bi-chat pb-1 pe-1"></i>
                                                                    <p class="mb-0">Comment</p>
                                                                </a>
                                                                <a href="#!" class="d-flex align-items-center me-3">
                                                                    <i class="bi bi-share pb-1 pe-1"></i>
                                                                    <p class="mb-0">Share</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <p class="small mb-0">
                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus libero quisquam deleniti! Harum sed in eos quos corporis ipsam itaque explicabo nisi! Dolores molestiae mollitia facilis harum voluptas voluptatem, necessitatibus explicabo tempore! Facilis fuga dolor possimus iste laboriosam amet consectetur enim libero ab ratione? Qui deleniti accusamus incidunt saepe sapiente!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <x-on_blog />
    </div>
</x-layout>