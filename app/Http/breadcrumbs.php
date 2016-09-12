<?php

Breadcrumbs::register("admin_home", function($breadcrumbs)
{
    $breadcrumbs->push("Principal", route("admin.home"));
});

// Dashboard > users
Breadcrumbs::register("admin_users", function($breadcrumbs)
{
    $breadcrumbs->parent("admin_home");
    $breadcrumbs->push("Listagem/Pesquisa de Registros", route("admin.users.index"));
});

// Dashboard > users > Create
Breadcrumbs::register("admin_users_create", function($breadcrumbs)
{
    $breadcrumbs->parent("admin_home");
    $breadcrumbs->push("Listagem/Pesquisa de Registros", route("admin.users.index"));
    $breadcrumbs->push("Novo Registro", route("admin.users.create"));
});

// Dashboard > users > Show
Breadcrumbs::register("admin_users_show", function($breadcrumbs, $entity)
{
    $breadcrumbs->parent("admin_home");
    $breadcrumbs->push("Listagem/Pesquisa de Registros", route("admin.users.index"));
    $breadcrumbs->push("Visualizar Registro #{$entity->name}", route("admin.users.show", [ 'id' => $entity->id ]));
});

// Dashboard > users > Edit
Breadcrumbs::register("admin_users_edit", function($breadcrumbs, $entity)
{
    $breadcrumbs->parent("admin_home");
    $breadcrumbs->push("Listagem/Pesquisa de Registros", route("admin.users.index"));
    $breadcrumbs->push("Visualizar Registro #{$entity->name}", route("admin.users.show", [ 'id' => $entity->id ]));
    $breadcrumbs->push("Editar #{$entity->id}", route("admin.users.edit", [ 'id' => $entity->id ]));
});

// Dashboard > services
Breadcrumbs::register("admin_services", function($breadcrumbs)
{
    $breadcrumbs->parent("admin_home");
    $breadcrumbs->push("Listagem/Pesquisa de Registros", route("admin.services.index"));
});

// Dashboard > services > Create
Breadcrumbs::register("admin_services_create", function($breadcrumbs)
{
    $breadcrumbs->parent("admin_home");
    $breadcrumbs->push("Listagem/Pesquisa de Registros", route("admin.services.index"));
    $breadcrumbs->push("Novo Registro", route("admin.services.create"));
});

// Dashboard > services > Show
Breadcrumbs::register("admin_services_show", function($breadcrumbs, $entity)
{
    $breadcrumbs->parent("admin_home");
    $breadcrumbs->push("Listagem/Pesquisa de Registros", route("admin.services.index"));
    $breadcrumbs->push("Visualizar Registro #{$entity->name}", route("admin.services.show", [ 'id' => $entity->id ]));
});

// Dashboard > services > Edit
Breadcrumbs::register("admin_services_edit", function($breadcrumbs, $entity)
{
    $breadcrumbs->parent("admin_home");
    $breadcrumbs->push("Listagem/Pesquisa de Registros", route("admin.services.index"));
    $breadcrumbs->push("Visualizar Registro #{$entity->name}", route("admin.services.show", [ 'id' => $entity->id ]));
    $breadcrumbs->push("Editar #{$entity->id}", route("admin.services.edit", [ 'id' => $entity->id ]));
});
