<?php
namespace Ciruela\DAO\impl;

use App\Models\Disc;
use Ciruela\DAO\DiscDAO;
use Ciruela\DTO\DiscDTO;


class EloquentDiscDAO implements DiscDAO{

    public function all() {
        $result = [];
        $discs = Disc::all()->toArray();
        foreach ($discs as $disc){
            array_push($result, new DiscDTO(
                $disc['id'],
                $disc["title"],
                $disc["price"],
                $disc["year"],
                $disc["company_id"]
            ));
        }
        return $result;
	}


	public function find(int $id){
        $disc = Disc::findOrFail($id);
        $result = new DiscDTO(
            $disc['id'],
            $disc["title"],
            $disc["price"],
            $disc["year"],
            $disc["company_id"]
        );
        return $result;
	}

	public function insert(DiscDTO $request): bool {
        $disc = new Disc();
        $disc->title = $request->title();
        $disc->price = $request->price();
        $disc->year = $request->year();
        $disc->company_id = $request->company_id();
        return $disc->save();
	}

	public function update(DiscDTO $request, int $id): bool {
        $disc = Disc::findOrFail($id);
        $disc->title = $request->title();
        $disc->price = $request->price();
        $disc->year = $request->year();
        $disc->company_id = $request->company_id();
        return $disc->save();

	}

	public function delete(int $id): bool {
        $disc = Disc::findOrFail($id);
        return $disc->delete();
	}
}
