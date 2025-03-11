## Project
Create an online store for Korean cosmetics. The website should have a modern design and user-friendly interface that showcases the products in an attractive way. Additionally, the website should have a blog section that provides beauty tips and information about Korean skincare.

## Palette
- black #383838
- blue-gray#697586
- gray #8498AF
- lilac  #B0A6BD
- pink  #F5A3B7
- light-pink  #FEE2E3
- white #FFFFFF
- off-white #F9F9FC 

## Typography

- Poppins 
- Montserrat

## Functional
- Search
- Shopping cart
- Account -> Data change / Favorites / Orders
- Product Review
- Blog






    
    <!-- <div class="container my-4">
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
                    <img src="{{ $review['img'] }}" width="200px">
                    <p class="review-date">{{ $review['created_at'] }}</p>
                    
                </div>
                @endforeach

                <div class="col-12 text-center">
                    <a href="#" class="show-more">Show More <i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </div>