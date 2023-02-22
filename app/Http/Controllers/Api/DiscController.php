<?php

namespace App\Http\Controllers\Api;

use Ciruela\DTO\DiscDTO;
use Illuminate\Http\Request;
use Ciruela\Services\DiscService;
use App\Http\Requests\DiscRequest;

use App\Http\Controllers\Controller;
use Ciruela\Services\impl\DiscServiceImpl;

class DiscController extends Controller
{


    private DiscService $servicio;

    public function __construct()
    {
        $this->middleware('auth:sanctum',['except' => ['index', 'show']]);
        $this->servicio = new DiscServiceImpl();
    }

    public function index()
    {
        return response()->json($this->servicio->all(),200);
    }

    public function store(DiscRequest $request)
    {
        $discDTO = new DiscDTO(
            null,
            $request->title,
            $request->price,
            $request->year,
            $request->company_id,
            
            //$request->company()->associate(Company::findOrFail($request->company_id))
        );

        return response()->json($this->servicio->insert($discDTO),201);
    }

    public function show($id)
    {
        return response()->json($this->servicio->find($id),200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        $discDTO = new DiscDTO(
            null,
            $request->title,
            $request->price,
            $request->year,
            $request->company_id,
            //$request->company()->associate(Company::findOrFail($request->company_id))
        );

        return response()->json($this->servicio->update($discDTO,$id),201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json($this->servicio->delete($id),204);
    }
}
