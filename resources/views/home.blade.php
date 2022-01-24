<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>WeFit</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('/css/responsive.css')}}" rel="stylesheet" />
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Auth -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ asset('/')}}">
            <h3>
              Yes2Life
            </h3>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/caloriesCalculator"> Calories Calculator </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/video"> Exercise Video </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/recipe"> Diet Guide </a>
              </li>
              <li class="nav-item">
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a href="/profile" class="dropdown-item">
                                      Profile
                                    </a>

                                    <a href="/goals" class="dropdown-item">
                                      My Goals
                                    </a>

                                    <a href="/foods" class="dropdown-item">
                                      My Foods
                                    </a>

                                    <a href="/workouts" class="dropdown-item">
                                      My Exercise
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Weight Loss . Weight Gain . Maintain
                      </h1>
                      <p>Check our instructions and calories data table to help you filling your journey</p>
                      <a href="/instruction">
                        Instruction
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- end slider section -->
  </div>


<!-- end slider section -->
{{-- <div class="container mt-5" style="padding-top: 100px;">
  <h2 class="font-weight-bold">Add Day first, before starting to add food and exercises</h2>
</div>
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <form action="/days" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success')}}
              </div>
            @endif
            <div class="row">
              <div class="col">
                <label for="day">Day</label>
                <input type="date" class="form-control" name="day" value="{{old('day', '')}}" id="day" placeholder="Enter date..">
                @error('day')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary mt-4"><i class="bi bi-plus"></i>Add Day</button>
              </div>
            </div>
          </div>
        <!-- /.card-body -->
        </form>

      </div>
      <div class="col-3 mt-5 mr-5">
        <a href="/foods" class="btn btn-primary rounded"><i class="bi bi-plus"></i> Add Food</a>
        <a href="/workouts" class="btn btn-primary rounded"><i class="bi bi-plus"></i> Add Exercise</a>
      </div>
      <div class="col-4 mt-5">
        <h2>My Goals</h2>
        <div>
          @if (empty($goal))
            <p><span class="font-weight-bold">Goal Projection:</span> </p>
            <p><span class="font-weight-bold">Weight Goal:</span> </p>
          @else
            <p><span class="font-weight-bold">Goal Projection:</span> {{$goal->goal_projection}} </p>
            <p><span class="font-weight-bold">Weight Goal:</span> {{$goal->weight_goals}} kg </p>
          @endif
          <a href="/goals" class="btn btn-primary rounded"><i class="bi bi-plus"></i> Add Goals</a>
        </div>
      </div>
      
    </div>
  </div>



  <!-- event section -->
  <section class="event_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h3>
          Daily Calories
        </h3>
        <p>
          Keep up your spirit, don't give up!
        </p>
      </div>
      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th class="col-2" scope="col">Days</th>
            <th class="col-3" scope="col">Food</th>
            <th class="col-3" scope="col">Calorie Intake</th>
            <th class="col-2" scope="col">Exercise</th>
            <th class="col-2" scope="col">Calorie Burned</th>
          </tr>
        </thead>
        <tbody>
          
            @forelse ($days as $item => $days)
            <tr>
              <td>
                {{$days->days}}
              </td>
              <td>
                @foreach ($foods as $item)
                  @if ($item->day_id==$days->id)
                  {{$item->food}}<br>
                  @endif
                @endforeach
              </td>
              <td>
                @foreach ($foods as $item)
                  @if ($item->day_id==$days->id)
                  {{$item->calorie}} (kcal)<br>
                  @endif
                @endforeach
              </td>
              <td>
                @foreach ($workouts as $item)
                  @if ($item->day_id==$days->id)
                  {{$item->exercise->exercises}}<br>
                  @endif
                @endforeach
              </td>
              <td>
                @foreach ($workouts as $item)
                  @if ($item->day_id==$days->id)
                  {{$item->calorie}} (kcal)<br>
                  @endif
                @endforeach
              </td>
            @empty
            <tr>
              <td colspan="6" align="center">No Days</td> 
            </tr> 
            @endforelse
            </tr>
        
        </tbody>
      </table>
    
    </div>
  </section> --}}

  <!-- end event section -->

  <!-- info section & Footer -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about"> About </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="container-fluid footer_section">
    <p>
      &copy; 2021 All Rights Reserved By
      <a href="#">WeFit</a>
    </p>
  
  </footer>
  <!-- footer section & Footer -->

</body>

</html>