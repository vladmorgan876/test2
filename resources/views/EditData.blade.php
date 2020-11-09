@extends('layouts.app')
@section('content')
<div class="col-md-2" style="margin-left: 100px">
<img class="img-fluid" src="{{asset('/storage/'.$editBook[0]->picture)}}">
</div>
    <div style="">
        <div class="container " >
            <h2 style="text-align: center ;color: green">Форма редактирования данных</h2>
            <form class="container" action="{{route('NewEditionBook',$editBook[0]->id)}}" method="post" enctype="multipart/form-data">
{{--            <form class="container" action="#" method="post" enctype="multipart/form-data">--}}
                {{csrf_field()}}
                <label>Выберите новое изображение обложки книги</label><br>
                <input type="file" name="image" ><br>
                <input type="text" class="form-control" name="name" id="name" value="{{$editBook[0]->name}}" ><br>
                <input type="text" class="form-control" name="author" id="author" value="{{$editBook[0]->author}}" ><br>
                <input type="text" class="form-control" name="category" id="category" value="{{$editBook[0]->category}}" ><br>
                <div class="form-group">
                    <label for="text">краткое описание книги</label>
                    <textarea name="discription" class="form-control" rows="5"></textarea>
                </div>
                <button class="btn btn-success" name="do_signup" type="submit">Сохранить изменения</button>
            </form>
            @isset($newimage)
            @endisset
        </div>
    </div>
@endsection

