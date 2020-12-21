@extends('base')

@section('content')

@if($info = Session::get('info'))

<div class="card">
    <div class="card-body bg-success text-white">
        {{$info}}
    </div>
</div>

@endif

<div class="float-right">
    <a href="{{url('courses/create')}}" class="btn btn-primary">
        Add New Course
    </a>
</div>

    <h1>Courses</h1>
    <table class="table table-bordered table-striped table-sm">
        <thead style="background-color: #0d0d26; color:#fff;">
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Instructor</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
            @foreach($courses as $c)

            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->description}}</td>
                <td>{{$c->start}}</td>
                <td>{{$c->end}}</td>
                <td>{{$c->instructor->user->lname}}</td>
                <td class="text-center">
                    <a href="{{ url('/courses/edit', ['id'=> $c]) }}" class="btn btn-secondary btn-sm">...</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
