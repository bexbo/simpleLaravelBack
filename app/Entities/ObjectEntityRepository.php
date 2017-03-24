<?php


namespace App\Entities;
use App\Entities\ObjectEntity;
use Doctrine\ORM\EntityManager;

class ObjectEntityRepository//reposity for handling ObjectEntity
{

    /**
     * @var string
     */
    private $class = 'App\Entities\ObjectEntity';
    /**
     * @var EntityManager
     */
    private $em;//entitymanager


    public function __construct(EntityManager $em) //creates the enitymanager
    {
        $this->em = $em;
    }


    public function create(ObjectEntity $post)
    {

        $this->em->persist($post); //creates $post in the DB
        $this->em->flush();  //save changes made

    }

    public function update(ObjectEntity $post, $data) //updates all values by setting them to the new data
    {
        $post->setValArray($data['values']);
        $post->setOtherValObj($data['other_values']);
        $post->setNum($data['unique_id']);
        $post->setType($data['type']);


        $this->em->flush();
    }

    public function IDOfObject($id) //returns the sought after entity based on unique id
    {

        return $this->em->getRepository($this->class)->findOneBy(['id'=>$id]);


    }

    public function getAll(){ //returns all entities
        return $this->em->getRepository($this->class)->findAll();



    }
    public function delete(ObjectEntity $post) //deletes the specified entity
    {
        $this->em->remove($post);
        $this->em->flush();
    }
}

