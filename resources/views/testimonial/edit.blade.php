@extends('layouts.app')
@section('title', 'Edit Testimonial')
@section('content')
    <form action="{{route('testimonial.update')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Name</label>
            <input value="{{ $edit->name }}" type="text" class="form-control" name="name" placeholder="Input Name">
        </div>
        <div class="form-group mb-3">
            <label for="">testimonial</label>
            <input value="{{ $edit->testimonial }}" type="text" class="form-control" name="testimonial" placeholder="Input testimonial">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="submit" class="btn btn-danger" value="Reset">
            <a href="{{url()->previous()}}" class="text-info">Back</a>
        </div>
    </form>
@endsection