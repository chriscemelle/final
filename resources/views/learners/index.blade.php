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
    <a href="{{url('learners/create')}}" class="btn btn-primary">
        Add New Learner
    </a>
</div>

<h1>List of Learners</h1>

<table class="table table-bordered table-striped table-sm">
    <thead style="background-color: #0d0d26; color:#fff;">
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($learners as $ln)

        <tr>
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->status}}</td>
            <td>
                <a href="{{url('/learners/edit', ['id'=> $ln])}}" class="btn btn-secondary btn-sm"> ... </a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
