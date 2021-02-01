@extends('layouts.master')

@section('xxx')
    <div class="container">

        @component('components.alert-component')
            xxxx
        @endcomponent

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        @component('components.alert-component')
            yyyy
            @slot('style')
              success
            @endslot
        @endcomponent

        <x-alert-component    >
            <x-slot name="style">info</x-slot>
           Test
        </x-alert-component>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

    </div>

@endsection

@section('style')
    <style>
        body{
            background-color:  blueviolet;
        }
    </style>
@endsection
