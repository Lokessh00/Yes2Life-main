@extends('master')

@push('script')
<script type="text/javascript" src="{{asset('/DataTables/datatables.min.js')}}"></script>
<script>
    $(function () {
      $("myTable").DataTable();
    });
</script>
@endpush

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('/DataTables/datatables.min.css')}}"/>
@endpush


@section('content')
<div class="container">
    <h1 class="display-4 font-weight-bold mb-5">Welcome to We.Fit!</h1>
    <h2>Instruction</h2>

    <p>To use this website for your calorie journal, this is what you should do:</p>

    <ol>
        <li>Set your goal first to remind you until when you should achieve your weight goal</li>
        <li>Create or input 'day' you want to insert your food and exercise data from WeFit home page</li>
        <li>Add what you are eating on that day at 'Food Page'</li>
        <li>Add what exercise that you did on that day at 'Exercise Page'</li>
        <li>You can also edit the data for 'Food' and 'Exercise' which you already input before</li>
        <li>And now you can see your daily calorie intake and calorie burned from exercise at the Daily Calories table at WeFit home page</li>
    </ol>
</div>

<div class="container-fluid">
    <div class="row">
    <h2 class="mt-5 mb-5">Check our guide table for exercise below</h2>
    </div>
</div>


<h3 align="center" class="mt-3 mb-2"><strong>Calories Burned in 30-minute activities</strong></h3>
   
   <div class="container mt-4" style="overflow-x:auto;">
   <table id="myTable"  class=" table table-bordered table-striped">
      
      <tbody>
         <tr>
            <td>
            <h4><strong>Gym Activities</strong></h4>
            </td>
            <td>
            <h4><strong>125-pound person</strong></h4>
            </td>
            <td>
            <h4><strong>155-pound person</strong></h4>
            </td>
            <td>
            <h4><strong>185-pound person</strong></h4>
            </td>
         </tr>
         <tr>
            <td>
            <p>Weight Lifting: general</p>
            </td>
            <td>
            <p>90</p>
            </td>
            <td>
            <p>108</p>
            </td>
            <td>
            <p>126</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Aerobics: water</p>
            </td>
            <td>
            <p>120</p>
            </td>
            <td>
            <p>144</p>
            </td>
            <td>
            <p>168</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Stretching, Hatha Yoga</p>
            </td>
            <td>
            <p>120</p>
            </td>
            <td>
            <p>144</p>
            </td>
            <td>
            <p>168</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Calisthenics: moderate</p>
            </td>
            <td>
            <p>135</p>
            </td>
            <td>
            <p>162</p>
            </td>
            <td>
            <p>189</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Aerobics: low impact</p>
            </td>
            <td>
            <p>165</p>
            </td>
            <td>
            <p>198</p>
            </td>
            <td>
            <p>231</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Stair Step Machine: general</p>
            </td>
            <td>
            <p>180</p>
            </td>
            <td>
            <p>216</p>
            </td>
            <td>
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Weight Lifting: vigorous</p>
            </td>
            <td>
            <p>180</p>
            </td>
            <td>
            <p>216</p>
            </td>
            <td>
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Aerobics, Step: low impact</p>
            </td>
            <td>
            <p>210</p>
            </td>
            <td>
            <p>252</p>
            </td>
            <td>
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Aerobics: high impact</p>
            </td>
            <td>
            <p>210</p>
            </td>
            <td>
            <p>252</p>
            </td>
            <td>
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Bicycling, Stationary: moderate</p>
            </td>
            <td>
            <p>210</p>
            </td>
            <td>
            <p>252</p>
            </td>
            <td>
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Rowing, Stationary: moderate</p>
            </td>
            <td>
            <p>210</p>
            </td>
            <td>
            <p>252</p>
            </td>
            <td>
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Calisthenics: vigorous</p>
            </td>
            <td>
            <p>240</p>
            </td>
            <td>
            <p>306</p>
            </td>
            <td>
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Circuit Training: general</p>
            </td>
            <td>
            <p>240</p>
            </td>
            <td> </td>
            <td> </td>
         </tr>
         <tr>
            <td>
            <p>Rowing, Stationary: vigorous</p>
            </td>
            <td>
            <p>255</p>
            </td>
            <td>
            <p>369</p>
            </td>
            <td>
            <p>440</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Elliptical Trainer: general</p>
            </td>
            <td>
            <p>270</p>
            </td>
            <td>
            <p>324</p>
            </td>
            <td>
            <p>378</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Ski Machine: general</p>
            </td>
            <td>
            <p>285</p>
            </td>
            <td>
            <p>342</p>
            </td>
            <td>
            <p>399</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Aerobics, Step: high impact</p>
            </td>
            <td>
            <p>300</p>
            </td>
            <td>
            <p>360</p>
            </td>
            <td>
            <p>420</p>
            </td>
         </tr>
         <tr>
            <td>
            <p>Bicycling, Stationary: vigorous</p>
            </td>
            <td>
            <p>315</p>
            </td>
            <td>
            <p>278</p>
            </td>
            <td>
            <p>441</p>
            </td>
         </tr>
      {{-- </tbody>
   </table>
   
   <p> </p>
   
   <table class="special-case-border" cellspacing="0" cellpadding="0" border="0">
      <tbody> --}}
         <tr>
            <td style="width:216px;">
            <h4><strong>Training and Sports Activities</strong></h4>
            </td>
            <td style="width:138px;"> </td>
            <td style="width:138px;"> </td>
            <td colspan="2" style="width:132px;"> </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Bowling</p>
            </td>
            <td style="width:138px;">
            <p>90</p>
            </td>
            <td style="width:144px;">
            <p>108</p>
            </td>
            <td style="width:127px;"> </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Dancing: slow, waltz, foxtrot</p>
            </td>
            <td style="width:138px;">
            <p>90</p>
            </td>
            <td style="width:144px;">
            <p>108</p>
            </td>
            <td style="width:127px;">
            <p>125</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Frisbee</p>
            </td>
            <td style="width:138px;">
            <p>85</p>
            </td>
            <td style="width:144px;">
            <p>105</p>
            </td>
            <td style="width:127px;">
            <p>125</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Volleyball: non-competitive, general play</p>
            </td>
            <td style="width:138px;">
            <p>90</p>
            </td>
            <td style="width:144px;">
            <p>108</p>
            </td>
            <td style="width:127px;">
            <p>126</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Water Volleyball</p>
            </td>
            <td style="width:138px;">
            <p>90</p>
            </td>
            <td style="width:144px;">
            <p>108</p>
            </td>
            <td style="width:127px;">
            <p>126</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Golf: using cart</p>
            </td>
            <td style="width:138px;">
            <p>105</p>
            </td>
            <td style="width:144px;">
            <p>126</p>
            </td>
            <td style="width:127px;">
            <p>147</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Gymnastics: general</p>
            </td>
            <td style="width:138px;">
            <p>120</p>
            </td>
            <td style="width:144px;">
            <p>144</p>
            </td>
            <td style="width:127px;">
            <p>168</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Horseback Riding: general</p>
            </td>
            <td style="width:138px;">
            <p>57</p>
            </td>
            <td style="width:144px;">
            <p>70</p>
            </td>
            <td style="width:127px;">
            <p>84</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p><a href="/exercise-and-fitness/an-introduction-to-tai-chi">Tai Chi</a></p>
            </td>
            <td style="width:138px;">
            <p>120</p>
            </td>
            <td style="width:144px;">
            <p>144</p>
            </td>
            <td style="width:127px;">
            <p>168</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Volleyball: competitive, gymnasium play</p>
            </td>
            <td style="width:138px;">
            <p>226</p>
            </td>
            <td style="width:144px;">
            <p>281</p>
            </td>
            <td style="width:127px;">
            <p>335</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Walking: 3.5 mph (17 min/mi)</p>
            </td>
            <td style="width:138px;">
            <p>107</p>
            </td>
            <td style="width:144px;">
            <p>133</p>
            </td>
            <td style="width:127px;">
            <p>159</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Badminton: general</p>
            </td>
            <td style="width:138px;">
            <p>114</p>
            </td>
            <td style="width:144px;">
            <p>141</p>
            </td>
            <td style="width:127px;">
            <p>168</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Walking: 4 mph (15 min/mi)</p>
            </td>
            <td style="width:138px;">
            <p>135</p>
            </td>
            <td style="width:144px;">
            <p>175</p>
            </td>
            <td style="width:127px;">
            <p>189</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Kayaking</p>
            </td>
            <td style="width:138px;">
            <p>150</p>
            </td>
            <td style="width:144px;">
            <p>180</p>
            </td>
            <td style="width:127px;">
            <p>210</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Skateboarding</p>
            </td>
            <td style="width:138px;">
            <p>150</p>
            </td>
            <td style="width:144px;">
            <p>180</p>
            </td>
            <td style="width:127px;">
            <p>210</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Softball: general play</p>
            </td>
            <td style="width:138px;">
            <p>141</p>
            </td>
            <td style="width:144px;">
            <p>180</p>
            </td>
            <td style="width:127px;">
            <p>210</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Whitewater: rafting, kayaking</p>
            </td>
            <td style="width:138px;">
            <p>150</p>
            </td>
            <td style="width:144px;">
            <p>180</p>
            </td>
            <td style="width:127px;">
            <p>210</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Dancing: disco, ballroom, square</p>
            </td>
            <td style="width:138px;">
            <p>165</p>
            </td>
            <td style="width:144px;">
            <p>198</p>
            </td>
            <td style="width:127px;">
            <p>231</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Golf: carrying clubs</p>
            </td>
            <td style="width:138px;">
            <p>165</p>
            </td>
            <td style="width:144px;">
            <p>198</p>
            </td>
            <td style="width:127px;">
            <p>231</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Dancing: Fast, ballet, twist</p>
            </td>
            <td style="width:138px;">
            <p>180</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Hiking: cross-country</p>
            </td>
            <td style="width:138px;">
            <p>170</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Skiing: downhill</p>
            </td>
            <td style="width:138px;">
            <p>180</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Swimming: general</p>
            </td>
            <td style="width:138px;">
            <p>180</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Walk/Jog: jog &lt;10 min.</p>
            </td>
            <td style="width:138px;">
            <p>180</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Water Skiing</p>
            </td>
            <td style="width:138px;">
            <p>180</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Wrestling</p>
            </td>
            <td style="width:138px;">
            <p>180</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Basketball: wheelchair</p>
            </td>
            <td style="width:138px;">
            <p>195</p>
            </td>
            <td style="width:144px;">
            <p>234</p>
            </td>
            <td style="width:127px;">
            <p>273</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Ice Skating: general</p>
            </td>
            <td style="width:138px;">
            <p>210</p>
            </td>
            <td style="width:144px;">
            <p>252</p>
            </td>
            <td style="width:127px;">
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Racquetball: casual, general</p>
            </td>
            <td style="width:138px;">
            <p>210</p>
            </td>
            <td style="width:144px;">
            <p>252</p>
            </td>
            <td style="width:127px;">
            <p>293</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Rollerblading/skating (Casual)</p>
            </td>
            <td style="width:138px;">
            <p>311</p>
            </td>
            <td style="width:144px;">
            <p>386</p>
            </td>
            <td style="width:127px;">
            <p>461</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Rollerblading/skating (Fast)</p>
            </td>
            <td style="width:138px;">
            <p>340</p>
            </td>
            <td style="width:144px;">
            <p>421</p>
            </td>
            <td style="width:127px;">
            <p>503</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Scuba or skin diving</p>
            </td>
            <td style="width:138px;">
            <p>210</p>
            </td>
            <td style="width:144px;">
            <p>252</p>
            </td>
            <td style="width:127px;">
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Sledding, luge, toboggan</p>
            </td>
            <td style="width:138px;">
            <p>199</p>
            </td>
            <td style="width:144px;">
            <p>247</p>
            </td>
            <td style="width:127px;">
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Soccer: general</p>
            </td>
            <td style="width:138px;">
            <p>210</p>
            </td>
            <td style="width:144px;">
            <p>252</p>
            </td>
            <td style="width:127px;">
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;height:37px;">
            <p>Tennis: general</p>
            </td>
            <td style="width:138px;height:37px;">
            <p>210</p>
            </td>
            <td style="width:144px;height:37px;">
            <p>252</p>
            </td>
            <td style="width:127px;height:37px;">
            <p>294</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Basketball: playing a game</p>
            </td>
            <td style="width:138px;">
            <p>240</p>
            </td>
            <td style="width:144px;">
            <p>288</p>
            </td>
            <td style="width:127px;">
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Bicycling: 12-13.9 mph</p>
            </td>
            <td style="width:138px;">
            <p>240</p>
            </td>
            <td style="width:144px;">
            <p>288</p>
            </td>
            <td style="width:127px;">
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Football: touch, flag, general</p>
            </td>
            <td style="width:138px;">
            <p>240</p>
            </td>
            <td style="width:144px;">
            <p>288</p>
            </td>
            <td style="width:127px;">
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Hockey: field &amp; ice</p>
            </td>
            <td style="width:138px;">
            <p>240</p>
            </td>
            <td style="width:144px;">
            <p>288</p>
            </td>
            <td style="width:127px;">
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Rock Climbing: rappelling</p>
            </td>
            <td style="width:138px;">
            <p>227</p>
            </td>
            <td style="width:144px;">
            <p>282</p>
            </td>
            <td style="width:127px;">
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p><a href="/exercise-and-fitness/a-beginners-guide-to-running">Running</a>: 5 mph (12 min/mile)</p>
            </td>
            <td style="width:138px;">
            <p>240</p>
            </td>
            <td style="width:144px;">
            <p>288</p>
            </td>
            <td style="width:127px;">
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Skiing: cross-country</p>
            </td>
            <td style="width:138px;">
            <p>198</p>
            </td>
            <td style="width:144px;">
            <p>246</p>
            </td>
            <td style="width:127px;">
            <p>293</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Snow Shoeing</p>
            </td>
            <td style="width:138px;">
            <p>240</p>
            </td>
            <td style="width:144px;">
            <p>288</p>
            </td>
            <td style="width:127px;">
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Volleyball: beach</p>
            </td>
            <td style="width:138px;">
            <p>240</p>
            </td>
            <td style="width:144px;">
            <p>288</p>
            </td>
            <td style="width:127px;">
            <p>336</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Bicycling: BMX or mountain</p>
            </td>
            <td style="width:138px;">
            <p>255</p>
            </td>
            <td style="width:144px;">
            <p>306</p>
            </td>
            <td style="width:127px;">
            <p>357</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Boxing: sparring</p>
            </td>
            <td style="width:138px;">
            <p>270</p>
            </td>
            <td style="width:144px;">
            <p>324</p>
            </td>
            <td style="width:127px;">
            <p>378</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Football: competitive</p>
            </td>
            <td style="width:138px;">
            <p>270</p>
            </td>
            <td style="width:144px;">
            <p>324</p>
            </td>
            <td style="width:127px;">
            <p>378</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;height:32px;">
            <p>Running: cross-country</p>
            </td>
            <td style="width:138px;height:32px;">
            <p>255</p>
            </td>
            <td style="width:144px;height:32px;">
            <p>316</p>
            </td>
            <td style="width:127px;height:32px;">
            <p>377</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Bicycling: 14-15.9 mph</p>
            </td>
            <td style="width:138px;">
            <p>300</p>
            </td>
            <td style="width:144px;">
            <p>360</p>
            </td>
            <td style="width:127px;">
            <p>420</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Martial Arts: judo, karate, kickbox</p>
            </td>
            <td style="width:138px;">
            <p>300</p>
            </td>
            <td style="width:144px;">
            <p>360</p>
            </td>
            <td style="width:127px;">
            <p>420</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Racquetball: competitive</p>
            </td>
            <td style="width:138px;">
            <p>300</p>
            </td>
            <td style="width:144px;">
            <p>360</p>
            </td>
            <td style="width:127px;">
            <p>420</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Rope Jumping (Fast)</p>
            </td>
            <td style="width:138px;">
            <p>340</p>
            </td>
            <td style="width:144px;">
            <p>421</p>
            </td>
            <td style="width:127px;">
            <p>503</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Rope Jumping (Slow)</p>
            </td>
            <td style="width:138px;">
            <p>226</p>
            </td>
            <td style="width:144px;">
            <p>281</p>
            </td>
            <td style="width:127px;">
            <p>335</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Running: 6 mph (10 min/mile)</p>
            </td>
            <td style="width:138px;">
            <p>495</p>
            </td>
            <td style="width:144px;">
            <p>360</p>
            </td>
            <td style="width:127px;">
            <p>420</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Swimming: laps, vigorous</p>
            </td>
            <td style="width:138px;">
            <p>300</p>
            </td>
            <td style="width:144px;">
            <p>360</p>
            </td>
            <td style="width:127px;">
            <p>420</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Water Polo</p>
            </td>
            <td style="width:138px;">
            <p>300</p>
            </td>
            <td style="width:144px;">
            <p>360</p>
            </td>
            <td style="width:127px;">
            <p>420</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Rock Climbing: ascending</p>
            </td>
            <td style="width:138px;">
            <p>226</p>
            </td>
            <td style="width:144px;">
            <p>281</p>
            </td>
            <td style="width:127px;">
            <p>335</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Bicycling: 16-19 mph</p>
            </td>
            <td style="width:138px;">
            <p>360</p>
            </td>
            <td style="width:144px;">
            <p>432</p>
            </td>
            <td style="width:127px;">
            <p>504</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Handball: general</p>
            </td>
            <td style="width:138px;">
            <p>360</p>
            </td>
            <td style="width:144px;">
            <p>432</p>
            </td>
            <td style="width:127px;">
            <p>504</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Running: 7.5 mph (8 min/mile)</p>
            </td>
            <td style="width:138px;">
            <p>375</p>
            </td>
            <td style="width:144px;">
            <p>450</p>
            </td>
            <td style="width:127px;">
            <p>525</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Bicycling: &gt; 20 mph</p>
            </td>
            <td style="width:138px;">
            <p>495</p>
            </td>
            <td style="width:144px;">
            <p>594</p>
            </td>
            <td style="width:127px;">
            <p>693</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Running: 10 mph (6 min/mile)</p>
            </td>
            <td style="width:138px;">
            <p>453</p>
            </td>
            <td style="width:144px;">
            <p>562</p>
            </td>
            <td style="width:127px;">
            <p>671</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <h4><strong>Outdoor Activities</strong></h4>
            </td>
            <td style="width:138px;"> </td>
            <td style="width:144px;"> </td>
            <td style="width:127px;"> </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Raking lawn</p>
            </td>
            <td style="width:138px;">
            <p>120</p>
            </td>
            <td style="width:144px;">
            <p>144</p>
            </td>
            <td style="width:127px;">
            <p>168</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Gardening: general</p>
            </td>
            <td style="width:138px;">
            <p>135</p>
            </td>
            <td style="width:144px;">
            <p>162</p>
            </td>
            <td style="width:127px;">
            <p>189</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Mowing lawn: push, power</p>
            </td>
            <td style="width:138px;">
            <p>135</p>
            </td>
            <td style="width:144px;">
            <p>162</p>
            </td>
            <td style="width:127px;">
            <p>189</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Operate Snow Blower: walking</p>
            </td>
            <td style="width:138px;">
            <p>135</p>
            </td>
            <td style="width:144px;">
            <p>162</p>
            </td>
            <td style="width:127px;">
            <p>189</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Carrying &amp; stacking wood</p>
            </td>
            <td style="width:138px;">
            <p>142</p>
            </td>
            <td style="width:144px;">
            <p>176</p>
            </td>
            <td style="width:127px;">
            <p>210</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Mowing Lawn: push, hand</p>
            </td>
            <td style="width:138px;">
            <p>165</p>
            </td>
            <td style="width:144px;">
            <p>198</p>
            </td>
            <td style="width:127px;">
            <p>231</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Chopping &amp; splitting wood</p>
            </td>
            <td style="width:138px;">
            <p>180</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Shoveling Snow: by hand</p>
            </td>
            <td style="width:138px;">
            <p>180</p>
            </td>
            <td style="width:144px;">
            <p>216</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <h4><strong>Home &amp; Daily Life Activities</strong></h4>
            </td>
            <td style="width:138px;"> </td>
            <td style="width:144px;"> </td>
            <td style="width:127px;"> </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Sleeping</p>
            </td>
            <td style="width:138px;">
            <p>19</p>
            </td>
            <td style="width:144px;">
            <p>22</p>
            </td>
            <td style="width:127px;">
            <p>26</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Reading: sitting</p>
            </td>
            <td style="width:138px;">
            <p>34</p>
            </td>
            <td style="width:144px;">
            <p>40</p>
            </td>
            <td style="width:127px;">
            <p>47</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Standing in line</p>
            </td>
            <td style="width:138px;">
            <p>28</p>
            </td>
            <td style="width:144px;">
            <p>35</p>
            </td>
            <td style="width:127px;">
            <p>41</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Cooking</p>
            </td>
            <td style="width:138px;">
            <p>57</p>
            </td>
            <td style="width:144px;">
            <p>70</p>
            </td>
            <td style="width:127px;">
            <p>84</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Food Shopping: with cart</p>
            </td>
            <td style="width:138px;">
            <p>85</p>
            </td>
            <td style="width:144px;">
            <p>106</p>
            </td>
            <td style="width:127px;">
            <p>126</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Playing w/kids: moderate effort</p>
            </td>
            <td style="width:138px;">
            <p>114</p>
            </td>
            <td style="width:144px;">
            <p>141</p>
            </td>
            <td style="width:127px;">
            <p>168</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Heavy Cleaning: wash car, windows</p>
            </td>
            <td style="width:138px;">
            <p>135</p>
            </td>
            <td style="width:144px;">
            <p>162</p>
            </td>
            <td style="width:127px;">
            <p>189</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Paint, paper, remodel: inside</p>
            </td>
            <td style="width:138px;">
            <p>142</p>
            </td>
            <td style="width:144px;">
            <p>176</p>
            </td>
            <td style="width:127px;">
            <p>210</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Moving: household furniture</p>
            </td>
            <td style="width:138px;">
            <p>170</p>
            </td>
            <td style="width:144px;">
            <p>211</p>
            </td>
            <td style="width:127px;">
            <p>252</p>
            </td>
         </tr>
         <tr>
            <td style="width:216px;">
            <p>Moving: carrying boxes</p>
            </td>
            <td style="width:138px;">
            <p>210</p>
            </td>
            <td style="width:144px;">
            <p>252</p>
            </td>
            <td style="width:127px;">
            <p>294</p>
            </td>
         </tr>
      </tbody>
   </table>
</div>
@endsection