@extends('master')
@section('title')
    Find a cruise
@endsection

@section('content')
    <div class="content">
        <div class="container_12">
            <h3>Search Cruises</h3>
            <hr>
            <form method="post" id="search_form" class="search_form form1">
                <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                <br>
                <div class="row">
                    <div class="col-lg-3" style="margin-left: 40px;" >

                        <div class="form-group row">
                            <label>Cruise Destination</label>
                            <select class="form-control input-sm" id="dest_id" name="dest_id">
                                <option value="0">All Cruise Destination</option>
                                @foreach($cruise_dest as $cd)
                                    <option value="{{$cd->destination->dest_id}}">{{$cd->destination->dest_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <label>Where to Begin/Start</label>
                            <select class="form-control input-sm" id="departure_port" name="departure_port">
                                <option value="0">Anywhere</option>
                                @foreach($cruise_depart as $cdp)
                                    <option value="{{$cdp->d_port->port_id}}">{{$cdp->d_port->port_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <label>Type of Ship</label>
                            <select class="form-control input-sm" id="ship_id" name="ship_id">
                                <option value="0">All Ships</option>
                                @foreach($cruise_ship as $cs)
                                    <option value="{{$cs->ship->ship_id}}">{{$cs->ship->ship_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <br>

                        <div class="row text-center">

                            <div class="col-lg-7">
                                <span id="count_result" style="font-size: 18px; font-family: 'Pathway Gothic One', sans-serif; float: right; padding:5px;"><label>{{sizeof($cruise)}}</label> Results Found</span>
                            </div>
                            <div class="col-lg-4 col-lg-offset-1">
                                <button class="btn pull-right" type="submit" id="view_result">Show Result</button>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8">

                        <div class="result">
                            <div class="text-center">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <span>--Press the Result button to view Cruise Itineraries--</span>
                            </div>
                        </div>

                    </div>

                </div>

                <br><br>

            </form>

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
        });

        $('#dest_id, #departure_port, #ship_id').change(function() {

            $.post('{{ url('/search_result')}}', { dest_id: $('#dest_id').val(), departure_port: $('#departure_port').val(), ship_id: $('#ship_id').val() }, onSuccess);

            function onSuccess(data){
                console.log(data);
                var temp_dest =  $('#dest_id').val();
                var temp_depart =  $('#departure_port').val();
                var temp_ship =  $('#ship_id').val();

                if (!$('#dest_id').is(':focus')){
                    $('#dest_id').html('<option value="0">Any Destination..</option>');
                    for(var i =0; i<data.cruise_dest.id.length; i++){
                        if(temp_dest == data.cruise_dest.id[i])
                            $('#dest_id').append('<option value="'+data.cruise_dest.id[i]+'" selected>'+data.cruise_dest.name[i]+'</option>');
                        else
                            $('#dest_id').append('<option value="'+data.cruise_dest.id[i]+'">'+data.cruise_dest.name[i]+'</option>');
                    }
                }

                if (!$('#departure_port').is(':focus')){
                    $('#departure_port').html('<option value="0">Any Port..</option>');
                    for(var j =0; j<data.cruise_depart.id.length; j++){
                        if(temp_depart == data.cruise_depart.id[j])
                            $('#departure_port').append('<option value="'+data.cruise_depart.id[j]+'" selected>'+data.cruise_depart.name[j]+'</option>');
                        else
                            $('#departure_port').append('<option value="'+data.cruise_depart.id[j]+'">'+data.cruise_depart.name[j]+'</option>');
                    }
                }

                if (!$('#ship_id').is(':focus')) {
                    $('#ship_id').html('<option value="0">Any Ship..</option>');
                    for (var k = 0; k < data.cruise_ship.id.length; k++) {
                        if (temp_ship == data.cruise_ship.id[k])
                            $('#ship_id').append('<option value="' + data.cruise_ship.id[k] + '" selected>' + data.cruise_ship.name[k] + '</option>');
                        else
                            $('#ship_id').append('<option value="' + data.cruise_ship.id[k] + '">' + data.cruise_ship.name[k] + '</option>');
                    }
                }
                $('#count_result').html('<label>' + data.size + '</label> Itineraries Found');
            }
        });

    </script>
@endsection