@extends('layouts.app')
@section('title', 'Edit About')
@section('content')
    <form action="{{route('about.update', $edit->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">First Paragraph</label>
            <input value="{{ $edit->first_paragraph }}" type="text" class="form-control" name="first_paragraph" placeholder="Input the first paragraph">
        </div>
        <div class="form-group mb-3">
            <label for="">Second Paragraph</label>
            <input value="{{ $edit->second_paragraph }}" type="text" class="form-control" name="second_paragraph" placeholder="Input the second paragraph">
        </div>
        <div class="form-group mb-3">
            <label for="">What We Offer 1</label>
            <input value="{{ $edit->what_we_offer_1 }}" type="text" class="form-control" name="what_we_offer_1" placeholder="Input the offer">
        </div>
        <div class="form-group mb-3">
            <label for="">What We Offer 2</label>
            <input value="{{ $edit->what_we_offer_2 }}" type="text" class="form-control" name="what_we_offer_2" placeholder="Input the offer">
        </div>
        <div class="form-group mb-3">
            <label for="">What We Offer 3</label>
            <input value="{{ $edit->what_we_offer_3 }}" type="text" class="form-control" name="what_we_offer_3" placeholder="Input the offer">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="submit" class="btn btn-danger" value="Reset">
            <a href="{{url()->previous()}}" class="text-info">Back</a>
        </div>
    </form>
@endsection