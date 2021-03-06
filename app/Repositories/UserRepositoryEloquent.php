<?php

namespace SMSSim\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SMSSim\Repositories\UserRepository;
use SMSSim\Models\User;
use SMSSim\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace SMSSim\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{

    protected $fieldSearchable = [ 'name' => 'like', 'role' => 'like' ];

    public function getUsersByRole($role){
        return $this->model->where([ 'role' => $role ])->pluck('name','id');
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
