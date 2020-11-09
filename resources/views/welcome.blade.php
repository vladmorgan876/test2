@extends('layouts.app')

@section('content')
{{---------------------------------- отрисовка всех книг ---------------------------------}}
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
                                    <h5 class="card-title">{{$book->author}}</h5>
                                    <h4 class="card-title">{{$book->name}}</h4>
                                    <p class="card-text">{{$book->description}}.</p>
                                    <p class="card-text"><small class="text-muted">{{$book->category}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$books->links()}}
            @endif
        </div>
    </div>

{{---------------------------------- фильтрация книг по названию ---------------------------------}}
    <div class="fo" style="position:absolute;width: 100%;padding: 50px;top:60px">
        <div class="container" style="margin-left:150px">
            @if(isset($nameBooks))
                @foreach($nameBooks as $nameBook)
                    <div class="card mb-sm-3" style="max-width: 740px;">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="{{asset('/storage/'.$nameBook->picture)}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$nameBook->author}}</h5>
                                    <h4 class="card-title">{{$nameBook->name}}</h4>
                                    <p class="card-text">{{$nameBook->description}}.</p>
                                    <p class="card-text"><small class="text-muted">{{$nameBook->category}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--                {{$books->links()}}--}}
            @endif
        </div>
    </div>

{{---------------------------------- фильтрация книг по автору ---------------------------------}}
<div class="fo" style="position:absolute;width: 100%;padding: 50px;top:60px">
    <div class="container" style="margin-left:150px">
        @if(isset($authors))
            @foreach($authors as $author)
                <div class="card mb-sm-3" style="max-width: 740px;">
                    <div class="row no-gutters">
                        <div class="col-md-2">
                            <img src="{{asset('/storage/'.$author->picture)}}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$author->author}}</h5>
                                <h4 class="card-title">{{$author->name}}</h4>
                                <p class="card-text">{{$author->description}}.</p>
                                <p class="card-text"><small class="text-muted">{{$author->category}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
{{--            {{$books->links()}}--}}
        @endif
    </div>
</div>
@endsection
