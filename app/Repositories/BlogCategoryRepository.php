<?php


namespace App\Repositories;
use App\Models\BlogCategory as ModelEntity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BlogCategoryRepository extends CoreRepository
{
    protected function getModelClass(): string
    {
        return ModelEntity::class;
    }


    /**
     * @param $id
     * @return Model
     */
    public function getEdit($id): ?Model
    {
        return $this->startCondition()->find($id);
    }

    public function getForComboBox(): ?Collection
    {
        $result = $this->startCondition()
            ->selectRaw('id, CONCAT (id, ". ", title) as id_title')
            ->toBase()
            ->get();
        return $result;
    }
}
