<?php

namespace SMSSim\Http\Controllers\Admin;

use SMSSim\Http\Controllers\Admin\Contracts\IServiceController;
use SMSSim\Http\Controllers\Admin\Master\BasicController;
use SMSSim\Http\Requests\Admin\ServiceRequest;
use SMSSim\Repositories\ServiceRepository;

class ServiceController extends BasicController implements IServiceController
{

    /**
     * ServiceController constructor.
     */
    public function __construct(ServiceRepository $repository)
    {
        $this->repository = $repository;

        $this->title = "Cadastro de Serviços";

        $this->route = 'admin.services';
    }

    public function store(ServiceRequest $request)
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

    public function update($id, ServiceRequest $request)
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
