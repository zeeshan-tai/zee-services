<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
            <h1 class="text-center mb-5">Our Team Members</h1>
        </div>
        <div class="row g-4">
            @foreach ($teams as $team)

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light rounded">
                    <div class="text-center border-bottom p-4">
                        <img class="img-fluid rounded-circle mb-4" src="{{asset('uploads/').'/'.$team->team_image}}" alt="">
                        <h5>{{ $team->fullname }}</h5>
                        <span>{{ $team->designation }}</span>
                    </div>
                    <div class="d-flex justify-content-center p-4">
                        <a class="btn btn-square mx-1" href="{{ $team->facebook_id }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href="{{ $team->twitter_id }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href="{{ $team->instagram_id }}"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square mx-1" href="{{ $team->linkedin_id }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>


                </div>
        </div>
        @endforeach
    </div>
</div>

<div class="text-center">
    <a href="{{route('team')}}" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft col-md-3 align-content-center">View All</a>
</div>
