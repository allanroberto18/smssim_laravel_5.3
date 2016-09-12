@extends('admin.base.list')
@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_users_show', $entity) !!}
@endsection
@section('header')
    <a href="{{ route('users') }}" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Novo Registro</a>
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
                    <h3>Usuário</h3>
                </td>
            </tr>
            <tr>
                <td>Nome</td>
                <td>{{ $entity->user->name }}</td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>{{ $entity->user->email }}</td>
            </tr>
            <tr>
                <td>Dica de Senha</td>
                <td>{{ $entity->user->dica_senha }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <h3>Cliente</h3>
                </td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td>{{ $entity->phone }}</td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td>{{ $entity->address }}</td>
            </tr>
            <tr>
                <td>CEP</td>
                <td>{{ $entity->zipcode }}</td>
            </tr>
            <tr>
                <td>Cidade/Estado</td>
                <td>{{ $entity->city }}/{{ $entity->state }}</td>
            </tr>
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