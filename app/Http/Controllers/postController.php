<?php

namespace App\Http\Controllers;


use EntityManager;
use Illuminate\Http\Request as Request;

use App\Entities\ObjectEntity;
use App\Entities\ObjectEntityRepository as Repo;


class postController extends Controller
{
    /**
     * postController constructor.
     */
    private $repo;
    public function __construct(Repo $repo)
    {
        $this->repo = $repo;
    }




    public function get() //returns all stored entities
    {
        $allObjects = $this->repo->getAll();
        $alldata = $allObjects;

        return response()->json($alldata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) //creates new entity and returns it
    {

        $data = $request->all(); //parsing the JSON-dat
        $object = new ObjectEntity();
        $object->setType($data['type']);
        $object->setNum($data['num']);

        $this->repo->create($object);



        return response()->json($object);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) //updates entity based on unique id
    {
        $data = $request->all(); //parsing the JSON-data
        $id = $data['unique_id'];

        $object = $this->repo->IDOfObject($id);

        $this->repo->update($object,$data);

        return response()-> json('success');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)//deletes entity based on unique id
    {
        $data = $request->all();
        $id = $data['unique_id'];
        $object = $this->repo->IDOfObject($id);
        $this->repo->delete($object);
        return response()->json('delete success');
        //
    }

}
