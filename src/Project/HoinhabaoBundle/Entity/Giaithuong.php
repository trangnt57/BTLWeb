<?php

namespace Project\HoinhabaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Giaithuong
 *
 * @ORM\Table(name="giaithuong", indexes={@ORM\Index(name="MaHV", columns={"MaHV"}), @ORM\Index(name="MaTacPham", columns={"MaTacPham"})})
 * @ORM\Entity
 */
class Giaithuong
{
    /**
     * @var string
     *
     * @ORM\Column(name="TenGiaiThuong", type="string", length=128, nullable=false)
     */
    private $tengiaithuong;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NgayDatGiai", type="date", nullable=false)
     */
    private $ngaydatgiai;

    /**
     * @var integer
     *
     * @ORM\Column(name="MaGiaiThuong", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $magiaithuong;

    /**
     * @var \Project\HoinhabaoBundle\Entity\Tacpham
     *
     * @ORM\ManyToOne(targetEntity="Project\HoinhabaoBundle\Entity\Tacpham")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MaTacPham", referencedColumnName="MaTacPham")
     * })
     */
    private $matacpham;

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
     * Set tengiaithuong
     *
     * @param string $tengiaithuong
     * @return Giaithuong
     */
    public function setTengiaithuong($tengiaithuong)
    {
        $this->tengiaithuong = $tengiaithuong;

        return $this;
    }

    /**
     * Get tengiaithuong
     *
     * @return string 
     */
    public function getTengiaithuong()
    {
        return $this->tengiaithuong;
    }

    /**
     * Set ngaydatgiai
     *
     * @param \DateTime $ngaydatgiai
     * @return Giaithuong
     */
    public function setNgaydatgiai($ngaydatgiai)
    {
        $this->ngaydatgiai = $ngaydatgiai;

        return $this;
    }

    /**
     * Get ngaydatgiai
     *
     * @return \DateTime 
     */
    public function getNgaydatgiai()
    {
        return $this->ngaydatgiai;
    }

    /**
     * Get magiaithuong
     *
     * @return integer 
     */
    public function getMagiaithuong()
    {
        return $this->magiaithuong;
    }

    /**
     * Set matacpham
     *
     * @param \Project\HoinhabaoBundle\Entity\Tacpham $matacpham
     * @return Giaithuong
     */
    public function setMatacpham(\Project\HoinhabaoBundle\Entity\Tacpham $matacpham = null)
    {
        $this->matacpham = $matacpham;

        return $this;
    }

    /**
     * Get matacpham
     *
     * @return \Project\HoinhabaoBundle\Entity\Tacpham 
     */
    public function getMatacpham()
    {
        return $this->matacpham;
    }

    /**
     * Set mahv
     *
     * @param \Project\HoinhabaoBundle\Entity\Hoivien $mahv
     * @return Giaithuong
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

    /**
     * @var string
     */
    private $mota;


    /**
     * Set mota
     *
     * @param string $mota
     * @return Giaithuong
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
}
