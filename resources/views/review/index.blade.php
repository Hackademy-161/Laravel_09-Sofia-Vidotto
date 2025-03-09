<x-layout title="Reviews - Bloom Beauty">
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center py-5 mb-5">

            <div class="col-12 col-md-6 d-flex justify-content-center p-5 flex-column mb-5 align-items-center" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <img src="/images/review.png" class="img-fluid">

            </div>

            <div class="col-12 col-md-6 pt-2" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">
                <h2 class="fw-bold pt-5">Write your <em>review</em>.</h2>
                <p class="small">Share your thoughts on us! Your review helps us improve even more. ♡</p>
                <!-- form -->
                <form method="POST" action="{{route('review.store')}}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Your Name">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" placeholder="Title">
                        @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea name="comment" cols="30" rows="4" class="form-control" placeholder="Your Comment">{{old('comment')}}</textarea>
                        @error('comment')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <select name="rating" class="form-control @error('rate') is-invalid @enderror">
                            <option value="" disabled selected>Rate Us</option>
                            @for($i = 1; $i <= 5; $i++)
                                <option value="{{$i}}">{{$i}} ★</option>
                                @endfor
                        </select>
                        @error('rate')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-custom w-100 mt-4">Submit Review</button>
                </form>
                @if (session('message'))
                <div class="alert alert-success mt-5">
                    {{ session('message')}}
                </div>
                @endif

            </div>
        </div>
    </div>

    <!-- review -->
    <div class="container my-4">
        <h3 class="fw-bold text-uppercase text-center"><img src="/images/left.png">Read The Review<img src="/images/right.png"></h3>
        <p class="text-center text-muted">⭐⭐⭐⭐⭐ 5 reviews</p>

        <div class="text-center mb-3">
            <a class="btn btn-outline-dark write-review-btn my-5 " href="{{ route('review.index')}}">Write a Review <i class="bi bi-arrow-right-circle p-1"></i></a>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($reviews as $review)
                <div class="review-card">
                    <div class="review-header">
                        <i class="bi bi-person-circle pb-4 fs-3"></i>
                        <div>
                            <h6>{{ $review['name'] }} <span class="text-muted">✔️ Verified Reviewer</span></h6>
                            <p class="review-stars">★★★★★</p>
                        </div>
                    </div>
                    <h5 class="text-uppercase">{{ $review['title'] }}</h5>
                    <p>{{ $review['comment'] }}</p>
                    <p class="review-date">{{ $review['created_at'] }}</p>
                </div>
                @endforeach

                <div class="col-12 text-center">
                    <a href="#" class="show-more">Show More <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </div>

</x-layout>