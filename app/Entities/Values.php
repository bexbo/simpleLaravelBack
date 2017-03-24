<?php
/**
 * Created by PhpStorm.
 * User: kamrat_benny
 * Date: 2017-03-17
 * Time: 00:22
 */

namespace App\Entities;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="values")
 */


class Values
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
    protected $data;

    /**
     * @ORM\Column(type="integer")
     */
    protected $num;


    /**
     * @ORM\ManyToOne(targetEntity="ObjectEntity", inversedBy="values")
     * @var ObjectEntity
     */

    protected $objectentity;

    /**
     * Values constructor.
     * @param $data
     * @param $num
     */
    public function __construct($data, $num)
    {
        $this->data = $data;
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
     * @return ObjectEntity
     */
    public function getObjectentity()
    {
        return $this->objectentity;
    }

    /**
     * @param ObjectEntity $objectentity
     */
    public function setObjectentity($objectentity)
    {
        $this->objectentity = $objectentity;
    }






}