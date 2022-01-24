@extends('master')

@section('content')
    <h2 class="display-2">My Food #{{$food->id}}</h2>
    <div class="container">
        <a href="/foods" class="btn btn-primary my-2">Back to All Foods</a>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-6">
                <p><span class="font-weight-bold">Eating Time:</span> {{$food->eating_time}}</p>
                <p><span class="font-weight-bold">Food:</span> {{$food->food}}</p>
                <p><span class="font-weight-bold">Calories:</span> {{$food->calorie}} kcal</p>
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