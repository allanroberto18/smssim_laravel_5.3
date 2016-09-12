<?php

namespace SMSSim\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SMSSim\Repositories\ContractRepository;
use SMSSim\Models\Contract;
use SMSSim\Validators\ContractValidator;

/**
 * Class ContractRepositoryEloquent
 * @package namespace SMSSim\Repositories;
 */
class ContractRepositoryEloquent extends BaseRepository implements ContractRepository
{
    protected $fieldSearchable = [
        'client.name' => 'like',
        'vendor.name' => 'like'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contract::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
