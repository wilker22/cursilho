@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Tipos de Usuários</h4>

                            <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('types.store') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        
                                        <div class="form-group">
                                            <label>Nome do Tipo:</label>
                                            <input type="text" name="name" class="form-control" placeholder="digite o nome do tipo de usuário" value="{{ $type->name ?? old('name') }}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"> </i> Cadastrar</button>
                                    </div>
                                    
                                </form>


                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


@endsection
