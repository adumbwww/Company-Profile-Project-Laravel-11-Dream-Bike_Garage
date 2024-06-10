@extends('layouts.app')
@section('title', 'Add About')
@section('content')
    <form action="{{route('about.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="">First Paragraph</label>
            <input type="text" class="form-control" name="first_paragraph" placeholder="Input the first paragraph">
        </div>
        <div class="form-group mb-3">
            <label for="">Second Paragraph</label>
            <input type="text" class="form-control" name="second_paragraph" placeholder="Input the second paragraph">
        </div>
        <div class="form-group mb-3">
            <label for="">What We Offer 1</label>
            <input type="text" class="form-control" name="what_we_offer_1" placeholder="Input the offer">
        </div>
        <div class="form-group mb-3">
            <label for="">What We Offer 2</label>
            <input type="text" class="form-control" name="what_we_offer_2" placeholder="Input the offer">
        </div>
        <div class="form-group mb-3">
            <label for="">What We Offer 3</label>
            <input type="text" class="form-control" name="what_we_offer_3" placeholder="Input the offer">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="submit" class="btn btn-danger" value="Reset">
            <a href="{{url()->previous()}}" class="text-info">Back</a>
        </div>
    </form>
@endsection