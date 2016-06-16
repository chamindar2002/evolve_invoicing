@extends('app')


@section('content')

@section('steps-menu')

     @include('partials.navsteps')
     
@stop


<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">New Customer</div>

    {!! Form::open(array('url' => 'customer', 'method' => 'post', 'class'=>'form-horizontal', 'files'=>true)) !!}

    <div class="panel-body">
        @include('customer._form',['submitButtonText' => 'Create'])
    </div>

    {!! Form::close() !!}

</div>




@stop
