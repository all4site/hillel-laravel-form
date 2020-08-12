@extends('layouts.main')
@section('content')
    <form method="post" action="{{ route('subscribe')}}">
        @csrf

    @if($errors->all())
            <ul class=" alert alert-danger">
            @foreach($errors->all() as $error)
                <li class="text-danger">
                    {{ $error }}
                </li>
            @endforeach
            </ul>
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email')
            }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone number" value="{{ old
            ('phone') }}">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
@endsection