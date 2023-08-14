@extends('layouts.app')

@section('template_title')
    Cores
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Cores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Adicionar Cor') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Nº</th>
                                        
										<th>Nome</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cores as $core)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $core->nome }}</td>

                                            <td>
                                                <form action="{{ route('cores.destroy',$core->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cores.show',$core->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Visualizar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cores.edit',$core->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Deletar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cores->links() !!}
            </div>
        </div>
    </div>
@endsection
