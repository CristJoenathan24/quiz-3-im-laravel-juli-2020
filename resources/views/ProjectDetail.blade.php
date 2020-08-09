@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Projects Detail</h3>
        <ul>
            <li>Project Name: {{$data->project_name}}</li>
            <li>Project Description: {{$data->project_description}}</li>
            <li>Starting Date: {{$data->starting_date}}</li>
            <li>Deadline Date: {{$data->deadline_date}}</li>
            <li>Status: {{$data->status}}</li>
        </ul>
        <a href="{{url('/project')}}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection
