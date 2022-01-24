@extends('master')

@section('content')
<!-- header -->
<div class="container">
<h2 class="display-1">My Goals</h2>
</div>


<div class="container">
<h3>Edit #{{$goal->id}} Goals</h3>
</div>
<!-- form -->
<form action="/goals/{{$goal->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div class="card-body">
  <div class="row">
    <div class="col">
      <label for="goal_time">Goal Projection</label>
      <input type="date" class="form-control" name="goal_time" value="{{old('goal_time', $goal->goal_projection)}}" id="goal_time" placeholder="Enter date..">
      @error('goal_time')
         <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="col">
      <label for="cal">Calorie Budget (kcal)</label>
      <input type="number" class="form-control" name="cal" value="{{old('cal', $goal->calorie_budget)}}" id="cal" placeholder="Enter calories..">
      @error('cal')
         <div class="alert alert-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="col">
      <label for="cal_min">Minimum Calorie (kcal)</label>
      <input type="number" class="form-control" name="cal_min" value="{{old('cal_min', $goal->minimum_calorie)}}" id="cal_min" placeholder="Enter calories..">
      @error('cal_min')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col">
      <label for="weight">Weight Goals (kg)</label>
      <input type="number" class="form-control" name="weight" value="{{old('weight', $goal->weight_goals)}}" id="weight" placeholder="Enter goals..">
      @error('weight')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary">Edit New Goals</button>
    </div>
  </div>
</div>
<!-- /.card-body -->
</form>
<!-- form -->

<!-- table -->
<table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">Goals</th>
        <th scope="col">Goal Projection</th>
        <th scope="col">Calorie Budget</th>
        <th scope="col">Minimum Calorie</th>
        <th scope="col">Weight Goals</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($goals as $item => $goals)
        <tr>
          <th scope="row">{{$goals -> id }}</th>
          <td>{{$goals -> goal_projection }}</td>
          <td>{{$goals -> calorie_budget }} (kcal)</td>
          <td>{{$goals -> minimum_calorie }} (kcal)</td>
          <td>{{$goals -> weight_goals }} (kg)</td>
          <td>
            <div class="row justify-content-center">
              <div class="col-2">
                <a href="/goals/{{$goals->id}}"><i class="bi bi-eye"></i></a>
              </div>
              <div class="col-2">
                <a href="/goals/{{$goals->id}}/edit"><i class="bi bi-pencil"></i></a> 
              </div>
              <div class="col-2">
                <form action="/goals/{{$goals->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                      <button type="submit" value="delete" class="btn"><i class="bi bi-trash"></i></button>
                </form>
              </div>
            </div>
        </tr>
        @empty
        <tr>
          <td colspan="6" align="center">No Goals</td> 
        </tr>
      @endforelse
    </tbody>
  </table>
<!-- table -->
@endsection