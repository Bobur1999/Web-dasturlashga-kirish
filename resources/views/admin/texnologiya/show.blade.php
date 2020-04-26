@extends('layouts/admin', ['title' => "admin qism"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            {{$texnologiya->title}} - korish
        </h6>
    </div>
    <div class="card-body">
        <h4>
            {{$texnologiya->title}}
        </h4>
        <b>Qisqacha:</b>
        <p>
            {{$texnologiya->short}}
        </p>
        <b>Batafsil:</b>
        <p>
            {{$texnologiya->content}}
        </p>
        {{$texnologiya->created_at->format('H:i d/m/Y')}}
        {{$texnologiya->updated_at->format('H:i d/m/Y')}}
    </div>
</div>

@endsection