<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span></p>
            <h1 class="text-center mb-5">Recently Completed Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Web Design</li>
                    <li class="mx-2" data-filter=".second">Graphic Design</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
        @foreach ($projects as $project)
             <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('uploads/').'/'.$project->image}}" alt="" height="500" width="400">
                        <div class="portfolio-overlay">
                            <a class="btn btn-square btn-outline-light mx-1" href="{{$project->github_link }}"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <p class="text-primary fw-medium mb-2">{{$project->project_category_id}}</p>
                        <h5 class="lh-base mb-0">{{ $project->title }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</div>

<div class="text-center">
    <a href="{{route('project')}}" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft col-md-3 align-content-center">View All</a>
</div>
