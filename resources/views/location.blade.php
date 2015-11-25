@extends('master')

@section('title')
    Where We Are
@endsection

@section('content')

    <div class="content">
        <div class="container_12">
            <h1 style="font-size:30px;" class="text-center">Where We Are</h1><br/>
            <div class="row">

                <div >
                    <img src="{{URL::asset('/images/mapp.jpg')}}" style="display: block;
    margin-left: auto;
    margin-right: auto;" >
                </div>

            </div>
        </div>
    </div>


@endsection


