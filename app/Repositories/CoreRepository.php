<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

abstract class CoreRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();


    /**
     * @return Model
     */
    protected function startCondition(): Model
    {
        return clone $this->model;
    }
}
