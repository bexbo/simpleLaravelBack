<?php
namespace App\Entities;
use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectRepository;
use JsonSerializable;
use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Object_;


/**
 * @ORM\Entity
 * @ORM\Table(name="object_entity")
 */

class ObjectEntity implements JsonSerializable
{
    public function jsonSerialize(){ //makes json_encode work as intended
        return array(
            'num' => $this->num,
            'type'=>$this->type,
            'values'=>$this->valArray,
            'other_values'=>$this->otherValObj,
            'unique_id'=>$this->id
        );

    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $type;

    /**
     * @ORM\Column(type="integer")
     */
    protected $num;

    /**
     * @ORM\Column(name="valArray", type="array", nullable=true)
     */
    protected $valArray; //all "values" are saved as an array in a single column for simplicity


    /**
     * @ORM\Column(name="otherValObj", type="object", nullable=true)
     */
    protected $otherValObj;//other_val is saved as object in a single column

    /**
     * @return mixed
     */
    public function getOtherValObj()
    {
        return $this->otherValObj;
    }

    /**
     * @param mixed $otherValObj
     */
    public function setOtherValObj($otherValObj)
    {
        $this->otherValObj = $otherValObj;
    }

    /**
     * @return mixed
     */
    public function getValArray()
    {
        return $this->valArray;
    }

    /**
     * @param mixed $valArray
     */
    public function setValArray($valArray)
    {
        $this->valArray = $valArray;
    }



    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param $type
     */
    public function __construct()
    {

    }

}