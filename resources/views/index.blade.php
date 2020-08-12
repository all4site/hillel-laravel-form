<?php
/**
 * @var $errors ViewErrorBag
 */

use Illuminate\Support\ViewErrorBag;

?>
@extends('layouts.main')
@section('content')

    <form action="{{ route('index')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" id="name"
                   placeholder="Name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control @if($errors->has('name')) is-invalid @endif"
                   id="email" placeholder="Email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="text-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control @if($errors->has('age')) is-invalid @endif" id="age"
                   placeholder="Age" value="{{ old('age') }}">
            @if($errors->has('age'))
                <div class="text-danger">
                    {{ $errors->first('age') }}
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
@endsection