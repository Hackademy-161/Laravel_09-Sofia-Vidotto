@if(Route::currentRouteName() == "homepage")
<div class="container-fluid bg-first">
    <div class="row justify-content-center">
        <div class="col-md-6 pt-5">
            <h1 class="pt-5 mt-4">Discover your inner beauty<br>
                with Blossom Glow Kit</h1>

            <p class="lead pt-3">
                Great gift for yourself and loved ones
            </p>

            <button href="#" class="btn btn-custom mt-3">Shop Now</button>
        </div>
    </div>
</div>
@elseif (Route::currentRouteName() == "blog.index")
<div class="bg-first header-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" d-flex align-items-center">
                <div class="col-md-5 pt-5">
                    <h1 class="pt-1 mt-4">Join the Conversation!<br>
                        Share Your Voice with Us!</h1>
                    @auth
                    <a href="{{route('blog.create')}}">
                        <p class="link-article">Click here to create a new article <i class="bi bi-arrow-right"></i></p>
                    </a>
                    @endauth

                    <p class="lead pt-1">
                        <strong>Have something to say?</strong> We invite you to share your thoughts, ideas, and expertise with the world by writing articles for our platform! Whether you're passionate about technology, lifestyle, health, or any other topic, your voice matters.
                    </p>

                    <p class="strong small">Why Write for Us?</p>
                    <ul class="small">
                        <li>
                            Reach a Wider Audience: Share your knowledge and ideas with thousands of readers.
                        </li>

                        <li>
                            Express Your Creativity: Write about the things you care about and show your unique perspective.
                        </li>

                        <li>
                            Be Part of Our Community: Engage with like-minded individuals who share your interests.
                        </li>
                    </ul>

                    @guest
                    <a href="{{route('register')}}" class="btn btn-dark mt-3">Register</a> <a href="{{route('login')}}" class="btn btn-outline-dark mt-3">Login</a>
                    @endguest
                </div>
            </div>
        </div>

    </div>

</div>
@endif