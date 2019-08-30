@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @csrf

                @method('PUT')

                @include('partials.user-edit')

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="far fa-save"></i> Guardar
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
