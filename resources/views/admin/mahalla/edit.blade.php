@extends('layouts/admin', ['title' => "admin qism"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            {{$mahalla->title}} - tahrirlash
        </h6>
    </div>
    <div class="card-body">

        @if( $errors -> any() )
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors -> all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>         
            </div>
        @endif

        <form method="POST" enctype="multipart/form-data" action="{{route('admin.mahalla.update', $mahalla->id)}}">

            @csrf
            @method('PUT')    
            <div class="form-group">
                <label for="">Sarlavha</label>
                <input class="form-control" value="{{$mahalla->title}}" name="title" type="text">
            </div>

            
            <div class="form-group">
                <label for="">Qisqacha</label>
                <input class="form-control" value="{{$mahalla->short}}" name="short" type="text">
            </div>
            <div class="form-group">
                <label for="">Maqola</label>
                <textarea class="form-control" name="content" id="" cols="30" rows="10">{{$mahalla->content}}</textarea>
            </div>
            <button class="btn btn-sm btn-success">Saqlash</button>
        
        </form>
    </div>
</div>

@endsection