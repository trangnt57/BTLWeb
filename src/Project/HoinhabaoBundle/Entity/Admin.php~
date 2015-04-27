<?php

namespace Project\HoinhabaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin", indexes={@ORM\Index(name="FK_880E0D76BB87CF27", columns={"MaHV"})})
 * @ORM\Entity
 */
class Admin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MaAdmin", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maadmin;

    /**
     * @var \Project\HoinhabaoBundle\Entity\Hoivien
     *
     * @ORM\ManyToOne(targetEntity="Project\HoinhabaoBundle\Entity\Hoivien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MaHV", referencedColumnName="MaHV")
     * })
     */
    private $mahv;



    /**
     * Get maadmin
     *
     * @return integer 
     */
    public function getMaadmin()
    {
        return $this->maadmin;
    }

    /**
     * Set mahv
     *
     * @param \Project\HoinhabaoBundle\Entity\Hoivien $mahv
     * @return Admin
     */
    public function setMahv(\Project\HoinhabaoBundle\Entity\Hoivien $mahv = null)
    {
        $this->mahv = $mahv;

        return $this;
    }

    /**
     * Get mahv
     *
     * @return \Project\HoinhabaoBundle\Entity\Hoivien 
     */
    public function getMahv()
    {
        return $this->mahv;
    }
}
