@extends('layouts/admin')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Update Student
        </h1>
    </div>
</div>

<div class="row">
    <form method="POST" action="{{ route('students.update', $student -> id) }}">
      @method('PUT')
        @if ($errors -> any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif

        {{ csrf_field() }}
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" value="{{ $student -> fname }}">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lname" value="{{ $student -> lname }}">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email"  aria-describedby="email" value="{{ $student -> email }}">
            @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
      </form>
</div>
@endsection
