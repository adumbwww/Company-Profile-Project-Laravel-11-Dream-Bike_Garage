@extends('layouts.app')

@section('title', 'About Data')
    
@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{route('about.create')}}" class="btn btn-primary">Add Data</a>
        </div>    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>First Paragraph</th>
                    <th>Second Paragraph</th>
                    <th>What We Offer 1</th>
                    <th>What We Offer 2</th>
                    <th>What We Offer 3</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $d)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$d->first_paragraph}}</td>
                    <td>{{$d->second_paragraph}}</td>
                    <td>{{$d->what_we_offer_1}}</td>
                    <td>{{$d->what_we_offer_2}}</td>
                    <td>{{$d->what_we_offer_3}}</td>
                    <td>
                        <a href="{{route('about.edit', $d->id)}}" class="btn btn-ss bg-success"><i class="fas fa-edit"></i></a>
                        <form action="{{route('about.destroy', $d->id)}}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-ss bg-danger show_confirm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    

@endsection