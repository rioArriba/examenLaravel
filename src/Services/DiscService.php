<?php
namespace Ciruela\Services;

use Ciruela\DTO\DiscDTO;



interface DiscService{
    public function all(): array;
    public function find(int $id);
    public function insert(DiscDTO $request);
    public function update(DiscDTO $request, int $id);
    public function delete(int $id);
}
