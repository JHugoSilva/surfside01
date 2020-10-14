@include('header')

<h1>Test Blade</h1>

@php
$name = "Hugo";
$fruits = ['Mango','Apple','Banana','Pineapple'];
$age = 11;
@endphp
<h2>{{$name}}</h2>

@foreach ($fruits as $fruit)
    <ul>
        <li>{{$fruit}}</li>
    </ul>
@endforeach
<br>

@for ($i = 1; $i <= 10; $i++)
    {{$i}}<br>
@endfor

<br>

@if (count($fruits)==1)
    Single Fruit
@elseif (count($fruits) > 1)
       More than one Fruit
@else
    No Fruit
@endif

<br>

{{$age>=18?"Voçe e adulto":"Voçe não e adulto"}};