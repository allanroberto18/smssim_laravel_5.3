<?php

namespace SMSSim\Http\Controllers\Admin;

use SMSSim\Http\Controllers\Admin\Contracts\IContractController;
use SMSSim\Http\Controllers\Admin\Master\BasicController;
use SMSSim\Http\Requests\Admin\ContractRequest;
use SMSSim\Repositories\ContractRepository;
use SMSSim\Repositories\UserRepository;

class ContractController extends BasicController implements IContractController
{

    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(ContractRepository $repository, UserRepository $userRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;

        $this->title = "Cadastro de Contratos";

        $this->route = 'admin.contracts';
    }

    public function create()
    {
        $title = $this->title;
        $subtitle = 'Novo Registro';

        $vendors = $this->userRepository->getUsersByRole('vendedor');
        $clients = $this->userRepository->getUsersByRole('cliente');

        return view($this->route . '.create', compact('title', 'subtitle', 'vendors', 'clients'));
    }

    public function edit($id)
    {
        try
        {
            $entity = $this->repository->find($id);

            $title = $this->title;
            $subtitle = 'Alterar Registro #' . $id;

            $vendors = $this->userRepository->getUsersByRole('vendedor');
            $clients = $this->userRepository->getUsersByRole('cliente');

            return view($this->route . '.edit', compact('title', 'subtitle', 'entity', 'vendors', 'clients'));
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index')->with(['errors' => $ex->getMessage()]);
        }
    }

    public function store(ContractRequest $request)
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

    public function update($id, ContractRequest $request)
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
