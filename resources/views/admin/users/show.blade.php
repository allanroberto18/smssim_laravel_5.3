@extends('admin.base.list')
@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_users_show', $entity) !!}
@endsection
@section('header')
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Novo Registro</a>
@endsection
@section('list')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2">
                    <h3>Dados do Usuário</h3>
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
                                <span class="label label-success"><i class="fa fa-check"></i> Ativo</span>
                            @else
                                <span class="label label-warning"><i class="fa fa-close"></i> Inativo</span>
                            @endif
                            <br>
                            <a href="{{ route('admin.contracts.show', ['id' => $item->id]) }}" target="_blank"
                               class="btn btn-default btn-sm mt">
                                <i class="fa fa-search"></i> Detalhes do Contrato
                            </a>
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
                                <span class="label label-success"><i class="fa fa-check"></i> Ativo</span>
                            @else
                                <span class="label label-warning"><i class="fa fa-close"></i> Inativo</span>
                            @endif
                            <br>
                            <a href="{{ route('admin.contracts.show', ['id' => $item->id]) }}" target="_blank"
                               class="btn btn-default btn-sm mt">
                                <i class="fa fa-search"></i> Detalhes do Contrato
                            </a>
                        </p>
                    </td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
@endsection
@section('footer')
    <a href="{{ route('admin.users.index') }}" class="btn btn-default">
        <i class="fa fa-list-ul"></i>
        Listar Registros
    </a>
    <a href="{{ route('admin.users.edit', ['id' => $entity->id]) }}" class="btn btn-default">
        <i class="fa fa-pencil"></i> Alterar Registro
    </a>
    <a href="{{ route('admin.users.print', ['id' => $entity->id]) }}" class="btn btn-default">
        <i class="fa fa-print"></i> Imprimir
    </a>
@endsection