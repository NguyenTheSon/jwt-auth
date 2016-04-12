@extends('layouts/default')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Please sign in</h3>
    </div>
    <div class="panel-body">
        {!! Form::open([app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('login'), 'class' => 'form-signin form-horizontal','id'=>'idForm']) !!}
        <div class="form-group">
            {!! Form::label('email', 'Email', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">                    
                {!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'awesome@awesome.com', 'autofocus']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('password', 'password', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6"> 
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) !!}
            </div>
        </div>
        <div class="form-group checkbox"> 
            <div class="col-sm-4"></div>
            <div class="col-sm-3">{!! Form::checkbox('remember', '1') !!} Remember me</div>
            <div class="col-sm-5"><a href="#"><u>Forgot Password?</u></a></div>
        </div>
        <hr>
        <div class="form-group">
            <div class="col-sm-4"></div>
            <div class="col-sm-2"> 
                {!! Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
            </div>
            <div class="col-sm-2"> 
                <a class="btn btn-lg btn-info btn-block" href="#"> Register</a>
            </div>
            {!! Form::close() !!}            
        </div>
    </div>
@endsection



