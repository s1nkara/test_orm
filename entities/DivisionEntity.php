<?php


namespace app\entities;
use app\DTO\DivisionDto;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class DivisionEntity
 * @package app\entities
 * @ORM\Entity()
 * @ORM\Table(name="division")
 */
class DivisionEntity
{
    /**
     * id подразделения
     *
     * @var int $id
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * parentId подразделения
     *
     * @var int $parentId
     * @ORM\Column(name="parent_id", type="integer")
     */
    private $parentId;

    /**
     * Является ли последним узлом дерева
     *
     * @var bool $isLeaf
     * @ORM\Column(name="is_leaf", type="boolean")
     */
    private $isLeaf;

    /**
     * Название дисциплины
     *
     * @var string $name
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getParentId() : int
    {
        return $this->parentId;
    }

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     * @param string $name
     * @return DivisionEntity
     */
    public function setName(string $name): DivisionEntity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set name
     * @param int $parentId
     * @return DivisionEntity
     */
    public function setParentId(int $parentId): DivisionEntity
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Set isLeaf
     * @param bool $isLeaf
     * @return DivisionEntity
     */
    public function setLeaf(bool $isLeaf): DivisionEntity
    {
        $this->isLeaf = $isLeaf;
        return $this;
    }
}