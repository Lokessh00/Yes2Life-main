@extends('master')

@section('content')
    <!-- header -->
<div class="container">
    <h2 class="display-1">My Profile</h2>
</div>

<!-- form -->
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/profile" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                    @endif
                <div class="row">
                  <label for="name">Nickname</label>
                  <input type="text" class="form-control" name="name" value="{{old('name', '')}}" id="name" placeholder="Enter name..">
                  @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
        
                <div class="row">
                  <label for="age">Age</label>
                  <input type="number" name="age" class="form-control" value="{{old('age', '')}}" id="age" placeholder="Enter age..">
                  @error('age')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
        
                <div class="row">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender" value="{{old('gender', '')}}" id="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                  </select>
                  @error('gender')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
        
                <div class="row">
                  <label for="height">Height</label>
                  <input type="number" class="form-control" name="height" value="{{old('height', '')}}" id="height" placeholder="Enter height..">
                  @error('height')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
        
                <div class="row">
                  <label for="weight">Weight</label>
                  <input type="number" class="form-control" name="weight" value="{{old('weight', '')}}" id="weight" placeholder="Enter weight..">
                  @error('weight')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
        
                <div class="row mb-4">
                  <label for="exercise">Exercise Intensity</label>
                  <select class="form-control" name="exercise" value="{{old('exercise', '')}}" id="exercise">
                      <option value="Often">Often</option>
                      <option value="Sometimes">Sometimes</option>
                      <option value="Rarely">Rarely</option>
                  </select>
                  @error('exercise')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
        
                <div class="row">
                  <button type="submit" class="btn btn-primary mt-4">Edit Profiles</button>
                </div>
        
              </div>
              <!-- /.card-body -->
            </form>
        </div>
              <!-- form -->

        @forelse ($profiles as $item => $profiles)
        <div class="col-3 align-self-start" style="margin-top: 2%; margin-left: 20%;">
          <div class="row"><span class="font-weight-bold mr-2">Name: </span>{{$profiles->name}}</div>
          <div class="row"><span class="font-weight-bold mr-2">Age: </span>{{$profiles->age}}</div>
          <div class="row"><span class="font-weight-bold mr-2">Gender: </span>{{$profiles->gender}}</div>
          <div class="row"><span class="font-weight-bold mr-2">Height: </span>{{$profiles->height}} cm</div>
          <div class="row"><span class="font-weight-bold mr-2">Weight: </span>{{$profiles->weight}} kg</div>
          <div class="row"><span class="font-weight-bold mr-2">Exercise Intensity: </span>{{$profiles->exercise}}</div>
        </div>
        <div class="col-2 align-self-start mt-4 ">
          <a href="/profile/{{$profiles->id}}/edit"><i class="btn btn-primary bi bi-pencil mr-6"></i></a>
        </div> 
        @empty
        <div class="col-3 align-self-start" style="margin-top: 2%; margin-left: 20%;">
          <div class="row"><span class="font-weight-bold mr-2">Name: </span></div>
          <div class="row"><span class="font-weight-bold mr-2">Age: </span></div>
          <div class="row"><span class="font-weight-bold mr-2">Gender: </span></div>
          <div class="row"><span class="font-weight-bold mr-2">Height: </span></div>
          <div class="row"><span class="font-weight-bold mr-2">Weight: </span></div>
          <div class="row"><span class="font-weight-bold mr-2">Exercise Intensity: </span></div>
        </div>
        
        @endforelse          
        </div>

    </div>      
</div>
@endsection