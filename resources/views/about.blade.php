@extends('master')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col mr-5">
      <img class="d-block w-100" src={{asset('images/1.jpg')}} width="160" height="400" alt="First slide">
    </div>
    <div class="col">
      <div class="mt-4">
        <h2 class="text-center font-weight-bold">What is Yes2Life ?</h2>
        <h3 class="text-center mb-5">Yes2Life is a healty website</h3>
        <h4 style="text-align:center">We are helping you to maintain your health!</h4>
        <p class="mt-2" style="text-indent: 40px">Health is something that is easy to take for granted. When we start losing it, it's hard to believe we spent so long not valuing it. To ensure that you stay as healthy as possible, we've outlined a guide that should help you do just that -- detailing your physical, mental, and emotional health. <br>Why would you want to live any other way?</p>
           <p style="text-indent: 40px">Healthy eating means eating a variety of foods that give you the nutrients you need to maintain your health, feel good, and have energy. These nutrients include protein, carbohydrates, fat, water, vitamins, and minerals. Nutrition is important for everyone.</p>
        </div>
    </div>
  </div>
</div>
@endsection