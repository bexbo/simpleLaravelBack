<?php
/**
 * Created by PhpStorm.
 * User: kamrat_benny
 * Date: 2017-03-20
 * Time: 14:48
 */

namespace App\Entities;

use Doctrine\ORM\Mapping AS ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="otherValues")
 */



class OtherValues
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $attName;
    /**
     * @ORM\Column(type="string")
     */
    protected $data;


    /**
     * @ORM\ManyToOne(targetEntity="ObjectEntity", inversedBy="values")
     * @var ObjectEntity
     */

    protected $objectentity;

    /**
     * OtherValues constructor.
     * @param $attName
     * @param $data
     * @param ObjectEntity $objectentity
     */
    public function __construct($attName, $data, ObjectEntity $objectentity)
    {
        $this->attName = $attName;
        $this->data = $data;
        $this->objectentity = $objectentity;
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
    public function getAttName()
    {
        return $this->attName;
    }

    /**
     * @param mixed $attName
     */
    public function setAttName($attName)
    {
        $this->attName = $attName;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getObjectentity()
    {
        return $this->objectentity;
    }

    /**
     * @param mixed $objectentity
     */
    public function setObjectentity($objectentity)
    {
        $this->objectentity = $objectentity;
    }

}