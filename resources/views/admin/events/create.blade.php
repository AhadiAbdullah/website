
@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>News</h2>
               
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br/>
            @if($errors->any())
            <div class="alert alert-danger" role="alert" dir="ltr">
            {{ implode('', $errors->all(':message')) }}
            </div>
            @endif
                <form method="post" action="{{ route('event.store') }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                    @csrf
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="name">Title <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="title" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="title" placeholder="" required="required" type="text">
                        </div>
                    </div>
                    
                    <div class="item form-group">
                        <label  class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="date" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="date" placeholder="" required="required" type="date">
                        </div>
                    </div>
                  
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="location">Location <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="location" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="location" placeholder="" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="social">Social Link <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="social" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="social_link" placeholder="https://www.facebook.com" required="required" type="text">

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="image" class="form-control col-md-7 col-xs-12"  name="image" required="required" type="file">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="detail">Details <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="detail" required="required" name="detail" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="reset" class="btn btn-primary">Cancel</button>
                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection