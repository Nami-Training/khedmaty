<?php

namespace App\Services;

use App\Http\Trait\FileHandling;
use App\Repositories\MainRepository;
use Illuminate\Database\Eloquent\Model;
class MainService
{
    private $repository;
    use FileHandling;

    public function __construct(Model $model)
    {
        $this->repository = new MainRepository($model);
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function limit($num)
    {
        return $this->repository->limit($num);
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function findByColumn($column, $value)
    {
        return $this->repository->findByColumn($column, $value);
    }

    public function create($data)
    {
        return $this->repository->create($data);
    }

    public function update($id ,$data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function forceDelete($id)
    {
        return $this->repository->forceDelete($id,);
    }

    public function truncate()
    {
        $this->repository->truncate();
    }

    public function where($col, $value)
    {
        return $this->repository->where($col, $value);
    }

    public function whereIn($id, $values)
    {
        return $this->repository->whereIn($id, $values);
    }

    public function first()
    {
        return $this->repository->first();
    }

    public function getWith($col)
    {
        return $this->repository->getWith($col);
    }

    public function getWithWhere($withCol,$whereCol, $whereVal)
    {
        return $this->repository->getWithWhere($withCol,$whereCol, $whereVal);
    }

    public function updateorCreate($checks, $data)
    {
        return $this->repository->updateOrCreate($checks, $data);
    }

    public function whereBetween($col, $values)
    {
        return $this->repository->whereBetween($col, $values);
    }

    public function deleteWhere($column, $value)
    {
        $items = $this->findByColumn($column, $value);
        foreach ($items as $item) {
            $this->deleteFile($item->image);
        }
        return $this->repository->deleteWhere($column, $value);
    }
}
