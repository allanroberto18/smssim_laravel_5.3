@extends('admin.base.print')
@section('content')
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-print"></i> Dados do Usuário: {{ $entity->name }}.
                    <small class="pull-right">Data do Relatório: {!! Carbon\Carbon::today()->format('d/m/Y H:i:s') !!}
                    </small>
                </h2>
            </div>
            <!-- /.col -->
        </div>

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Campo</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <h3>Usuário</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>Nome</td>
                            <td>{{ $entity->name }}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{{ $entity->email }}</td>
                        </tr>
                        @if ($entity->role == 'vendedor')
                        <tr>
                            <td colspan="2">
                                <h3>Contratos do Vendedor</h3>
                            </td>
                        </tr>
                        @foreach($entity->contractsVendor as $item)
                            <tr>
                                <td>
                                    {{ $item->client->name }}
                                </td>
                                <td>
                                    <p>
                                        <strong>Data do Contrato: </strong>{{ $item->data_contrato }}
                                        <br>
                                        <strong>Situação do Contrato: </strong>
                                        @if ($item->status == 1)
                                            Ativo
                                        @else
                                            Inativo
                                        @endif
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                        @elseif ($entity->role == 'cliente')
                        <tr>
                            <td colspan="2">
                                <h3>Contratos do Cliente</h3>
                            </td>
                        </tr>
                        @foreach($entity->contractsClient as $item)
                            <tr>
                                <td>
                                    Vendedor: {{ $item->vendor->name }}
                                </td>
                                <td>
                                    <p>
                                        <strong>Data do Contrato: </strong>{{ $item->data_contrato }}
                                        <br>
                                        <strong>Situação do Contrato: </strong>
                                        @if ($item->status == 1)
                                            Ativo
                                        @else
                                            Inativo
                                        @endif
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
@endsection