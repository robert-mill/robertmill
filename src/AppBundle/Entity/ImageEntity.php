<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageEntity
 *
 * @ORM\Table(name="image_entity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageEntityRepository")
 */
class ImageEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="image_name", type="string", length=255, nullable=true)
     */
    private $imageName;

    /**
     * @var int
     *
     * @ORM\Column(name="block_id_fk", type="integer", nullable=true)
     */
    private $blockIdFk;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     *
     * @return ImageEntity
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set blockIdFk
     *
     * @param integer $blockIdFk
     *
     * @return ImageEntity
     */
    public function setBlockIdFk($blockIdFk)
    {
        $this->blockIdFk = $blockIdFk;

        return $this;
    }

    /**
     * Get blockIdFk
     *
     * @return int
     */
    public function getBlockIdFk()
    {
        return $this->blockIdFk;
    }
}

