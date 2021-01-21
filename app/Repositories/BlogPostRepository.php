<?php


namespace App\Repositories;
use App\Models\BlogPost as ModelEntity;

class BlogPostRepository extends CoreRepository
{
    protected function getModelClass(): string
    {
        return ModelEntity::class;
    }

    public function getAllWithPaginate()
    {
        $columns = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'user_id',
            'category_id'
        ];

        $result = $this->startCondition()
            ->select($columns)
            ->orderBy('id', 'DESC')
            ->with('user:id,name','category:id,title')
            ->paginate(15);
        return $result;
    }

    public function getPostById($id)
    {
        $result = $this->startCondition()
            ->with('user:id,name','category:id,title')
            ->find($id);
        return $result;
    }

}
