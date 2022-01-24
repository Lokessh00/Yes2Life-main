@extends('master')

@section('content')
    <h2 class="display-2">My Goal #{{$goal->id}}</h2>
    <div class="container">
        <a href="/goals" class="btn btn-primary mt-3">Back to All Goals</a>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-6">
                <p><span class="font-weight-bold">Goal Projection:</span> {{$goal->goal_projection}}</p>
                <p><span class="font-weight-bold">Calorie Budget:</span> {{$goal->calorie_budget}} kcal </p>
                <p><span class="font-weight-bold">Minimum Calorie:</span> {{$goal->minimum_calorie}} kcal</p>
                <p><span class="font-weight-bold">Weight Goals:</span> {{$goal->weight_goals}} kg</p>
            </div>
            <div class="col">
                <img src="{{asset('/images/pablo-healthy-life.png')}}" height="300" width="500" alt="">
            </div>
        </div>
    </div>

    <div class="container">
                <p class="text-center">"The Struggle You Are In Today Is Developing The Strength You Need for Tomorrow"</p>
                <p class="text-center"> User : {{$goal->user->name}}</p>
    </div>


    
@endsection