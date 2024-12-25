<?php

namespace App\Repositories\PartRepository;

use App\Models\Part;
use App\Repositories\PartRepository\PartRepositoryInterface;

class PartRepository implements PartRepositoryInterface
{

    public function all()
    {
        return Part::all();
    }

    public function create(array $data)
    {
        Part::create($data);
    }

    public function find($id)
    {
        return Part::findOrFail($id);
    }

    public function update(array $data, $id)
    {
        $part = Part::findOrFail($id);
        $part->update($data);
    }

    public function delete($id)
    {
        Part::destroy($id);
    }
}
