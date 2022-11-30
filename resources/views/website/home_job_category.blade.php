@php
$products_data = App\Models\Navigation::find(2471);
@endphp



<section id="projectsRow" class="row fullWidth">
    <div class="row sectionTitles m0">
        <h2 class="sectionTitle">Job Category</h2>
        <div class="sectionSubTitle">latest job</div>
    </div>
    <div class="row filtersRow m0">
        <button type="button" class="collapsed project_filderButton visible-xs" data-toggle="collapse"
            data-target="#filters">
            <span class="btn-text"><i class="fa fa-filter"></i> Project Filter</span>
        </button>
        <ul class="list-inline text-center collapse navbar-collapse filters" id="filters">

            @foreach ($products_data->childs as $project_headingitem)
                <li data-filter=".{{ $project_headingitem->nav_name }}">{{ $project_headingitem->caption }}</li>
            @endforeach

        </ul>
    </div>
    <div class="row projects m0" id="container">

        @foreach ($products_data->childs as $project_headingitem)
            <div class="project {{ $project_headingitem->nav_name }}">

                @if ($project_headingitem->banner_image)
                    <img src="{{ $project_headingitem->banner_image }}" alt="Project 1" class="projectImg">
                @else
                    <img src="/website/images/default/project1.jpg" alt="Project 1" class="projectImg">
                @endif

                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">{{ $project_headingitem->caption }}</div>
                        {{-- <div class="row m0 projectType">{!! $project_headingitem->short_content !!}
                        </div> --}}
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="{{ $products_data->nav_name }}/{{$project_headingitem->nav_name  }}" class="btn btn-default"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
