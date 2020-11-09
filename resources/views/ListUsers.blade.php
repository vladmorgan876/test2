@extends('layouts.app')

@section('content')
    <div>
        <h2 style="text-align: center;color: lawngreen">Список зарегистрированных пользователей</h2>
        <div style="align-items: center">
            <button class="btn btn-success" name="do_signup" ><a href="{{route('AddUser')}}" style="color: white;text-decoration: none">добавить пользователя</a></button>
        </div>
        <div>
            <table class="table table-hover">
                <thead>
                <tr >
                    {{--            <th style="border: black 2px solid;text-align: center" scope="col">id пользоввтеля</th>--}}
                    <th style="border: black 2px solid;text-align: center" scope="col">имя пользователя</th>
                    <th style="border: black 2px solid;text-align: center" scope="col">email пользователя</th>
                    <th style="border: black 2px solid;text-align: center" scope="col">пароль пользователя</th>
                    <th style="border: black 2px solid;text-align: center" scope="col"></th>
                    <th style="border: black 2px solid;text-align: center" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if($users)
                    @foreach($users as $user)
                        <tr>
                            {{--            <th style="border: black 2px solid;text-align: center" scope="row">{{$user->id}}</th>--}}
                            <td style="border: black 2px solid;text-align: center">{{$user->name}}</td>
                            <td style="border: black 2px solid;text-align: center">{{$user->email}}</td>
                            <td style="border: black 2px solid;text-align: center">{{$user->password}}</td>
                            <td style="border: black 2px solid;text-align: center"><a href="{{route('EditUser',$user->id)}}">редактировать</a></td>
                            <td style="border: black 2px solid;text-align: center"><a href="{{route('DeleteUser',$user->id)}}">удалить</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

