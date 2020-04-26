@extends('layouts/admin', ['title' => "admin qism"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Maqolalar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.sport.create')}}">Yaratish</a>
        </h6>
        
    </div>
        @if(session()->has('success'))
            <div class="aler alert-success">
                {{session()->get('success')}}
            </div>
        @endif

        @if(session()->has('delete'))
            <div class="aler alert-danger">
                {{session()->get('delete')}}
            </div>
        @endif
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <th width="100px">Rasm</th>
                <th>Sarlavha</th>
                <th width="130px">Amallar</th>
            </thead>
            <tbody>
               
                @foreach($sport as $item)
                <tr>
                    <td> 
                         {{ $item->title }}
                    </td>
                    <td> {{$item->title}}  </td>
                    <td>
                        <a class="btn btn-sm btn-white float-left " href="{{route('admin.sport.show', $item->id)}}">
                            <i class="fa fa-eye"></i>
                        </a>
                        
                        <a class="btn float-left btn-sm btn-white" href="{{route('admin.sport.edit', ['id' => $item-> id])}}">
                            <i class="fa fa-edit"></i> 
                        </a>
                        
                        <form method="POST" action="{{route('admin.sport.destroy', ['id' => $item-> id])}}">
                            @csrf
                            @method('delete')
                            <button class= "btn btn-sm btn-white"> <i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection