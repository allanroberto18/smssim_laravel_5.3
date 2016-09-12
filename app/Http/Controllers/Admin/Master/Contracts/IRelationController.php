<?php

namespace SMSSim\Http\Controllers\Admin\Master\Contracts;

use Illuminate\Http\Request;

interface IRelationController
{
    public function index();

    public function create($relation);

    public function show($relation, $id);

    public function edit($relation, $id);

    public function destroy($id);

    public function destroyBySelection(Request $request);
}