<?php 
    $eq = 5;
?>

@extends('layouts.master')

@section('content')
    <h1>Hello dudes</h1>
    <h2></h2>
    <p> {{ $eq == 5 ? 'Hello' : 'not equals'}} </p>
    <hr>
    <h2>IF ELSE structure</h2>
    @if(true)
        <p>It was <b>true</b></p>
    @else
        <p>It was <b>false</b></p>
    @endif
    <hr>
    <h2>LOOP</h2>
    @for($i = 0; $i < 5 ; $i++)
        <p> {{ $i +1 }} -> iteration </p>
    @endfor
    <hr>
    <h2>XSS</h2>
    {{"<script>alert('I am in.')</script>"}}
    {!!"<script>alert('I am out.')</script>"!!}
@endsection