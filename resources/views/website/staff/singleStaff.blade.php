@extends('layouts.master')
@section('content')
<div class="item teaser-page-list" style="background: transparent url(images/temp/1920x714.jpg) 0px -100px fixed no-repeat; ">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">{{$staff->name}}</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="{{route('home')}}">Home Page</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="current">Our Staff</span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div id="main" class="site-main container_16">
			<div class="inner">
				<div id="primary" class="grid_11 suffix_1">
					<article class="single">
						<!-- First canditate -->
						<div class="candidate radius grid_6">
							<div class="candidate-margins">
								
									<img width="200" height="210" src="{{asset('assets/staff/'.$staff->image)}}" class="wp-post-image" alt="Image alt">
									<div class="name">{{$staff->name}}</div>
									<div class="position">{{$staff->title}}</div>
					
								
							</div>
						</div>

						<div class="candidate-about fright">
							<h3>{{$staff->name}}</h3>
							<br /><p>{{$staff->details}}</p>
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
							
							<article class="cause-item">
								<figure>
									<a title="Image title" href="{{ route('project', $cause->id) }}">
										<img width="272" height="150" src="{{asset('assets/news/'.$cause->image)}}" class="wp-post-image" alt="Image alt">
										<div class="mask radius">
											<div class="mask-square"><i class="fa fa-tint" aria-hidden="true"></i></div>
										</div>
									</a>
								</figure>
								<h3 class="entry-header">
									<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="{{ route('project', $cause->id) }}">{{$cause->title}}</a>
								</h3>

								<div class="short-description">
									<p>{{$cause->description}}</p>
								</div>
							</article>

						</div>
					</aside>

				</div>
				<div class="clear"></div>
			</div>
		</div>
@endsection