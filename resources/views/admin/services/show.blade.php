@extends('admin.base.list')
@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_services_show', $entity) !!}
@endsection
@section('header')
    <a href="{{ route('services') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Novo Registro</a>
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
                    <h3>Nome</h3>
                </td>
            </tr>
            <tr>
                <td>Nome</td>
                <td>{{ $entity->name }}</td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td>{{ $entity->description }}</td>
            </tr>
            <tr>
                <td>Preço</td>
                <td>{{ $entity->price }}</td>
            </tr>
        </tbody>
    </table>
@endsection
@section('footer')
    <a href="{{ route('admin.services.index') }}" class="btn btn-default">
        <i class="fa fa-list-ul"></i>
        Listar Registros
    </a>
    <a href="{{ route('admin.services.edit', ['id' => $entity->id]) }}" class="btn btn-default">
        <i class="fa fa-pencil"></i> Alterar Registro
    </a>
    <a href="{{ route('admin.services.print', ['id' => $entity->id]) }}" class="btn btn-default">
        <i class="fa fa-print"></i> Imprimir
    </a>
@endsection