<?php

namespace SMSSim\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use SMSSim\Http\Controllers\Admin\Master\Contracts\IBasicController;

class BasicController extends Controller  implements IBasicController
{
    protected $repository;
    protected $title;
    protected $subTitle;
    protected $route;

    public function index()
    {
        $title = $this->title;
        $subtitle = 'Listar/Pesquisar Registros';

        $list = $this->repository->paginate();

        return view($this->route . '.index', compact('title', 'subtitle', 'list'));
    }

    public function create()
    {
        $title = $this->title;
        $subtitle = 'Novo Registro';

        return view($this->route . '.create', compact('title', 'subtitle'));
    }

    public function show($id)
    {
        try
        {
            $entity = $this->repository->find($id);

            $title = $this->title;
            $subtitle = 'Visualizar Registro #' . $id;

            return view($this->route . '.show', compact('title', 'subtitle', 'entity'));
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index')->with(['errors' => $ex->getMessage()]);
        }
    }

    public function print($id)
    {
        try
        {
            $entity = $this->repository->find($id);

            $title = $this->title;
            $subtitle = 'Visualizar Registro #' . $id;

            return view($this->route . '.print', compact('title', 'subtitle', 'entity'));
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index')->with(['errors' => $ex->getMessage()]);
        }
    }

    public function edit($id)
    {
        try
        {
            $entity = $this->repository->find($id);

            $title = $this->title;
            $subtitle = 'Alterar Registro #' . $id;

            return view($this->route . '.edit', compact('title', 'subtitle', 'entity'));
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index')->with(['errors' => $ex->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try
        {
            $entity = $this->repository->find($id);

            $this->repository->destroy($entity->id);

            return redirect()->route($this->route . '.index')->with(['success' => 'Registro excluído com sucesso']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index')->with(['errors' => $ex->getMessage()]);
        }
    }

    public function destroyBySelection(Request $request)
    {
        $ids = $request->all();

        if (empty($ids))
        {
            return redirect()->route($this->route . '.index')->with(['warning' => 'Nenhum registro foi selecionado']);
        }

        try
        {
            foreach ($ids['id'] as $id) {
                $entity = $this->repository->find($id);

                $this->repository->destroy($entity->id);
            }

            return redirect()->route($this->route . '.index')->with(['success' => 'Registros excluídos com sucesso']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index')->with(['errors' => $ex->getMessage()]);
        }
    }
}