@extends('layouts.master')
@section('content')
<div id="teaser">
    <div class="flexslider loading">
        <ul class="slides">
          @foreach($sliders as $slid)
            <li data-thumb="">
                <img loading="lazy" src="{{asset('assets/sliders/'.$slid->image)}}" alt="image slider">
                <div class="flex-caption ">
                    <div class="flex-content container_16">
                        <div class="grid_16">
                            <h1>{{$slid->title}}</h1>
                            <h2>{{$slid->description}}</h2>
                            <div class="flex-button"><a class="radius" href="#">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                        </div>	
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div id="main" class="site-main container_16">
    <div class="inner">
        <!-- First widget areea -->
        <div class="grid_12 first-home-widget-area">
            <aside id="flexlatestnews" class="WPlookLatestNews flex-container-news" >	
                <div class="widget-title mright mleft" >
                    <h3>OUR PROGRAMS</h3>
                    <div class="clear"></div>
                </div>
                <div class="latestnews-body flexslider-news">
                    <ul class="slides">
                        @foreach($featureNews as $news)
                        <li>
                            <div class="image fright"><img loading="lazy" class="radius" src="{{asset('assets/news/'.$news->image)}}" alt="Image alt"></div>
                            <div class="content fleft">
                                <h3>{{$news->title}}</h3>
                                <p class="description">{{$news->description}}</p>
                                <div class="flex-button-red"><a class="radius" href="{{ route('project', $news->id) }}">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="clear"></div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    <!-- Second widget areea -->
        <div class="grid_4 second-home-widget-area">
            <aside id="wpltfbd-2" class="widget WPlookCauses">	
                <div class="widget-title">
                    <h3>Events</h3>
                    <div class="viewall fright"><a href="{{ route('cause')}}" class="radius" title="View all chauses">view all</a></div>
                    <div class="clear"></div>
                </div>
                <div class="widget-event-body">
                    <article class="event-item">
                        <figure>
                            <a title="Image title" href="#">
                                <img loading="lazy" width="272" height="150" src="{{asset('assets/events/'.$latestEvent['image'])}}" class="wp-post-image" alt="Image alt">
                                <div class="mask radius">
                                    <div class="mask-square"><i class="fa fa-link" aria-hidden="true"></i></div>
                                </div>
                            </a>
                        </figure>
                        <h3 class="entry-header">
                            <a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="{{ route('singlevent', $latestEvent['id']) }}">{{$latestEvent['title']}}</a>
                        </h3>
                        <div class="entry-meta-widget">
                            <div class="date"><time datetime="2018-04-25T19:02:42+00:00"><i class="fa fa-calendar" aria-hidden="true"></i>{{\Carbon\Carbon::parse($latestEvent['date'])->format('d M Y')}}</time></div>
                            <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">{{$latestEvent['location']}}</a></div>
                            <div class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="{{$latestEvent['social_link']}}">Facebook</a></div>
                        </div>
                    </article>
                </div>
            </aside>
        </div>
        <!-- widget areea -->
        <div class="grid_16 third-home-widget-area">
            <aside id="wpltfbs-f2w" class="widget WPlookCauses">	
                <div class="widget-title">
                    <h3>Latest Projects</h3>
                    <div class="viewall fright"><a href="02-causes-list.html" class="radius" title="View all chauses">view all</a></div>
                    <div class="clear"></div>
                </div>
                <div class="widget-causes-body">
                    <!-- First cause -->
                    @foreach($fourLatestNews as $news)
                    <article class="cause-item">
                        <figure>
                            <a title="Image title" href="{{ route('project', $news->id) }}">
                                <img loading="lazy" width="272" height="150" src="{{asset('assets/news/'.$news->image)}}" class="wp-post-image" alt="Image alt">
                                <div class="mask radius">
                                    <div class="mask-square"><i class="fa fa-tint" aria-hidden="true"></i></div>
                                </div>
                            </a>
                        </figure>
                        <h3 class="entry-header">
                            <a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="{{ route('project', $news->id) }}">{{$news->title}}</a>
                        </h3>
                        <div class="short-description">
                            <p>{{\Illuminate\Support\Str::limit($news->description, $limit = 100, $end = ' Read More')}}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
            </aside>
        </div>
        <!-- Forth widget areea -->
        <div class="grid_16 forth-home-widget-area">
            <aside id="wpltfbf-2" class="widget WPlookAnounce radius" >	
                <div class="announce-body mright mleft">
                    <div class="margin"><h1>{{$latestMsg['title']}}</h1>
                        <h3 id="msg">{{$latestMsg['description']}}</h3>
                    </div>
                </div>
            </aside>
        </div>
        <!-- Fifth Widget area -->
        <div class="grid_16 fifth-home-widget-area">
            <aside id="wpltfbe-2" class="widget WPlookStaff" >	
                <div class="widget-title">
                    <h3>Meet our Staff</h3>
                    <div class="viewall fright"><a href="{{route('staff')}}" class="radius">view all</a></div>
                    <div class="clear"></div>
                </div>
                <div class="staff-body">
                    <!-- canditate -->
                    @foreach ($staff as $emp)
                    <div class="candidate grid_4">
                        <div class="candidate-margins">
                            <a href="{{route('singlestaff', $emp->id)}}">
                                <img loading="lazy" width="200" height="210" src="{{asset('assets/staff/'.$emp->image)}}" class="wp-post-image" alt="Image alt">
                                <div class="name">{{$emp->name}}</div>
                                <div class="position">{{$emp->title}}</div>
                            </a>	
                        </div>
                    </div>
                    @endforeach
                <div class="clear"></div>
                </div>
            </aside>
        </div>
        <div class="clear"></div>
    </div>
</div>
@endsection