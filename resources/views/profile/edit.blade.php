@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')
    <form action="{{route('profile.update', $edit->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Header</label>
            <input value="{{$edit->header}}" type="text" class="form-control" name="header" placeholder="Input the header">
        </div>
        <div class="form-group mb-3">
            <label for="">Sub Header</label>
            <input value="{{$edit->sub_header}}" type="text" class="form-control" name="sub_header" placeholder="Input the sub header">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="submit" class="btn btn-danger" value="Reset">
            <a href="{{url()->previous()}}" class="text-info">Back</a>
        </div>
    </form>
@endsection