<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class MainRepository
{
    private Model $model;

    public function __construct(Model $model)
    {
        return $this->model = $model;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function limit($num)
    {
        return $this->model::limit($num)->get();
    }

    public function whereLimit($column, $value,$num)
    {
        return $this->model::where($column, $value)->limit($num)->get();
    }

    public function findById($id)
    {
        return $this->model::find($id);
    }

    public function findByColumn($column, $value)
    {
        return $this->model::where($column, $value)->get();
    }

    public function findByColumnWhere($column, $value, $item, $itemValue)
    {
        return $this->model::where($column, $value)->where($item, $itemValue)->get();
    }

    public function whereOrWhere($item1, $value1, $item2, $value2)
    {
        return $this->model->where($item1, $value1)->orWhere($item2, $value2)->get();
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update($id ,array $data)
    {
        return $this->findById($id)->update($data);
    }

    public function delete($id)
    {
        $this->findById($id)->delete();
    }

    public function forceDelete($id)
    {
        $this->findById($id)->forceDelete();
    }

    public function where($col, $value)
    {
        return $this->model->where($col, $value)->get();
    }

    public function whereIn($id, $values)
    {
        return $this->model::whereIn($id, $values)->get();
    }

    public function first()
    {
        return $this->model::first();
    }

    public function getWith($col)
    {
        return $this->model::with([$col])->get();
    }

    public function getWithWhere($withCol,$whereCol, $whereVal)
    {
        return $this->model::with($withCol)->where($whereCol,$whereVal)->get();
    }

    public function updateorCreate($checks, $data)
    {
        return $this->model::updateOrCreate($checks, $data);
    }

    public function whereBetween($col, $values)
    {
        return $this->model::whereBetween($col, $values)->get();
    }

    public function deleteWhere($column, $value)
    {
        return $this->model::where($column, $value)->delete();
    }
}
