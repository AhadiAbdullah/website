@extends('layouts.master')
@section('content')
<div class="item teaser-page" style="background: transparent url(images/temp/1920x714.jpg) 0px -100px fixed no-repeat; ">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">{{$event->title}}</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="#">Home Page</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="current">Upcomming Events</span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div id="main" class="site-main container_16">
			<div class="inner">
				<div id="primary" class="grid_11 suffix_1">

					<article class="single">
						
						<div class="event-info radius">
							
							<div class="month-time fleft">
								<!-- <span class="day fleft">15</span> -->
								<!-- <span class="month">July, 2018</span><br /> -->
								<span class="stime"><strong>{{\Carbon\Carbon::parse($event->date)->format(' d M Y')}}</strong></span>
							</div>
							

							
							<span class="event-address fleft">
								<span class="event-location fleft">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</span>
								{{$event->location}}
							</span>
							
							<a class="buttons bookplace fright radius"><i class="fa fa-check" aria-hidden="true"></i> Join us</a>
							
							<a class="buttons facebook fright radius" href="{{$event->social_link}}"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>

							<div class="clear"></div>
							<div class="event-map">
								<h3>Browse map</h3><br />
								<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=%C8%98tefan+Cel+Mare+%C8%99i+Sf%C3%AEnt,+Chi%C5%9Fin%C4%83u,+Moldova&amp;aq=2&amp;oq=Stefan+cel+Mare+si+s&amp;sll=37.0625,-95.677068&amp;sspn=58.598104,135.263672&amp;t=m&amp;ie=UTF8&amp;hq=%C8%98tefan+Cel+Mare+%C8%99i+Sf%C3%AEnt,&amp;hnear=Chisinau,+Moldova&amp;ll=47.025931,28.830556&amp;spn=0.026413,0.037752&amp;output=embed"></iframe>
							</div>

							<div class="book-your-place">
								
								<h3>Join us:</h3><br />
								<form action="processForm.php" id="reservation-form" method="post">

									<p>
										<label for="contactName"></label>
										<input class="radius"  type="text" name="contactName" id="contactName" value="" placeholder="Name*" required/>
									</p>
									<p>
										<label for="email"></label>
										<input class="radius" type="email" name="email" id="email" value="" placeholder="Email Adress*" required/>
									</p>

									<p>
										<label for="commentsText"></label>
										<textarea class="contactme-text required requiredField radius" name="message" cols="20" rows="5" placeholder="Do you have smth to say?" required="required"></textarea>
										
									</p>
									<p>
										<input  class="buttons radius send" value="Send !" type="submit"></input >
										<input type="hidden" name="submitted" id="submitted" value="true" />
									</p>
								</form>


							</div>
						</div>

						<div class="entry-content">
							
							<figure>
									<img width="848" height="352" src="{{asset('assets/events/'.$event->image)}}" class="wp-post-image" alt="Image alt">
							</figure> 

							<div class="long-description">
								<h3>{{$event->title}}</h3>
								<br /><p>{{$event->detail}}</p>
								
							</div>

							
							<div class="clear"></div>

						</div>

						<div class="clear"></div>
					
					</article>

					
				</div>
	
				<div id="secondary" class="grid_4 widget-area" role="complementary">

					
					<aside id="wpltfb-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Other Events</h3>
							<div class="viewall fright"><a href="04-event-list.html" class="radius" title="View all chauses">view all</a></div>
							<div class="clear"></div>
						</div>
						
						<div class="widget-event-body">
							@foreach ($events as $event)
							<article class="event-item">
								<figure>
									<a title="Image title" href="05-event-single.html">
										<img width="272" height="150" src="{{asset('assets/events/'.$event->image)}}" class="wp-post-image" alt="Image alt">
										<div class="mask radius">
											<div class="mask-square"><i class="fa fa-link" aria-hidden="true"></i></div>
										</div>
									</a>
								</figure>
								<h3 class="entry-header">
									<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="{{ route('singlevent', $event->id) }}">{{$event->title}}</a>
								</h3>

								<div class="entry-meta-widget">
									<div class="date"><time datetime="2018-04-25T19:02:42+00:00"><i class="fa fa-calendar" aria-hidden="true"></i>{{\Carbon\Carbon::parse($event->date)->format(' d M Y')}}</time></div>
									<div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">{{$event->location}}</a></div>
									<div class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="{{$event->social_link}}">Facebook</a></div>
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