@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="cards">
                        <div class="cards-body">

                            <h1 class="text-white">{{ $train->agency }}</h1>

                            <p class="cards-text">{{ $train->departure_station }}</p>
                            <p class="cards-text">{{ $train->arrival_station }}</p>
                            <p class="cards-text">{{ $train->departure_time }}</p>
                            <p class="cards-text">{{ $train->arrival_time }}</p>
                            <p class="cards-text">{{ $train->is_on_time }}</p>
                            <p class="cards-text">{{ $train->is_deleted }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


{{-- "agency" => "Alexzander Bahringer"
"departure_station" => "Dr."
"arrival_station" => "Prof."
"departure_time" => "07:47:48"
"arrival_time" => "17:59:24"
"code_of_train" => "29998"
"train_car_number" => 13
"is_on_time" => 0
"is_deleted" => 1 --}}
