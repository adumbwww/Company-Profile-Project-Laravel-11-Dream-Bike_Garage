@extends('layouts.app')

@section('title', 'Profile Data')
    
@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{route('profile.create')}}" class="btn btn-primary">Add Data</a>
        </div>    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Header</th>
                    <th>Sub Header</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $d)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$d->header}}</td>
                    <td>{{$d->sub_header}}</td>
                    <td>
                        <a href="{{route('profile.edit', $d->id)}}" class="btn btn-ss bg-success"><i class="fas fa-edit"></i></a>
                        <form action="{{route('profile.destroy', $d->id)}}" method="POST" class="d-inline">
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