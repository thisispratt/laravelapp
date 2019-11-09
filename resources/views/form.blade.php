@extends('layouts/app')

@section('content')

<div class="wrapper">
    
    <div id="form-wrap">

        <h1>Form</h1>

        {!! Form::open(['url' => '/form']) !!}
        <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '',['class' => 'form-control ','placeholder' => 'Enter name'])}}
        <div>

        <div class="form-group">
        {{Form::label('location', 'Location')}}
        {{Form::text('location', '',['class' => 'form-control ','placeholder' => 'Enter Location'])}}
        </div>
        <div>
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
        
        <!-- <form action="/form/submit" method="GET">

            <div class = "form-row">
                <label for="name">
                    <div class="form-left">
                        NAME: 
                    </div>
                    <div class = "form-right">
                        <input type="text" name="name" placeholder="Enter name here">
                    </div>  
                </label>
            </div>

            <div class="form-row">
                <label for="url">
                    <div class="form-left">
                        LOCATION:
                    </div>
                    <div class= "form-right">

                    <input type="url" name="location-url" placeholder="Enter your location">
                    </div>
                </label>
            </div>

            <div class= "form">
                <label for="submit">
                    <button type="SUBMIT" class="btn btn-primary sub-button">SUBMIT</button>
                </label>
            </div>

        </form> -->
    </div>
</div>

@endsection
