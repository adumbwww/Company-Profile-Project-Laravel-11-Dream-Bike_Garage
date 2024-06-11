@extends('layouts.app')
@section('title', 'Add Testimonial')
@section('content')
    <form action="{{route('testimonial.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Input Name">
        </div>
        <div class="form-group mb-3">
            <label for="">testimonial</label>
            <input type="text" class="form-control" name="testimonial" placeholder="Input testimonial">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="submit" class="btn btn-danger" value="Reset">
            <a href="{{url()->previous()}}" class="text-info">Back</a>
        </div>
    </form>
@endsection