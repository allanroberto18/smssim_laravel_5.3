@extends('admin.base.list')
@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_contracts_show', $entity) !!}
@endsection
@section('header')
    <a href="{{ route('admin.contracts.create') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Novo Registro</a>
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
                    <h3>Detalhes do Contrato</h3>
                </td>
            </tr>
            <tr>
                <td>Vendedor</td>
                <td>{{ $entity->vendor->name }}</td>
            </tr>
            <tr>
                <td>Cliente</td>
                <td>{{ $entity->client->name }}</td>
            </tr>
            <tr>
                <td>Data do Contrato</td>
                <td>{{ $entity->data_contrato }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    @if ($entity->status == 1)
                        <span class="label label-success"><i class="fa fa-check"></i> Ativo</span>
                    @else
                        <span class="label label-warning"><i class="fa fa-close"></i> Inativo</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
@endsection
@section('footer')
    <a href="{{ route('admin.contracts.index') }}" class="btn btn-default">
        <i class="fa fa-list-ul"></i>
        Listar Registros
    </a>
    <a href="{{ route('admin.contracts.edit', ['id' => $entity->id]) }}" class="btn btn-default">
        <i class="fa fa-pencil"></i> Alterar Registro
    </a>
    <a href="{{ route('admin.contracts.print', ['id' => $entity->id]) }}" class="btn btn-default">
        <i class="fa fa-print"></i> Imprimir
    </a>
@endsection