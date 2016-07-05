<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * blockContent
 *
 * @ORM\Table(name="block_content")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\blockContentRepository")
 */
class blockContent
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
     * @ORM\Column(name="block_title", type="string", length=255, nullable=true)
     */
    private $blockTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="block_subhead", type="string", length=255, nullable=true)
     */
    private $blockSubhead;

    /**
     * @var string
     *
     * @ORM\Column(name="block_abstract", type="text", nullable=true)
     */
    private $blockAbstract;

    /**
     * @var string
     *
     * @ORM\Column(name="block_misc", type="string", length=255, nullable=true)
     */
    private $blockMisc;

    /**
     * @var string
     *
     * @ORM\Column(name="block_body", type="text", nullable=true)
     */
    private $blockBody;

    /**
     * @var string
     *
     * @ORM\Column(name="block_footmessage", type="text", nullable=true)
     */
    private $blockFootmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="block_price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $blockPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="block_2price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $block2price;

    /**
     * @var string
     *
     * @ORM\Column(name="block_postage", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $blockPostage;

    /**
     * @var string
     *
     * @ORM\Column(name="block_packaging", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $blockPackaging;


    /**
     * @ORM\Column(name="block_pagetype", type="string", length=255, nullable=false)
     */

    private $blockPagetype;

    /**
     * @var string
     *
     * @ORM\Column(name="block_size", type="string", length=20, nullable=true)
     */
    private $blockSize;

    /**
     * @var string
     *
     * @ORM\Column(name="block_varient", type="string", length=255, nullable=true)
     */
    private $blockVarient;

    /**
     * @var string
     *
     * @ORM\Column(name="block_2varient", type="string", length=255, nullable=true)
     */
    private $block2varient;

    /**
     * @var int
     *
     * @ORM\Column(name="block_quantity", type="integer", nullable=true)
     */
    private $blockQuantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="block_show", type="boolean")
     */
    private $blockShow = 0;


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
     * Set blockTitle
     *
     * @param string $blockTitle
     *
     * @return blockContent
     */
    public function setBlockTitle($blockTitle)
    {
        $this->blockTitle = $blockTitle;

        return $this;
    }

    /**
     * Get blockTitle
     *
     * @return string
     */
    public function getBlockTitle()
    {
        return $this->blockTitle;
    }

    /**
     * Set blockSubhead
     *
     * @param string $blockSubhead
     *
     * @return blockContent
     */
    public function setBlockSubhead($blockSubhead)
    {
        $this->blockSubhead = $blockSubhead;

        return $this;
    }

    /**
     * Get blockSubhead
     *
     * @return string
     */
    public function getBlockSubhead()
    {
        return $this->blockSubhead;
    }

    /**
     * Set blockAbstract
     *
     * @param string $blockAbstract
     *
     * @return blockContent
     */
    public function setBlockAbstract($blockAbstract)
    {
        $this->blockAbstract = $blockAbstract;

        return $this;
    }

    /**
     * Get blockAbstract
     *
     * @return string
     */
    public function getBlockAbstract()
    {
        return $this->blockAbstract;
    }

    /**
     * Set blockMisc
     *
     * @param string $blockMisc
     *
     * @return blockContent
     */
    public function setBlockMisc($blockMisc)
    {
        $this->blockMisc = $blockMisc;

        return $this;
    }

    /**
     * Get blockMisc
     *
     * @return string
     */
    public function getBlockMisc()
    {
        return $this->blockMisc;
    }

    /**
     * Set blockBody
     *
     * @param string $blockBody
     *
     * @return blockContent
     */
    public function setBlockBody($blockBody)
    {
        $this->blockBody = $blockBody;

        return $this;
    }

    /**
     * Get blockBody
     *
     * @return string
     */
    public function getBlockBody()
    {
        return $this->blockBody;
    }

    /**
     * Set blockFootmessage
     *
     * @param string $blockFootmessage
     *
     * @return blockContent
     */
    public function setBlockFootmessage($blockFootmessage)
    {
        $this->blockFootmessage = $blockFootmessage;

        return $this;
    }

    /**
     * Get blockFootmessage
     *
     * @return string
     */
    public function getBlockFootmessage()
    {
        return $this->blockFootmessage;
    }

    /**
     * Set blockPrice
     *
     * @param string $blockPrice
     *
     * @return blockContent
     */
    public function setBlockPrice($blockPrice)
    {
        $this->blockPrice = $blockPrice;

        return $this;
    }

    /**
     * Get blockPrice
     *
     * @return string
     */
    public function getBlockPrice()
    {
        return $this->blockPrice;
    }

    /**
     * Set block2price
     *
     * @param string $block2price
     *
     * @return blockContent
     */
    public function setBlock2price($block2price)
    {
        $this->block2price = $block2price;

        return $this;
    }

    /**
     * Get block2price
     *
     * @return string
     */
    public function getBlock2price()
    {
        return $this->block2price;
    }

    /**
     * Set blockPostage
     *
     * @param string $blockPostage
     *
     * @return blockContent
     */
    public function setBlockPostage($blockPostage)
    {
        $this->blockPostage = $blockPostage;

        return $this;
    }

    /**
     * Get blockPostage
     *
     * @return string
     */
    public function getBlockPostage()
    {
        return $this->blockPostage;
    }

    /**
     * Set blockPackaging
     *
     * @param string $blockPackaging
     *
     * @return blockContent
     */
    public function setBlockPackaging($blockPackaging)
    {
        $this->blockPackaging = $blockPackaging;

        return $this;
    }

    /**
     * Get blockPackaging
     *
     * @return string
     */
    public function getBlockPackaging()
    {
        return $this->blockPackaging;
    }

    /**
     * Set blockSize
     *
     * @param string $blockSize
     *
     * @return blockContent
     */
    public function setBlockSize($blockSize)
    {
        $this->blockSize = $blockSize;

        return $this;
    }

    /**
     * Get blockSize
     *
     * @return string
     */
    public function getBlockSize()
    {
        return $this->blockSize;
    }

    /**
     * Set blockVarient
     *
     * @param string $blockVarient
     *
     * @return blockContent
     */
    public function setBlockVarient($blockVarient)
    {
        $this->blockVarient = $blockVarient;

        return $this;
    }

    /**
     * Get blockVarient
     *
     * @return string
     */
    public function getBlockVarient()
    {
        return $this->blockVarient;
    }

    /**
     * Set block2varient
     *
     * @param string $block2varient
     *
     * @return blockContent
     */
    public function setBlock2varient($block2varient)
    {
        $this->block2varient = $block2varient;

        return $this;
    }

    /**
     * Get block2varient
     *
     * @return string
     */
    public function getBlock2varient()
    {
        return $this->block2varient;
    }

    /**
     * Set blockQuantity
     *
     * @param integer $blockQuantity
     *
     * @return blockContent
     */
    public function setBlockQuantity($blockQuantity)
    {
        $this->blockQuantity = $blockQuantity;

        return $this;
    }

    /**
     * Get blockQuantity
     *
     * @return int
     */
    public function getBlockQuantity()
    {
        return $this->blockQuantity;
    }

    /**
     * Set blockShow
     *
     * @param boolean $blockShow
     *
     * @return blockContent
     */
    public function setBlockShow($blockShow)
    {
        $this->blockShow = $blockShow;

        return $this;
    }

    /**
     * Get blockShow
     *
     * @return bool
     */
    public function getBlockShow()
    {
        return $this->blockShow;
    }


    /**
     * Set blockPagetype
     *
     * @param $blockPagetype
     */
    public function setBlockPagetype($blockPagetype)
    {
       $this->blockPagetype = $blockPagetype;
    }

    /**
     * Get $blockPagetype
     *
     * @return mixed
     */
    public function getBlockPagetype()
    {
        return $this->blockPagetype;
    }
}
