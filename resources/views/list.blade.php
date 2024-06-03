@extends('layouts.main')
@section('content')
<div class="card ">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h6>Task List</h6>
            </div>
            <div class="col-6 text-end"><a class="btn btn-info btn-sm" href="{{route('create-task')}}">Create Task</a></div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @if($tasks && $tasks->count())
                    @php $i = 1; @endphp
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->created_at }}</td>
                        </tr>
                    @endforeach
                @else
                <tr><td colspan="3" class="text-danger">No Record Found</td></tr>
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $tasks->links() !!}
        </div>
    </div>
</div>
@endsection
