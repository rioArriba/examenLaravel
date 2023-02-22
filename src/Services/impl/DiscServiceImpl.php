<?php
namespace Ciruela\Services\impl;

use Ciruela\DAO\DiscDAO;
use Ciruela\DTO\DiscDTO;
use Ciruela\Services\DiscService;
use Ciruela\DAO\impl\EloquentDiscDAO;


class DiscServiceImpl implements DiscService
{
    private DiscDAO $discs;

    function __construct()
    {
        $this->discs = new EloquentDiscDAO();
    }

    public function all(): array{
        return $this->discs->all();
    }

    public function find(int $id)
    {
        return $this->discs->find($id);
    }

    public function insert(DiscDTO $request): bool
    {
        return $this->discs->insert($request);
    }

    public function update(DiscDTO $request, int $id): bool
    {
        return $this->discs->update($request,$id);;
    }

    public function delete(int $id): bool
    {
        return $this->discs->delete($id);
    }
}
