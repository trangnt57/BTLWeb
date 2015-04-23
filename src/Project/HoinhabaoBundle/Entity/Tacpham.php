<?php

namespace Project\HoinhabaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tacpham
 *
 * @ORM\Table(name="tacpham", indexes={@ORM\Index(name="MaHV", columns={"MaHV"}), @ORM\Index(name="MaTheLoai", columns={"MaTheLoai"})})
 * @ORM\Entity
 */
class Tacpham
{
    /**
     * @var string
     *
     * @ORM\Column(name="TenTacPham", type="string", length=50, nullable=false)
     */
    private $tentacpham;

    /**
     * @var string
     *
     * @ORM\Column(name="MoTa", type="text", nullable=false)
     */
    private $mota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NgaySangTac", type="date", nullable=false)
     */
    private $ngaysangtac;

   
    /**
     * @var string
     *
     * @ORM\Column(name="LienKet", type="string", length=255, nullable=true)
     */
    private $lienket;

    /**
     * @var integer
     *
     * @ORM\Column(name="MaTacPham", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matacpham;

    /**
     * @var \Project\HoinhabaoBundle\Entity\Theloai
     *
     * @ORM\ManyToOne(targetEntity="Project\HoinhabaoBundle\Entity\Theloai")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MaTheLoai", referencedColumnName="MaTheLoai")
     * })
     */
    private $matheloai;

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
     * Set tentacpham
     *
     * @param string $tentacpham
     * @return Tacpham
     */
    public function setTentacpham($tentacpham)
    {
        $this->tentacpham = $tentacpham;

        return $this;
    }

    /**
     * Get tentacpham
     *
     * @return string 
     */
    public function getTentacpham()
    {
        return $this->tentacpham;
    }

    /**
     * Set mota
     *
     * @param string $mota
     * @return Tacpham
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
     * Set ngaysangtac
     *
     * @param \DateTime $ngaysangtac
     * @return Tacpham
     */
    public function setNgaysangtac($ngaysangtac)
    {
        $this->ngaysangtac = $ngaysangtac;

        return $this;
    }

    /**
     * Get ngaysangtac
     *
     * @return \DateTime 
     */
    public function getNgaysangtac()
    {
        return $this->ngaysangtac;
    }

  

    /**
     * Set lienket
     *
     * @param string $lienket
     * @return Tacpham
     */
    public function setLienket($lienket)
    {
        $this->lienket = $lienket;

        return $this;
    }

    /**
     * Get lienket
     *
     * @return string 
     */
    public function getLienket()
    {
        return $this->lienket;
    }

    /**
     * Get matacpham
     *
     * @return integer 
     */
    public function getMatacpham()
    {
        return $this->matacpham;
    }

    /**
     * Set matheloai
     *
     * @param \Project\HoinhabaoBundle\Entity\Theloai $matheloai
     * @return Tacpham
     */
    public function setMatheloai(\Project\HoinhabaoBundle\Entity\Theloai $matheloai = null)
    {
        $this->matheloai = $matheloai;

        return $this;
    }

    /**
     * Get matheloai
     *
     * @return \Project\HoinhabaoBundle\Entity\Theloai 
     */
    public function getMatheloai()
    {
        return $this->matheloai;
    }

    /**
     * Set mahv
     *
     * @param \Project\HoinhabaoBundle\Entity\Hoivien $mahv
     * @return Tacpham
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

    public function __toString(){
        return $this->tentacpham;
    }
}
