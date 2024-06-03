@extends('layouts.main')
@section('content')
<div class="row">
    <div class="offset-4 col-md-4">
        <div class="card">
            <div class="card-header">
                <h6>Create Task</h6>
            </div>
            <div class="card-body">
                <form action="{{route('tasks')}}" method="POST">
                    @csrf
                    <div class="form-group @error('name') is-invalid @enderror">
                        <label class="form-label" for="name">Task Name:</label>
                        <input class="form-control" value="{{old('name')}}" type="text" id="name" name="name" required>
                        @error('name')
                            <span class="text-danger" role="alert"> <small>{{ $message }}</small></span>
                        @enderror
                    </div>
                    <div class="form-group mt-2 @error('password') is-invalid @enderror">
                        <label class="form-label" for="password">Password:</label>
                        <input class="form-control" type="password" id="password" name="password" required>
                        @error('password')
                            <span class="text-danger" role="alert"> <small>{{ $message }}</small></span>
                        @enderror
                    </div>
                    
                    <div class="form-group mt-3">
                        <div class="d-grid gape-2">
                            <button class="btn btn-success" type="submit">Create Task</button>
                            <a class="btn btn-dark mt-2" href="{{route('home')}}">Back To List</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
