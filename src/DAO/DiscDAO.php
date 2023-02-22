<?php
namespace Ciruela\DAO;

use Ciruela\DTO\DiscDTO;




interface DiscDAO{
    public function all();
    public function find(int $id);
    public function insert(DiscDTO $request);
    public function update(DiscDTO $request, int $id);
    public function delete(int $id);
}
