@extends("admin.layouts.default")     
@section("content")
<!--main content start-->
<div class="container">

    {{ Form::open(array('url' => 'admin','class' => "login-form")) }} 
    {{ Form::token() }}
    <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        @if(count($errors))

        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <br/>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            {{ Form::text('username','',array('class'=>'form-control','placeholder'=>'Username','autofocus')) }}
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            {{ Form::text('password','',array('class'=>'form-control','placeholder'=>'Password')) }}
        </div>
        <label class="checkbox">
            {{ Form::checkbox('checkbox','remember-me') }} Remember me
            <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
    </div>
    {{ Form::close() }}
    <div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</div>
<!--main content end-->
@stop