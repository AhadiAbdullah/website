@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Events</h2>
               
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br/>
            @if($errors->any())
            <div class="alert alert-danger" role="alert" dir="ltr">
            {{ implode('', $errors->all(':message')) }}
            </div>
            @endif
            <form method="post" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                    @csrf
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="title">Title <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="title" value="{{$event->title}}" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="title" placeholder="" required="required" type="text">
                        </div>
                    </div>
                    
                    <div class="item form-group">
                        <label  class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="{{$event->date->toDateString()}}" id="date" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="date" placeholder="" required="required" type="date">
                        </div>
                    </div>
                  
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="location">Location <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="{{$event->location}}" id="location" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="location" placeholder="" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="social">Social Link <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="{{$event->social_link}}" id="social" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="social_link" placeholder="https://www.facebook.com" required="required" type="text">

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fileUpload" class="form-control col-md-7 col-xs-12"  name="image" required="required" type="file">
                            <input type="hidden" id="hidImage" name="image" value="{{$event->image}}">

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="detail">Details <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="detail" required="required" name="detail" class="form-control col-md-7 col-xs-12">{{$event->detail}}</textarea>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="reset" class="btn btn-primary">Cancel</button>
                            <button onclick="checkFile()" id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@section('scripts')

<script type="text/javascript">
    function checkFile(){
        if( !$("#fileUpload").val() ) {
            $("hidImage").css('disabled',true);
        }
        
    }
</script>
@endsection
@endsection