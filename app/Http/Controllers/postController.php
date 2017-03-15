<?php

namespace App\Http\Controllers;

use EntityManager;
use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;
use App\Entities\ObjectEntity;

class postController extends Controller
{
    /**
       * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function get()
    {
        $alldata = array(array(
            array("id" => 1,"type"=>"foo"),
            array(1=>"psaj",2=>"sdf"),
            array("sdfopij"=>"apofj","dsfk"=>"ff")
            
        ),array(
        array("id" => 2,"type"=>"boo"),
        array(1=>"pj",2=>"sdf"),
        array("sopij"=>"aofj","dsfk"=>"ff")

    ))
        ;


        return json_encode($alldata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $jsonData = $request->all(); //parsing the JSON-dat
        //
        /*$object = new ObjectEntity();
        $object->setType('ny');

        EntityManager::persist($object);
        EntityManager::flush();*/
        return 'hello';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        return response()->json();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
