
@extends('layouts.master')
@section('content')

<div class="item teaser-page-list">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">Our Programs</h1>
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
				<article class="list">
						<div class="short-content">
							<h1 class="entry-header">
								<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href=""><h1>Project In Progress</h1></a>
							</h1>
                            <div class="short-description">
								<p>Project Exist Afghanistan (Aug 15th 2021- Present): This project began on August 15, 2021 when Kabul fell to the Taliban. Caroline spent the first few days working with her American colleagues that she met in Paktika. Caroline collected contact information about people that worked for the United States specifically in Paktika Province. Everyone was hoping that somehow our Friends and Allies would be evacuated before the Unites States ceased operations on August 31st. After all the contact information was collected and submitted, Caroline started writing recommendation letters for the Special Immigrant Visa Program Applications for her Afghan Agricultural Colleagues. 
									In addition, after Kabul fell Caroline developed a connection with a few women, each of whom either worked for the Government of the Islamic Republic of Afghanistan (GIRoA) or on US Agency for International Development projects. All of them worked to empower women and improve the health of children. 
									After the Unites States vacated the Hamad Karzai International Airport on August 31, 2021. It became apparent that the US would not be able to facilitate or support evacuation for most of its Afghan Allies left in Afghanistan. Caroline continued to communicate with and support her friends and colleagues by providing financial support for housing and food. No clear path out of Afghanistan existed in the first few months, but luckily her team evacuation is now in progress. 

                                </p>
							</div>
						</div>
					</article>
					<div class="short-content">
					<h1 class="entry-header">
								<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href=""><h1>Completed Projects</h1></a>
							</h1>
						</div><br>		
					<!-- First cause -->
					@foreach ($causes as $cause)
					<article class="list">
						<div class="short-content">
							<figure>
								<a title="Image title" href="03-causes-single.html">
									<img width="272" height="150" src="{{asset('assets/news/'.$cause->image)}}" class="wp-post-image" alt="Image alt">
									<div class="mask radius">
										<div class="mask-square"><i class="fa fa-tint" aria-hidden="true"></i></div>
									</div>
								</a>
							</figure> 
							<h1 class="entry-header">
								<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="{{ route('project', $cause->id) }}">{{$cause->title}}</a>
							</h1>

							<div class="short-description">
								<p>{{$cause->description}}</p>	
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</article>
					@endforeach
					<!-- Pagination -->
					{{ $causes->render() }}
				</div>
				


				<!-- Right Column -->
				<div id="secondary" class="grid_4 widget-area" role="complementary">

					<aside id="wpltfb-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Latest Projects</h3>
							<div class="viewall fright"><a href="#" class="radius" title="View all chauses">view all</a></div>
							<div class="clear"></div>
						</div>
						
						<div class="widget-causes-body">
							@foreach($latestcauses as $lcause)
							<article class="cause-item">
								<figure>
									<a title="Image title" href="#">
										<img width="272" height="150" src="{{asset('assets/news/'.$lcause->image)}}" class="wp-post-image" alt="Image alt">
										<div class="mask radius">
											<div class="mask-square"><i class="fa fa-tint" aria-hidden="true"></i></div>
										</div>
									</a>
								</figure>
								<h3 class="entry-header">
									<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="#">{{$lcause->title}}</a>
								</h3>

								<div class="short-description">
									<p>{{$lcause->description}}</p>
								</div>
							</article>
							@endforeach
						</div>
					</aside>

				</div>
				<div class="clear"></div>
			</div>
		</div>

@stop