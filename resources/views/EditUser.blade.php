@extends('layouts.app')

@section('content')
    @isset($editUser)
        <div style="">
            <div class="container " >
                <h2 style="text-align: center ;color: green">Форма редактирования пользователя</h2>
                <form class="container" action="{{route('NewEditionUser',$editUser[0]->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="name" id="name" value="{{$editUser[0]->name}}" ><br>
                    <input type="text" class="form-control" name="email" id="email" value="{{$editUser[0]->email}}" ><br>
                    <input type="text" class="form-control" name="password" id="password" value="{{$editUser[0]->password}}" ><br>
                    <button class="btn btn-success" name="do_signup" type="submit">Сохранить изменения</button>
                </form>
            </div>
        </div>
    @endisset
    <div style="">
        <div class="container " >
            <h2 style="text-align: center ;color: green">Форма добавления пользователя</h2>

            {{------------------------ вывод ошибок при валидации добавления пользователя  ----------------------}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{--------------------------------------------------------------------------------------------}}
            <form class="container" action="{{route('NewUser')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="text" class="form-control" name="name" id="name" placeholder="имя нового пользователя" ><br>
                <input type="text" class="form-control" name="email" id="email" placeholder="адрес электронной почты" ><br>
                <input type="text" class="form-control" name="password" id="password" placeholder="пароль для входа в систему" ><br>
                <button class="btn btn-success" name="do_signup" type="submit">Добавить пользователя</button>
            </form>
        </div>
    </div>
@endsection


