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
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Excelente!</strong> {{ session('success') }}
                        </div>
                    @endif
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
                                        <td>
                                            <a data-toggle="tooltip"
                                               data-placement="left"
                                               title="Editar"
                                               href="{{ route('users.edit', $user->id) }}"
                                               class="btn btn-secondary"
                                               role="button">
                                                Editar
                                            </a>
                                        </td>
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
