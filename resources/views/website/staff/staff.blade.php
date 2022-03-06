@extends('layouts.master')
@section('content')
		<div class="item teaser-page-list">
			<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">Our Staff</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="{{route('home')}}">Home Page</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="current">Staff</span>	
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="main" class="site-main container_16">
			<div class="inner">
				<!-- First canditate -->
                @foreach($staff as $emp)
				<div class="candidate radius grid_4">
					<div class="candidate-margins">
						<a href="{{route('singlestaff', $emp->id)}}">
							<img width="200" height="210" src="{{asset('assets/staff/'.$emp->image)}}" class="wp-post-image" alt="Image alt">
							<div class="name">{{$emp->name}}</div>
							<div class="position">{{$emp->title}}</div>
						</a>	
					</div>
				</div>
				@endforeach
				<div class="clear"></div>
			</div>
		</div>    
@endsection