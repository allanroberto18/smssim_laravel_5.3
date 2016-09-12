<?php

namespace SMSSim\Http\Controllers\Admin\Contracts;

use SMSSim\Http\Requests\Admin\ContractRequest;

interface IContractController
{
    public function store(ContractRequest $request);

    public function update($id, ContractRequest $request);
}