<?php

namespace Project\HoinhabaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Toasoan
 *
 * @ORM\Table(name="toasoan", indexes={@ORM\Index(name="MaTinhThanh", columns={"MaTinhThanh"})})
 * @ORM\Entity
 */
class Toasoan
{
    /**
     * @var string
     *
     * @ORM\Column(name="TenToaSoan", type="string", length=128, nullable=false)
     */
    private $tentoasoan;

    /**
     * @var integer
     *
     * @ORM\Column(name="MaToaSoan", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matoasoan;

    /**
     * @var \Project\HoinhabaoBundle\Entity\Tinhthanh
     *
     * @ORM\ManyToOne(targetEntity="Project\HoinhabaoBundle\Entity\Tinhthanh")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MaTinhThanh", referencedColumnName="MaTinhThanh")
     * })
     */
    private $matinhthanh;



    /**
     * Set tentoasoan
     *
     * @param string $tentoasoan
     * @return Toasoan
     */
    public function setTentoasoan($tentoasoan)
    {
        $this->tentoasoan = $tentoasoan;

        return $this;
    }

    /**
     * Get tentoasoan
     *
     * @return string 
     */
    public function getTentoasoan()
    {
        return $this->tentoasoan;
    }

    /**
     * Get matoasoan
     *
     * @return integer 
     */
    public function getMatoasoan()
    {
        return $this->matoasoan;
    }

    /**
     * Set matinhthanh
     *
     * @param \Project\HoinhabaoBundle\Entity\Tinhthanh $matinhthanh
     * @return Toasoan
     */
    public function setMatinhthanh(\Project\HoinhabaoBundle\Entity\Tinhthanh $matinhthanh = null)
    {
        $this->matinhthanh = $matinhthanh;

        return $this;
    }

    /**
     * Get matinhthanh
     *
     * @return \Project\HoinhabaoBundle\Entity\Tinhthanh 
     */
    public function getMatinhthanh()
    {
        return $this->matinhthanh;
    }

    public function __toString(){
        return $this->tentoasoan;
    }
}
