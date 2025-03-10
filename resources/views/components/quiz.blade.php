<section class="quiz-section shadow text-center my-5">
    <div class="container p-2">
        <div class="quiz-content">
            @if(Route::currentRouteName() === 'quiz.index')
            <div class="col-6">
                @else
                <div class="col-6 quiz-image">
                    @endif
                    <img src="/images/Mask group.png" alt="Skin-Quiz" class="img-fluid">
                </div>

                <div class="col-6 quiz-text text-start">
                    <h2 class="fw-bold">The Skin Quiz</h2>
                    <p class="text-muted">
                        Meet the quiz that will curate a routine just as unique as you are.
                    </p>
                    @if(Route::currentRouteName() === 'quiz.index')
                    <button type="button" class="btn btn-dark w-50 fs-5 mb-4" id="startButton" onclick="startQuiz()">Start</button>
                    @else
                    <a class="btn btn-custom" href="{{ route('quiz.index') }}">Explore More</a>
                    @endif
                </div>
            </div>
        </div>
</section>