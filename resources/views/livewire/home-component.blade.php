<div>
    <section class="tp-banner-container">
        <div class="tp-banner">

            <ul>
                @foreach ($slides as $slide)
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('images/slider') }}/{{ $slide->image }}" alt="{{ $slide->title }}" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="110"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                @endforeach
            </ul>            
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title">
            <div class="title-header">
                <h2 style="color:#252C2E;">RÉSERVEZ UN SERVICE MAINTENANT</h2>
                <p class="lead" style="color:#252C2E;">Réservez une prestation à prix très abordable, </p>
            </div>
            <div class="filter-header">
                <form id="sform" action="{{ route('searchService') }}" method="post">
                    @csrf
                    <input type="text" id="q" name="q" required="required" placeholder="Quels services souhaitez-vous ?"
                        class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Rechercher">
                </form>
            </div> 
        </div>
    </section>
    <section class="content-central">
        <div class="content_info content_resalt">
            <div class="container" style="margin-top: 40px;">
                <div class="row">
                </div>
            </div>
            <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach ($scategories as $scategory)
                                <li data-toggle="tooltip" data-original-title="{{ $scategory->name }}">
                                    <a href="{{ route('home.services_by_category', ['category_slug' => $scategory->slug]) }}">
                                        <img src="{{ asset('images/categories') }}/{{ $scategory->image }}" alt="{{ $scategory->name }}">
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="semiboxshadow text-center">
            <img src="{{ asset('assets/img/img-theme/shp.png') }}" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2>ServiceNet <span>Choix</span> des Services</h2>
                            
                            <hr class="tall">
                        </div>
                    </div>
                    <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach ($fservices as $service)
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}">
                                    <div class="img-hover">
                                        <img src="{{ asset('images/services/thumbnails') }}/{{ $service->image }}" alt="{{ $service->name }}"
                                            class="img-responsive" style="width: 100%;height:200px;">
                                    </div>
                                    <div class="info-gallery" style="height:200px;">
                                        <h3>{{ $service->name }}</h3>
                                        <hr class="separator">
                                        <p>{{ $service->tagline }}</p>
                                        <div class="content-btn"><a href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}"
                                                class="btn btn-primary">Réservez</a></div>
                                        <div class="price"><span>&#36;</span><b>Depuis</b>{{ $service->price }}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="content_info">
            <div class="bg-dark color-white border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="services-lines-info">
                                <h2>BIENVENUE CHEZ ServiceNet</h2>
                                <p class="lead">
                                    Réservez les meilleurs services en un seul endroit.
                                    <span class="line"></span>
                                </p>

                                <p>Retrouvez une grande variété de services à domicile.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="services-lines">

                                @foreach ($fcategories as $fcategory)
                                    <li>
                                        <a href="{{ route('home.services_by_category', ['category_slug' => $fcategory->slug]) }}">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{ asset('images/categories') }}/{{ $fcategory->image }}"></i>
                                                <h5>{{ $fcategory->name }}</h5>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2>Services <span>Récents</span></h2>
                        
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div id="boxes-carousel">
                @foreach ($aservices as $aservice)
                    <div>
                        <a class="g-list" href="{{ route('home.service_details', ['service_slug' => $aservice->slug]) }}">
                            <div class="img-hover">
                                <img src="{{ asset('images/services/thumbnails') }}/{{ $aservice->thumbnail }}" alt="{{ $aservice->name }}" class="img-responsive" style="width: 100%;height:200px;">
                            </div>

                            <div class="info-gallery" style="height:200px;">
                                <h3>{{ $aservice->name }}</h3>
                                <hr class="separator">
                                <p>{{ $aservice->tagline }}</p>
                                <div class="content-btn"><a href="{{ route('home.service_details', ['service_slug' => $aservice->slug]) }}"
                                        class="btn btn-primary">Réservez</a></div>
                                <div class="price"><span>&#36;</span><b>Depuis</b>{{ $aservice->price }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>

@push('scripts')
    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $('input.typeahead').typeahead({
            source: function(query, process){
                return $.get(path, {query:query}, function(data){
                    return process(data);
                });
            }
        });

        // $(document).ready(function(){
        //     $('input.typeahead').change(function(){
        //         $('sform').submit();
        //     });
        // });
    </script>
@endpush
