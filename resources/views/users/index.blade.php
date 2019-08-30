@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left"><h3>Lista de usuarios</h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('users.create') }}" class="btn btn-info">Añadir Usuario</a>
                        </div>

                    </div>
                    <br>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordered table-striped">
                            <thead>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cédula</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                            </thead>
                            <tbody>
                            @if($users->count())
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->document}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>Editar</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8">No hay registros !!</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{--                    {{ $users->links() }}--}}
            </div>
        </div>
    </div>
@endsection
