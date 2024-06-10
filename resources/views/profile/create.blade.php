@extends('layouts.app')
@section('title', 'Add Profile')
@section('content')
    <form action="{{route('profile.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Header</label>
            <input type="text" class="form-control" name="header" placeholder="Input the header">
        </div>
        <div class="form-group mb-3">
            <label for="">Sub Header</label>
            <input type="text" class="form-control" name="sub_header" placeholder="Input the sub header">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="submit" class="btn btn-danger" value="Reset">
            <a href="{{url()->previous()}}" class="text-info">Back</a>
        </div>
    </form>
@endsection