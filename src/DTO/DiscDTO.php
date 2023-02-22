<?php
namespace Ciruela\DTO;

use JsonSerializable;

class DiscDTO implements JsonSerializable
{

    public function __construct(private ?int $id, private string $title,private float $price, private int $year,private int $company_id){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->year = $year;
        $this->company_id = $company_id;
    }

    function id(){
        return $this->id;
    }

    function title(){
        return $this->title;
    }

    function price(){
        return $this->price;
    }

    function year(){
        return $this->year;
    }

    function company_id(){
        return $this->company_id;
    }

	public function jsonSerialize() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'year' => $this->year,
            'company_id' => $this->company_id
        ];
	}
}
