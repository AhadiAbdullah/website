@extends('layouts.master')
@section('content')
<div class="item teaser-page-list">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">Events</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="{{route('home')}}">Home Page</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="current">Events</span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div id="main" class="site-main container_16">
			<div class="inner">
				<div id="primary" class="grid_11 suffix_1">
					
					<!-- First article -->
					@foreach($events as $event)
					<article class="list vevent">
						<div class="short-content">
							<figure>
								<a title="Image title" href="#" class="url summary">
									<img width="272" height="150" src="{{asset('assets/events/'.$event->image)}}" class="wp-post-image" alt="Image alt">
									<div class="mask radius">
										<div class="mask-square"><i class="fa fa-link" aria-hidden="true"></i></div>
									</div>
								</a>
							</figure> 
							
							<h1 class="entry-header">
								<a class="url summary" title="Relay For Life North Yorkt" href="{{ route('singlevent', $event->id) }}">{{$event->title}}</a>
							</h1>

							<div class="short-description description">
								<p>{{$event->detail}}</p>
							</div>

							<div class="entry-meta">
								<time class="dtstart" datetime="2018-04-25T19:02:42+00:00"><a class="buttons time fleft" href="#"><i class="fa fa-calendar " aria-hidden="true"></i>{{\Carbon\Carbon::parse($event->date)->format(' d M Y')}}</a></time> <a class="buttons facebook fleft" href="{{$event->social_link}}"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
							</div>
							<div class="clear"></div>

						</div>
						<div class="clear"></div>
					</article>
					@endforeach
					<!-- Pagination -->
					{{ $events->render() }}
					
				</div>
	
				<div id="secondary" class="grid_4 widget-area" role="complementary">

					<aside id="wpltfb-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Events</h3>
							<div class="viewall fright"><a href="{{ route('events') }}" class="radius" title="View all chauses">view all</a></div>
							<div class="clear"></div>
						</div>
						
						<div class="widget-event-body">
							@foreach($latestevents as $levent)
							<article class="event-item">
								<figure>
									<a title="Image title" href="{{ route('singlevent', $levent->id) }}">
										<img width="272" height="150" src="{{asset('assets/events/'.$levent->image)}}" class="wp-post-image" alt="Image alt">
										<div class="mask radius">
											<div class="mask-square"><i class="fa fa-link" aria-hidden="true"></i></div>
										</div>
									</a>
								</figure>
								<h3 class="entry-header">
									<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="{{ route('singlevent', $levent->id) }}">{{$levent->title}}</a>
								</h3>

								<div class="entry-meta-widget">
									<div class="date"><time datetime="2018-04-25T19:02:42+00:00"><i class="fa fa-calendar" aria-hidden="true"></i>{{\Carbon\Carbon::parse($levent->date)->format(' d M Y')}}</time></div>
									<div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">{{$levent->location}}</a></div>
									<div class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="{{$levent->social_link}}">Facebook</a></div>
								</div>
								
							</article>
							@endforeach
						</div>
					</aside>

				</div>
				<div class="clear"></div>
			</div>
		</div>
@endsection