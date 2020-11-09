@extends('layouts.app')
@section('content')

    <div class="fo" style="position:absolute;width: 100%;padding: 50px;top:60px">
        <div class="container" style="margin-left:150px">
            @if(isset($books))
                @foreach($books as $book)
                    <div class="card mb-sm-3" style="max-width: 740px;">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="{{asset('/storage/'.$book->picture)}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">{{$book->id}}.</p>
                                    <h5 class="card-title">{{$book->author}}</h5>
                                    <h4 class="card-title">{{$book->name}}</h4>
                                    <p class="card-text">{{$book->description}}.</p>
                                    <p class="card-text"><small class="text-muted">{{$book->category}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div style="margin-bottom: 20px">
                   <a href="{{route('DeleteData',$book->id)}}"><button type="button" class="btn btn-danger">Удалить</button></a>
                    <a href="{{route('EditData',$book->id)}}"><button type="button" class="btn badge-info">Редактировать</button></a>
                </div>

                @endforeach
                {{$books->links()}}
            @endif
        </div>
    </div>

@endsection
