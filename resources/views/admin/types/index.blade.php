@extends('admin.admin_master')

@section('admin')
                  <div class="page-content">
                    <div class="container-fluid">

                       
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Tipos de Usuários</h4>
                                       <a href="{{route('types.create')}}" class="btn btn-info">Novo Tipo</a>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Tipo</th>
                                                <th style="width: 15%">Ações</th>
                                              
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach ($types as $type)
                                                <tr>
                                                    <td>{{$type->name}}</td>
                                                    
                                                    <td>
                                                        <button class="btn btn-primary">Editar</button>
                                                        <button class="btn btn-danger">Remover</button>
                                                    </td>
                                                </tr>        
                                                @endforeach
                                            
                                                                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            
@endsection
