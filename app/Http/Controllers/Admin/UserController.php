<?php

namespace SMSSim\Http\Controllers\Admin;

use SMSSim\Http\Controllers\Admin\Master\BasicController;
use SMSSim\Http\Controllers\Admin\Contracts\IUserController;
use SMSSim\Http\Requests\Admin\UserRequest;
use SMSSim\Repositories\UserRepository;

class UserController extends BasicController implements IUserController
{
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;

        $this->title = "Cadastro de Usuários/Clientes";

        $this->route = 'admin.users';
    }


    public function store(UserRequest $request)
    {
        try
        {
            $data = $request->all();

            $entity = $this->repository->create($data);

            return redirect($this->route . "show", ['id' => $entity->id])->with(['success' => 'Dados Cadastrados com sucesso']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . ".index")->with(['errors' => $ex->getMessage()]);
        }
    }

    public function update($id, UserRequest $request)
    {
        try
        {
            $entity = $this->repository->find($id);

            $data = $request->all();

            $this->repository->update($data, $id);

            return redirect($this->route . "show", ['id' => $entity->id])->with(['success' => 'Dados Cadastrados com sucesso']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . ".index")->with(['errors' => $ex->getMessage()]);
        }
    }
}
