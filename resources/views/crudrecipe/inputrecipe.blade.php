@extends('master')

@section('content')

<!--Header-->
<div class="container">
    <h2 class="display-1">All Recipes</h2>
</div>   

<div class="container">
    

<!-- Form-->
<div class="container">
    <div class="card-body">
        @if(session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for=""> Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for=""> Description</label>
                <!--<input type="text" name="description" class="form-control">-->
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for=""> Steps</label>
                {{-- <input type="text" name="steps" class="form-control"> --}}
                <textarea name="steps" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for=""> Preparation Time</label>
                <input type="text" name="prep_time" class="form-control">
            </div>
            <div class="form-group">
                <label for=""> Cooking Time</label>
                <input type="text" name="cook_time" class="form-control">
            </div>
            <div class="form-group">
                <label for=""> Serving</label>
                <input type="text" name="serving" class="form-control">
            </div>
            <div class="form-group">
                <label for=""> Ingredients</label>
                <textarea name="ingredients" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for=""> Tools</label>
                <textarea name="tools" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for=""> Name</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </div>
</div>

@endsection