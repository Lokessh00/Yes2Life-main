@extends('master')


@section('content')
    
<h2 class="display-2">My Food #{{$workout->id}}</h2>
    <div class="container">
        <a href="/workouts" class="btn btn-primary">Back to All Foods</a>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-6">
                <p><span class="font-weight-bold">Exercise:</span> {{$workout->exercise_id}}</p>
                <p><span class="font-weight-bold">Intensity:</span> {{$workout->intensity}}</p>
                <p><span class="font-weight-bold">Duration:</span> {{$workout->duration}} mins</p>
                <p><span class="font-weight-bold">Calories Burned:</span> {{$workout->calorie}} kcal</p>
            </div>
            <div class="col">
                <img src="{{asset('/images/pablo-healthy-life.png')}}" height="300" width="500" alt="">
            </div>
        </div>
        
    </div>
    <div class="container">
                <p class="text-center">"The Struggle You Are In Today Is Developing The Strength You Need for Tomorrow"</p>
            </div>
        </div>
    </div>
    @endsection
