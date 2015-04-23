<?php
namespace Project\HoinhabaoBundle\Controller;
use Project\HoinhabaoBundle\Entity\Hoivien;
use Project\HoinhabaoBundle\Entity\Tacpham;
use Project\HoinhabaoBundle\Entity\Giaithuong;
use Project\HoinhabaoBundle\Entity\Theloai;
use Project\HoinhabaoBundle\Entity\Toasoan;
use Project\HoinhabaoBundle\Entity\Tinhthanh;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
class HoivienController extends Controller
{
    public function showAction($tendangnhap)
    {
        $hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
        if(!$hoivien){
            throw $this->createNotFoundException('Khong tim thay hoi vien ' . $tendangnhap);
        }
        $build['hoivien_item'] = $hoivien;
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_show.html.twig', $build);
    }
    public function indexAction(){
        $hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findAll();
        if(!$hoivien){
            throw $this->createNotFoundException('không tìm thấy hội viên');
            
        }
        $build['hoivien'] = $hoivien;
            return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_show_all.html.twig', $build);
    }
    public function addAction(Request $request){
        $hoivien = new Hoivien();
        $gioitinh = array(
            'nam' => 'Nam',
            'nữ' => 'Nữ'
        );
       
        $kichhoat = array('1' => 'Kích hoạt',
            '0' => 'Không kích hoạt' );
        $form = $this->createFormBuilder($hoivien)
            ->add('tendangnhap', 'text', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Tên Đăng Nhập'),
            ))
            ->add('matkhau','password', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Mật Khẩu'),
            ))
            ->add('hoten','text', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Họ Tên'),
            ))
            ->add('ngaysinh','date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'form-control', 'placeholder' => 'yyyy-MM-dd'),
            ))
            ->add('gioitinh', 'choice', array(
                'choices' => $gioitinh,
                'multiple' => false,
                'expanded' => true,
                'data'  => 'nam',
                'attr' => array('class' => 'form-control'),
            ))
            //->add('anhdaidien','file')
            ->add('quequan','text',array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Quê Quán'),
            ))
            ->add('email','email',array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Email'),
            ))
            ->add('cmnd','text',array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'CMND'),
            ))
            ->add('tieusu', 'textarea',array(
                'attr' => array('class' => 'form-control', 'rows'=> '3'),
            ))
            ->add('matoasoan', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Toasoan',
                'property' => 'tentoasoan',
                'multiple' => false,
                'attr' => array('class' => 'form-control'),
            ))
            ->add('kichhoat', 'choice', array(
                'choices' => $kichhoat,
                'multiple'=> false,
                'attr' => array('class' => 'form-control '),
            ))
            ->add('create','submit',array(
                'label' => 'Lưu',
                'attr' => array('class' => 'btn btn-primary mdi-action-input', 'id' => 'addhoivien-button'),

            ))
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($hoivien);
            $em->flush();
            return new Response ("<p>Hôi viên được thêm thành công<p>
                                <a>Trang chủ</a>");
           
        }
        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig', $build);
    }
    public function editAction($tendangnhap, Request $request){
        $gioitinh = array(
            'nam' => 'Nam',
            'nữ' => 'Nữ'
        );
        $kichhoat = array('1' => 'Kích hoạt',
            '0' => 'Không kích hoạt' );
        $em = $this->getDoctrine()->getManager();
        $hoivien = $em->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
        if(!$hoivien){
            throw $this->createNotFoundException(
                'Không tìm thấy hội viên ' . $tendangnhap
            );
        }
        $form = $this->createFormBuilder($hoivien)
            ->add('tendangnhap', 'text', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Tên Đăng Nhập'),
            ))
            ->add('matkhau','password', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Mật Khẩu'),
            ))
            ->add('hoten','text', array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Họ Tên'),
            ))
            ->add('ngaysinh','date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'form-control', 'placeholder' => 'yyyy-MM-dd'),
            ))
            ->add('gioitinh', 'choice', array(
                'choices' => $gioitinh,
                'multiple' => false,
                'expanded' => true,
                'data'  => 'nam',
                'attr' => array('class' => 'form-control'),
            ))
            //->add('anhdaidien','file')
            ->add('quequan','text',array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Quê Quán'),
            ))
            ->add('email','email',array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'Email'),
            ))
            ->add('cmnd','text',array(
                'attr' => array('class' => 'form-control', 'placeholder' => 'CMND'),
            ))
            ->add('tieusu', 'textarea',array(
                'attr' => array('class' => 'form-control', 'rows'=> '3'),
            ))
            ->add('matoasoan', 'entity', array(
                'class' => 'ProjectHoinhabaoBundle:Toasoan',
                'property' => 'tentoasoan',
                'multiple' => false,
                'attr' => array('class' => 'form-control'),
            ))
            ->add('kichhoat', 'choice', array(
                'choices' => $kichhoat,
                'multiple'=> false,
                'attr' => array('class' => 'form-control '),
            ))
            ->add('create','submit',array(
                'label' => 'Lưu',
                'attr' => array('class' => 'btn btn-primary mdi-action-input', 'id' => 'addhoivien-button'),

            ))
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $em->flush();
            return new Response('Hội viên được cập nhật thành công');
        }
        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig', $build);
    }
    public function deleteAction($tendangnhap, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $hoivien = $em->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');;
        if (!$hoivien) {
          throw $this->createNotFoundException(
                  'Không tìm thấy hội viên ' . $tendangnhap
          );
        }
        $form = $this->createFormBuilder($hoivien)
                ->add('delete', 'submit')
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
          $em->remove($hoivien);
          $em->flush();
          return new Response('Xóa hội viên thành công');
        }
        
        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig', $build);
    }

    public function multideleteAction(Request $request){
        if(empty($_POST['xoa'])){
          throw $this->createNotFoundException(
                  'Không có hội viên nào được chọn'
          );  
        }
        else{
           foreach ($_POST['xoa'] as $checked){
               $em = $this->getDoctrine()->getManager();
               $hoivien = $em->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByMahv(''.$checked.'');
               $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMahv(''.$hoivien->getMahv().'');
               $tacpham = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Tacpham')->findByMahv(''.$hoivien->getMahv().'');
               if(!$giaithuong && !$tacpham){
                    $em->remove($hoivien);
                    $em->flush();
                }else{
                    foreach($giaithuong as $gt){
                        $this->getDoctrine()->getManager()->remove($gt);
                        $this->getDoctrine()->getManager()->flush();
                    }
                    foreach ($tacpham as $tp) {
                        $this->getDoctrine()->getManager()->remove($tp);
                        $this->getDoctrine()->getManager()->flush();
                    }
                    $em->remove($hoivien);
                    $em->flush();
                } 
            }
       
            return new Response('Xóa thành công');
           
        }
    }

    public function reportAction(){
        
        //thong ke tong so luong hoi vien, giai thuong, tac pham
        $em = $em = $this->getDoctrine()->getManager();
        $hoivien = $em->getRepository('ProjectHoinhabaoBundle:Hoivien')->findAll();
        $tacpham = $em->getRepository('ProjectHoinhabaoBundle:Tacpham')->findAll();
        $giaithuong = $em->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findAll();
        $build['hoivien'] = $hoivien;
        $build['tacpham'] = $tacpham;
        $build['giaithuong'] = $giaithuong;
        $bieudo;
        $i = 0;
        foreach ($hoivien as $hv) {
            $mahoivien = $hv->getMahv();
            $tp = $em->getRepository('ProjectHoinhabaoBundle:Tacpham')->findByMahv(''.$mahoivien.'');
            $gt = $em->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findByMahv(''.$mahoivien.'');
            $bd['tendangnhap'] = $hv->getTendangnhap();
            $bd['tacpham'] = $tp;
            $bd['giaithuong'] = $gt;
            $bieudo[$i] = $bd;
            $i++;
        }
        $build['bieudo'] = $bieudo;
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_report.html.twig', $build);
    }
}
?>