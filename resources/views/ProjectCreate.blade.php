@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Create Project</h3>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action="/project">
                @csrf
                <div class="form-group">
                <label for="project_name">Project Name</label>
                <input type="text" class="form-control" id="project_name" name="project_name" placeholder="enter project name" value="{{ old('project_name','') }}">
                </div>
                @error('project_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="project_description">Project Description</label>
                    <input type="text" class="form-control" id="project_description" name="project_description" placeholder="enter project description" value="{{ old('project_description','') }}">
                </div>
                @error('project_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="starting_date">Starting Date</label>
                    <input type="date" class="form-control" id="starting_date" name="starting_date" placeholder="enter starting date" value="{{ old('starting_date','') }}">
                </div>
                @error('starting_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="deadline_date">Deadline Date</label>
                    <input type="date" class="form-control" id="deadline_date" name="deadline_date" placeholder="enter deadline date" value="{{ old('deadline_date','') }}">
                </div>
                @error('deadline_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="status">status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="enter status" value="{{ old('status','') }}">
                </div>
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
