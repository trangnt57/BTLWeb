<?php

namespace Project\HoinhabaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theloai
 *
 * @ORM\Table(name="theloai")
 * @ORM\Entity
 */
class Theloai
{
    /**
     * @var string
     *
     * @ORM\Column(name="TenTheLoai", type="string", length=50, nullable=false)
     */
    private $tentheloai;

    /**
     * @var string
     *
     * @ORM\Column(name="MoTa", type="text", nullable=false)
     */
    private $mota;

    /**
     * @var integer
     *
     * @ORM\Column(name="MaTheLoai", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matheloai;



    /**
     * Set tentheloai
     *
     * @param string $tentheloai
     * @return Theloai
     */
    public function setTentheloai($tentheloai)
    {
        $this->tentheloai = $tentheloai;

        return $this;
    }

    /**
     * Get tentheloai
     *
     * @return string 
     */
    public function getTentheloai()
    {
        return $this->tentheloai;
    }

    /**
     * Set mota
     *
     * @param string $mota
     * @return Theloai
     */
    public function setMota($mota)
    {
        $this->mota = $mota;

        return $this;
    }

    /**
     * Get mota
     *
     * @return string 
     */
    public function getMota()
    {
        return $this->mota;
    }

    /**
     * Get matheloai
     *
     * @return integer 
     */
    public function getMatheloai()
    {
        return $this->matheloai;
    }

    public function __toString(){
        return $this->tentheloai;
    }
}
