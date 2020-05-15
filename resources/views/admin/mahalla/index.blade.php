@extends('layouts/admin', ['title' => "ADMIN -> Mahalliy yangiliklar"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Maqolalar
            <a class="btn btn-sm btn-primary float-right" href="{{route('admin.mahalla.create')}}">Yaratish</a>
        </h6>
        
    </div>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{session()->get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{session()->get('delete')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <th width="100px">Rasm</th>
                <th>Sarlavha</th>
                <th width="180px">Amallar</th>
            </thead>
            <tbody>
               
                @foreach($mahalla as $item)
                <tr>
                    <td> 
                    <img class="img img-thumbnail" width="80px" src=" {{ '/storage/'.$item->thumb }} " alt="{{ $item->title }}">
                    </td>
                    <td> 
                        {{$item->title}}  
                    </td>
                    <td>

                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <a href="{{route('admin.mahalla.show', $item->id)}}" class="btn btn-primary">
                                <i class="fa fa-eye"></i> Ko'rish
                            </a>
                            <div class="btn-group" role="group">
                              <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              </button>
                              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="{{route('admin.mahalla.edit', ['id' => $item-> id])}}">
                                    <i class="fa fa-edit"></i> Tahrirlash 
                                </a>
                                <form method="POST" action="{{route('admin.mahalla.destroy', ['id' => $item-> id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item" type="submit"><i class="fa fa-trash"></i> O'chirish</button>
                                </form> 
                              </div>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>

@endsection