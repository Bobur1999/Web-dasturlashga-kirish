@extends('layouts/admin', ['title' => "admin qism"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            {{$sport->title}} - korish
        </h6>
    </div>
    <div class="card-body">
        <h4>
            {{$sport->title}}
        </h4>
        <b>Qisqacha:</b>
        <p>
            {{$sport->short}}
        </p>
        <b>Batafsil:</b>
        <p>
            {{$sport->content}}
        </p>
        {{$sport->created_at->format('H:i d/m/Y')}}
        {{$sport->updated_at->format('H:i d/m/Y')}}
    </div>
</div>

@endsection