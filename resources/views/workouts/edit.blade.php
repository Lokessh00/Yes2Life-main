@extends('master')

@section('content')
<!-- header -->
<div class="container">
    <h2 class="display-1">My Workout</h2>
</div>
    
    
<div class="container">
  <div class="row justify-content-left">
    <div class="col-3 mt-3">
      <h3>Edit Exercises #{{$workout->id}}</h3>
    </div>
    <div class="col-3">
      <a href="/workouts" class="btn btn-primary rounded"><i class="bi bi-plus"></i> Add New Exercise</a>
    </div>
  </div>
</div>

<div class="container">
    <form action="/workouts/{{$workout->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
          @if (session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
          @endif
          <div class="row">
            <div class="col">
              <label for="day">Day</label>
              <select class="form-control" name="day" value="{{old('day', '')}}" id="day">
                @foreach ($day as $item)
                  <option value="{{$item->id}}">{{$item->days}}</option>
                @endforeach
              </select>
              @error('day')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col">
              <label for="exercise">Exercise</label>
              <select class="form-control" name="exercise" value="{{old('exercise', $workout->exercise_id)}}" id="exercise">
                  @foreach ($exercise as $item)
                    <option value="{{$item->id}}">{{$item->exercises}}</option>
                  @endforeach
              </select>
              @error('exercise')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col">
                <label for="intensity">Intensity</label>
                <select class="form-control" name="intensity" value="{{old('intensity', $workout->intensity)}}" id="intensity">
                  <option value="Low">Low</option>
                  <option value="Moderate">Moderate</option>
                  <option value="High">High</option>
              </select>
                @error('intensity')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            <div class="col">
              <label for="duration">Duration</label>
              <select class="form-control" name="duration" value="{{old('duration', $workout->duration)}}" id="duration">
                <option value="10 mins">10 mins</option>
                <option value="20 mins">20 mins</option>
                <option value="30 mins">30 mins</option>
                <option value="45 mins">45 mins</option>
                <option value="60 mins">60 mins</option>
                <option value="90 mins">90 mins</option>
                <option value="120 mins">120 mins</option>
            </select>
              @error('duration')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col">
              <label for="cal">Calories (kcal)</label>
              <input type="number" class="form-control" name="cal" value="{{old('cal', $workout->calorie)}}" id="cal" placeholder="Enter calories..">
              @error('cal')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i> Edit Exercise</button>
            </div>
          </div>
        </div>
      <!-- /.card-body -->
      </form>
      <!-- form -->
</div>

<!-- table -->
<table class="table table-hover table-striped">
    <thead>
      <tr>
        <th class="col-1" scope="col">Day</th>
        <th class="col-2" scope="col">Exercise</th>
        <th class="col-2" scope="col">Intensity</th>
        <th class="col-2" scope="col">Duration</th>
        <th class="col-2" scope="col">Calories Burned</th>
        <th class="text-center col-2" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($workouts as $item => $workouts)
        <tr>
         <td colspan="6"> {{$workouts->day->days}}</td>
        </tr>
        <tr>
          <th scope="row"></th>
          <td>{{$workouts->exercise->exercises}}</td>
          <td>{{$workouts -> intensity }}</td>
          <td>{{$workouts -> duration }}</td>
          <td>{{$workouts -> calorie }} (kcal)</td>
          <td>
            <div class="row justify-content-center">
              <div class="col-2">
                <a href="/workouts/{{$workouts->id}}"><i class="bi bi-eye"></i></a>
              </div>
              <div class="col-2">
                <a href="/workouts/{{$workouts->id}}/edit"><i class="bi bi-pencil"></i></a> 
              </div>
              <div class="col-2">
                <form action="/workouts/{{$workouts->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                      <button type="submit" value="delete" class="btn text-primary"><i class="bi bi-trash"></i></button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" align="center">No Goals</td> 
        </tr>
      @endforelse
    </tbody>
  </table>
<!-- table -->
@endsection