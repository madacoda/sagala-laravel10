<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Repository
{
    protected $model;

    /**
     * get all data
     *
     * @return Collection
     */
    public function all()
    {
        return $this->model->latest()->get();
    }

    /**
     * store data
     *
     * @param array $data
     * @return Model
     */
    public function store(array $formData)
    {
        return $this->model->create($formData);
    }

    /**
     * find data by id
     *
     * @param int $id
     * @return Model
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * update data by id
     *
     * @param array $data
     * @param int $id
     * @return Model
     * @return mixed
     */
    public function update(array $formData, int $id)
    {
        $model = $this->find($id);
        if ($model) {
            $model->update($formData);
            return $model;
        }
        return 0;
    }

    /**
     * delete data by id
     *
     * @param int $id
     * @return Model
     * @return mixed
     */
    public function destroy(int $id)
    {
        $model = $this->find($id);
        if ($model) {
            return $model->delete();
        }
        return 0;
    }
}
