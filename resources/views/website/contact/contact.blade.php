@extends('layouts.master')
@section('content')
<div class="item teaser-page-list">
	<div class="container_16">
				<aside class="grid_10">
					<h1 class="page-title">Contacts</h1>
				</aside>
				<div class="grid_6">
					<div id="rootline">
						<a href="{{route('home')}}">Home Page</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="current">Contact</span>	
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
							 <!-- Alert User -->
                             @if(Session::has('success'))
                                <div class="alert green">
                                    {{Session::get('success')}}
                                </div>
                            @endif
							<div class="long-description">
								<h3>What is in your mind?</h3>
							</div>
							<br />
								<h3>Write to Us:</h3><br />
								<form action="{{route('contact.save')}}" id="contact-form" method="post">
                                    @csrf
									
										<label for="contactName"></label>
										<input class="radius"  type="text" name="name" id="contactName" value="{{old('name')}}" placeholder="Name*" required/>
                                         <!-- Show error -->
                                        @if ($errors->has('name'))
                                            <span class="alert red">
                                                {{ $errors->first('name') }}
											</span>
                                        @endif
										<span class="clear"></span>
									<br>
									
										<label for="email"></label>
										<input class="radius" type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email Adress*" required/>
                                         <!-- Show error -->
                                        @if ($errors->has('email'))
                                            <span class="alert red">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif  
										<span class="clear"></span>
										<br>
										<label for="phone"></label>
										<input class="radius" type="tel" id="phone" value="{{old('phone')}}" name="phone" placeholder="Phone" required pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                         <!-- Show error -->
                                        @if ($errors->has('phone'))
                                            <span class="alert red">
                                                {{ $errors->first('phone') }}
											</span>
                                        @endif  
										<span class="clear"></span>
										<br>
										<label for="subject"></label>
										<input class="radius" type="text" name="subject" id="subject" value="{{old('subject')}}" placeholder="Subject" required/>
                                         <!-- Show error -->
                                        @if ($errors->has('subject'))
                                            <span class="alert red">
                                                {{ $errors->first('subject') }}
											</span>
                                        @endif  
										<span class="clear"></span>
										<br>
										<label for="commentsText"></label>
										<textarea class="contactme-text required requiredField radius" name="message" cols="10" rows="10" placeholder="Message" required="required">{{old('message')}}</textarea>
                                           <!-- Show error -->
                                            @if ($errors->has('message'))
                                                <span class="alert red">
                                                    {{ $errors->first('message') }}
												</span>
                                            @endif  
										<span class="clear"></span>
										<br>
										<input  class="buttons radius send" id="submit" value="Send !" type="submit"></input >
										<input type="hidden" name="submitted" id="submitted" value="true" />
									</form>
								<div class="clear"></div>
							</div>
						<div class="clear"></div>
					</article>
				</div>
				<div id="secondary" class="grid_4 widget-area" role="complementary">
					<aside id="wpltfb-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Say Hello!</h3>
							<div class="clear"></div>
						</div>
						<div class="text-widget-body">
							<address class="vcard">
								<p class="adr">
									<b>Address</b> -<span class="street-address"> Fergus Falls, Minnesota, U.S.A</span><br>
								</p>
								<b>Phone:</b><span class="tel"> +1 (514)456 7899</span><br />
								<b>E-mail:</b><span class="email"> caroline.clarin@friendsandalliesproject.org</span><br />
								<b>Website:</b><span class="url">www.friendsandalliesproject.org</span><br />
							</address>
						</div>
					</aside>
					<aside id="wpltfb3-2" class="widget WPlookCauses">	
						<div class="widget-title">
							<h3>Events</h3>
							<div class="viewall fright"><a href="{{route('cause')}}" class="radius" title="View all chauses">view all</a></div>
							<div class="clear"></div>
						</div>
						<div class="widget-event-body">
							<article class="event-item">
								<figure>
									<a title="Image title" href="{{ route('project', $event->id) }}">
										<img width="272" height="150" src="{{asset('assets/events/'.$event->image)}}" class="wp-post-image" alt="Image alt">
										<div class="mask radius">
											<div class="mask-square"><i class="fa fa-link" aria-hidden="true"></i></div>
										</div>
									</a>
								</figure>
								<h3 class="entry-header">
									<a title="Change a Life Through Education Lorem Ipsum dolar sit and dolar" href="{{ route('project', $event->id) }}">{{$event->title}}</a>
								</h3>

								<div class="entry-meta-widget">
									<div class="date"><time datetime="2018-04-25T19:02:42+00:00"><i class="fa fa-calendar" aria-hidden="true"></i> {{\Carbon\Carbon::parse($event->date)->format('d M Y')}}</time></div>
									<div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">{{$event['location']}}</a></div>
									<div class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="{{$event['social_link']}}">Facebook</a></div>
								</div>
							</article>
						</div>
					</aside>
				</div>
				<div class="clear"></div>
			</div>
		</div>
@endsection
