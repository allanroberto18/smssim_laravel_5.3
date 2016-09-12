<?php

namespace SMSSim\Http\Controllers\Admin\Master;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use SMSSim\Http\Controllers\Admin\Master\Contracts\IMaxRelationController;

class MaxRelationController extends Controller  implements IMaxRelationController
{
    protected $repository;
    protected $title;
    protected $subTitle;
    protected $route;

    protected $relationEntity;
    protected $relatoinRoute;

    public function index($relation)
    {
        try
        {
            $entityRelation = $this->relationEntity->find($relation);

            $title = $this->title;
            $subtitle = 'Listar/Pesquisar Registros';

            $list = $this->repository->findWhere([ 'id', $entityRelation->id ])->paginate();

            return view($this->route . '.index', compact('title', 'subtitle', 'list', 'entityRelation'));

        } catch (\Exception $ex)
        {
            return redirect()->route($this->relatoinRoute . '.index')->with(['errors' => $ex->getMessage()]);
        }
    }

    public function create($relation)
    {
        try
        {
            $entityRelation = $this->relationEntity->find($relation);

            $title = $this->title;
            $subtitle = 'Novo Registro';

            return view($this->route . '.create', compact('title', 'subtitle', 'entityRelation'));
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index', [ 'id' => $relation ])->with(['errors' => $ex->getMessage()]);
        }
    }

    public function show($relation, $id)
    {
        try
        {
            $entityRelation = $this->relationEntity->find($relation);

            $entity = $this->repository->find($id);

            $title = $this->title;
            $subtitle = 'Visualizar Registro #' . $id;

            return view($this->route . '.show', compact('title', 'subtitle', 'entity', 'entityRelation'));
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index', [ 'id' => $relation ])->with(['errors' => $ex->getMessage()]);
        }
    }

    public function edit($relation, $id)
    {
        try
        {
            $entityRelation = $this->relationEntity->find($relation);

            $entity = $this->repository->find($id);

            $title = $this->title;
            $subtitle = 'Alterar Registro #' . $id;

            return view($this->route . '.edit', compact('title', 'subtitle', 'entity', 'entityRelation'));
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index', [ 'id' => $relation ])->with(['errors' => $ex->getMessage()]);
        }
    }

    public function destroy($relation, $id)
    {
        try
        {
            $this->relationEntity->find($relation);

            $entity = $this->repository->find($id);

            $this->repository->destroy($entity->id);

            return redirect()->route($this->route . '.index', [ 'id' => $relation ])->with(['success' => 'Registro excluído com sucesso']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index', [ 'id' => $relation ])->with(['errors' => $ex->getMessage()]);
        }
    }

    public function destroyBySelection($relation, Request $request)
    {
        $ids = $request->all();

        if (empty($ids))
        {
            return redirect()->route($this->route . '.index', [ 'id' => $relation ])->with(['warning' => 'Nenhum registro foi selecionado']);
        }

        try
        {
            $this->relationEntity->find($relation);

            foreach ($ids['id'] as $id) {
                $entity = $this->repository->find($id);

                $this->repository->destroy($entity->id);
            }

            return redirect()->route($this->route . '.index', [ 'id' => $relation ])->with(['success' => 'Registros excluídos com sucesso']);
        }
        catch (\Exception $ex)
        {
            return redirect()->route($this->route . '.index', [ 'id' => $relation ])->with(['errors' => $ex->getMessage()]);
        }
    }
}