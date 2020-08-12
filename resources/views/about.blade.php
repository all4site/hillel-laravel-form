@extends('layouts.main')
@section('content')
    <form method="post" action="{{ route('about')}}" >
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email')
            }}">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" name="text" id="text" rows="3" value="{{ old('text') }}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>


        @if($errors->all())
            <ul class=" alert alert-danger mt-3">
                @foreach($errors->all() as $error)
                    <li class="text-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    </form>

@endsection