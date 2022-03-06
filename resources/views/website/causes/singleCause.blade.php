@extends('layouts.master')
@section('content')
	<!-- #masthead .site-header -->


    <div class="item teaser-page" style="background: transparent url(images/temp/1920x714.jpg) 0px -100px fixed no-repeat; ">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">{{$cause['title']}}</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="{{route('home')}}">Home Page</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="current">Our Causes</span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div id="main" class="site-main container_16">
			<div class="inner">
				<div id="primary" class="grid_11 suffix_1">
					<article class="single">
						
						<div class="entry-content">
							
							<figure>
								
									<img width="848" height="352" src="{{asset('assets/news/'.$cause->image)}}" class="wp-post-image" alt="Image alt">

								
							</figure> 
							
						

							<div class="long-description">
								<h3>{{$cause->title}}</h3>
								<br /><p>{{$cause->description}}</p>
								
							</div>

							
							<div class="clear"></div>

						</div>

						<div class="clear"></div>
					
					</article>

					
				</div>
	
				<div id="secondary" class="grid_4 widget-area" role="complementary">

					<aside id="wpltfb-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Latest Projects</h3>
							<div class="viewall fright"><a href="{{route('cause')}}" class="radius" title="View all chauses">view all</a></div>
							<div class="clear"></div>
						</div>
						
						<div class="widget-causes-body">
						@foreach($causes as $cause)
							<article class="cause-item">
								<figure>
									<a title="Image title" href="02-causes-list.html">
										<img width="272" height="150" src="{{asset('assets/news/'.$cause->image)}}" class="wp-post-image" alt="Image alt">
										<div class="mask radius">
											<div class="mask-square"><i class="fa fa-tint" aria-hidden="true"></i></div>
										</div>
									</a>
								</figure>
								<h3 class="entry-header">
									<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="02-causes-list.html">{{$cause->title}}</a>
								</h3>

								<div class="short-description">
									<p>{{$cause->description}}</p>
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