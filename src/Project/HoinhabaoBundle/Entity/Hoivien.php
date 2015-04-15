<?php

namespace Project\HoinhabaoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Hoivien
 *
 * @ORM\Table(name="hoivien", indexes={@ORM\Index(name="MaToaSoan", columns={"MaToaSoan"})})
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
class Hoivien
{
    /**
     * @var string
     *
     * @ORM\Column(name="TenDangNhap", type="string", length=50, nullable=false)
     */
    private $tendangnhap;

    /**
     * @var string
     *
     * @ORM\Column(name="MatKhau", type="string", length=50, nullable=false)
     */
    private $matkhau;

    /**
     * @var string
     *
     * @ORM\Column(name="HoTen", type="string", length=128, nullable=false)
     */
    private $hoten;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NgaySinh", type="date", nullable=false)
     */
    private $ngaysinh;

    /**
     * @var string
     *
     * @ORM\Column(name="GioiTinh", type="string", length=8, nullable=false)
     */
    private $gioitinh;

    /**
     * @var string $anhdaidien
     * @Assert\File( maxSize = "1024k", mimeTypesMessage = "Please upload a valid Image")
     * @ORM\Column(name="AnhDaiDien", type="string", length=255, nullable=false)
     */
    private $anhdaidien;

    /**
     * @var string
     *
     * @ORM\Column(name="QueQuan", type="string", length=255, nullable=false)
     */
    private $quequan;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=128, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="CMND", type="integer", nullable=false)
     */
    private $cmnd;

    /**
     * @var string
     *
     * @ORM\Column(name="TieuSu", type="text", nullable=false)
     */
    private $tieusu;

    /**
     * @var integer
     *
     * @ORM\Column(name="KichHoat", type="integer", nullable=false)
     */
    private $kichhoat;

    /**
     * @var integer
     *
     * @ORM\Column(name="MaHV", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mahv;

    /**
     * @var \Project\HoinhabaoBundle\Entity\Toasoan
     *
     * @ORM\ManyToOne(targetEntity="Project\HoinhabaoBundle\Entity\Toasoan")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="MaToaSoan", referencedColumnName="MaToaSoan")
     * })
     */
    private $matoasoan;



    /**
     * Set tendangnhap
     *
     * @param string $tendangnhap
     * @return Hoivien
     */
    public function setTendangnhap($tendangnhap)
    {
        $this->tendangnhap = $tendangnhap;

        return $this;
    }

    /**
     * Get tendangnhap
     *
     * @return string 
     */
    public function getTendangnhap()
    {
        return $this->tendangnhap;
    }

    /**
     * Set matkhau
     *
     * @param string $matkhau
     * @return Hoivien
     */
    public function setMatkhau($matkhau)
    {
        $this->matkhau = $matkhau;

        return $this;
    }

    /**
     * Get matkhau
     *
     * @return string 
     */
    public function getMatkhau()
    {
        return $this->matkhau;
    }

    /**
     * Set hoten
     *
     * @param string $hoten
     * @return Hoivien
     */
    public function setHoten($hoten)
    {
        $this->hoten = $hoten;

        return $this;
    }

    /**
     * Get hoten
     *
     * @return string 
     */
    public function getHoten()
    {
        return $this->hoten;
    }

    /**
     * Set ngaysinh
     *
     * @param \DateTime $ngaysinh
     * @return Hoivien
     */
    public function setNgaysinh($ngaysinh)
    {
        $this->ngaysinh = $ngaysinh;

        return $this;
    }

    /**
     * Get ngaysinh
     *
     * @return \DateTime 
     */
    public function getNgaysinh()
    {
        return $this->ngaysinh;
    }

    /**
     * Set gioitinh
     *
     * @param string $gioitinh
     * @return Hoivien
     */
    public function setGioitinh($gioitinh)
    {
        $this->gioitinh = $gioitinh;

        return $this;
    }

    /**
     * Get gioitinh
     *
     * @return string 
     */
    public function getGioitinh()
    {
        return $this->gioitinh;
    }

    /**
     * Set anhdaidien
     *
     * @param string $anhdaidien
     * @return Hoivien
     */
    public function setAnhdaidien($anhdaidien)
    {
        $this->anhdaidien = $anhdaidien;

        return $this;
    }

    /**
     * Get anhdaidien
     *
     * @return string 
     */
    public function getAnhdaidien()
    {
        return $this->anhdaidien;
    }

    /**
     * Set quequan
     *
     * @param string $quequan
     * @return Hoivien
     */
    public function setQuequan($quequan)
    {
        $this->quequan = $quequan;

        return $this;
    }

    /**
     * Get quequan
     *
     * @return string 
     */
    public function getQuequan()
    {
        return $this->quequan;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Hoivien
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cmnd
     *
     * @param integer $cmnd
     * @return Hoivien
     */
    public function setCmnd($cmnd)
    {
        $this->cmnd = $cmnd;

        return $this;
    }

    /**
     * Get cmnd
     *
     * @return integer 
     */
    public function getCmnd()
    {
        return $this->cmnd;
    }

    /**
     * Set tieusu
     *
     * @param string $tieusu
     * @return Hoivien
     */
    public function setTieusu($tieusu)
    {
        $this->tieusu = $tieusu;

        return $this;
    }

    /**
     * Get tieusu
     *
     * @return string 
     */
    public function getTieusu()
    {
        return $this->tieusu;
    }

    /**
     * Set kichhoat
     *
     * @param integer $kichhoat
     * @return Hoivien
     */
    public function setKichhoat($kichhoat)
    {
        $this->kichhoat = $kichhoat;

        return $this;
    }

    /**
     * Get kichhoat
     *
     * @return integer 
     */
    public function getKichhoat()
    {
        return $this->kichhoat;
    }

    /**
     * Get mahv
     *
     * @return integer 
     */
    public function getMahv()
    {
        return $this->mahv;
    }

    /**
     * Set matoasoan
     *
     * @param \Project\HoinhabaoBundle\Entity\Toasoan $matoasoan
     * @return Hoivien
     */
    public function setMatoasoan(\Project\HoinhabaoBundle\Entity\Toasoan $matoasoan = null)
    {
        $this->matoasoan = $matoasoan;

        return $this;
    }

    /**
     * Get matoasoan
     *
     * @return \Project\HoinhabaoBundle\Entity\Toasoan 
     */
    public function getMatoasoan()
    {
        return $this->matoasoan;
    }




     public function getFullImagePath() {
        return null === $this->anhdaidien ? null : $this->getUploadRootDir(). $this->anhdaidien;
    }
 
    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir().$this->getMahv()."/";
    }
 
    protected function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../web/upload/';
    }
 
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function uploadImage() {
        // the file property can be empty if the field is not required
        if (null === $this->anhdaidien) {
            return;
        }
        if(!$this->mahv){
            $this->anhdaidien->move($this->getTmpUploadRootDir(), $this->anhdaidien->getClientOriginalName());
        }else{
            $this->anhdaidien->move($this->getUploadRootDir(), $this->anhdaidien->getClientOriginalName());
        }
        $this->setAnhdaidien($this->anhdaidien->getClientOriginalName());
    }
 
    /**
     * @ORM\PostPersist()
     */
    public function moveImage()
    {
        if (null === $this->anhdaidien) {
            return;
        }
        if(!is_dir($this->getUploadRootDir())){
            mkdir($this->getUploadRootDir());
        }
        copy($this->getTmpUploadRootDir().$this->anhdaidien, $this->getFullImagePath());
        unlink($this->getTmpUploadRootDir().$this->anhdaidien);
    }
 
    /**
     * @ORM\PreRemove()
     */
    public function removeImage()
    {
        unlink($this->getFullImagePath());
        rmdir($this->getUploadRootDir());
    }
}
