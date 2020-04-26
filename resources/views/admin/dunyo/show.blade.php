@extends('layouts/admin', ['title' => "admin qism"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            {{$dunyo->title}} - korish
        </h6>
    </div>
    <div class="card-body">
        <h4>
            {{$dunyo->title}}
        </h4>
        <b>Qisqacha:</b>
        <p>
            {{$dunyo->short}}
        </p>
        <b>Batafsil:</b>
        <p>
            {{$dunyo->content}}
        </p>
        {{$dunyo->created_at->format('H:i d/m/Y')}}
        {{$dunyo->updated_at->format('H:i d/m/Y')}}
    </div>
</div>

@endsection