@extends('master')

@section('title')
    About Us
@endsection

@section('content')

    <div class="content">
        <div class="container_12">
            <h1 style="font-size:30px;" class="text-center">About Us</h1><br/>
            <div class="row">

                <div class="col-lg-4 col-lg-offset-1">
                    <img src="{{URL::asset('/images/logo.gif')}}" >
                </div>
                <div class="col-lg-7"><br/>
                    <p>Carnival Corporation & plc ("Carnival") is an American-British cruise company and the world's largest cruise ship operator, with a combined fleet of over 100 vessels across 10 cruise line brands,</p><br/><p> With the fathom brand announced for launch in 2016. A dual listed company, Carnival is composed of two companies, Carnival Corporation and Carnival plc, which are combined and function as one entity, </p><br/><p> Despite having separate listings on the New York and London stock exchanges respectively. As such, Carnival is the only company in the world to be listed on both the S&P 500 and FTSE 100 indices.</p><br/><p> The Carnival group has global headquarters in Doral, Florida in the United States and Southampton, Hampshire in the United Kingdom, with regional headquarters in Australia, Germany, Italy, United Kingdom and United States.</p>
                </div>
            </div>
        </div>
    </div>


@endsection


