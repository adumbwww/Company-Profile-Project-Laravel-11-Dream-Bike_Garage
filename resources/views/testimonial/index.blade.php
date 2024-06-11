@extends('layouts.app')

@section('title', 'Testimonial Data')
    
@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{route('testimonial.create')}}" class="btn btn-primary">Add Data</a>
        </div>    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Testimonial</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $d)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->testimonial}}</td>
                    <td>
                        <a href="{{route('testimonial.edit', $d->id)}}" class="btn btn-ss bg-success"><i class="fas fa-edit"></i></a>
                        <form action="{{route('testimonial.destroy', $d->id)}}" method="POST" class="d-inline">
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