@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Register User</h2>
               
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br/>
            @if($errors->any())
            <div class="alert alert-danger" role="alert" dir="ltr">
            {{ implode('', $errors->all(':message')) }}
            </div>
            @endif
                <form method="post" action="{{ route('register') }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                    @csrf
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="name">Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="name" placeholder="" required="required" type="text">
                        </div>
                    </div>
        
                  
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="email">Email <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="email" placeholder="" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="password">Password <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="password"  required="required" type="password">

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="password_confirmation"> Confirm Password <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="password_confirmation" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="password_confirmation"  required="required" type="password">

                        </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection