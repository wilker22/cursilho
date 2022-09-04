@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{asset('backend/asset/images/small/img-5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Nome: {{ $adminData->name }}</h4>
                            <h4 class="card-title">E-mail: {{ $adminData->email }}</h4>
                            <hr>
                            <a href="{{ route('edit.profile')}}" class="btn btn-info">Editar Perfil</a>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
