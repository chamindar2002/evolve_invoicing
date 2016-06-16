@extends('app')


@section('content')

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Customers &nbsp;

        {!! link_to("customer/create", '', array('class'=>'fa fa-plus')) !!}</div>

    <!-- Table -->
    <table class="table">
        ...
    </table>
</div>


@stop


    


