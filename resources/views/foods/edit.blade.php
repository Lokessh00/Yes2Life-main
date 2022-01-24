@extends('master')

@section('content')
<!-- header -->
<div class="container">
      <h2 class="display-1">My Foods</h2>
</div>
    
    
<div class="container">
  <div class="row justify-content-left">
    <div class="col-2 mt-3">
      <h3>Edit Food</h3>
    </div>
    <div class="col-2">
      <a href="/foods" class="btn btn-primary rounded"><i class="bi bi-plus"></i> Add New Food</a>
    </div>
  </div>
</div>

<!-- form -->
<div class="container">
    <form action="/foods/{{$food->id}}" method="POST" enctype="multipart/form-data">
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
              @error('eating_time')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col">
              <label for="eating_time">Eating Time</label>
              <select class="form-control" name="eating_time" value="{{old('eating_time', $food->eating_time)}}" id="eating_time">
                  <option value="Breakfast">Breakfast</option>
                  <option value="Lunch">Lunch</option>
                  <option value="Dinner">Dinner</option>
                  <option value="Snack">Snack</option>
              </select>
              @error('eating_time')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col">
              <label for="food">Food</label>
              <input type="text" class="form-control" name="food" value="{{old('food', $food->food)}}" id="food" placeholder="Enter food..">
              @error('food')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="col">
              <label for="cal">Calories (kcal)</label>
              <input type="number" class="form-control" name="cal" value="{{old('cal_min', $food->calorie)}}" id="cal" placeholder="Enter calories..">
              @error('cal')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary mt-4">Edit Food</button>
            </div>
          </div>
        </div>
      <!-- /.card-body -->
      </form>
      <!-- form -->
</div>



<table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">Day</th>
        <th scope="col">Eating Time</th>
        <th scope="col">Food</th>
        <th scope="col">Calories</th>
        <th class="text-center" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($foods as $item => $foods)
        <tr>
          <td colspan="5">{{$foods->day->days}}</td>
        </tr>
        <tr>
            <th scope="row"></th>
            <td colspan="">{{$foods->eating_time}}</td>
            <td>{{$foods->food}}</td>
            <td>{{$foods->calorie}} (kcal)</td>
            <td>
                <div class="row justify-content-center">
                    <div class="col-1">
                        <a href="/foods/{{$foods->id}}"><i class="bi bi-eye"></i></a>
                    </div>
                    <div class="col-1">
                        <a href="/foods/{{$foods->id}}/edit"><i class="bi bi-pencil"></i></a> 
                    </div>
                    <div class="col-1">
                        <form action="/foods/{{$foods->id}}" method="POST">
                            <button type="submit" value="delete" class="btn text-primary"><i class="bi bi-trash"></i></button>
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" align="center">No Foods</td> 
        </tr>
      @endforelse
    </tbody>
  </table>
@endsection