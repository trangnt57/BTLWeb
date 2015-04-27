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
use Symfony\Component\HttpFoundation\Session\Session;
class HoivienController extends Controller
{ 
    public function showAction($tendangnhap)
    {
        $session = new Session();
        $session->start();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
        $hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findOneByTendangnhap(''.$tendangnhap.'');
        $mahoivien = $hoivien->getMahv();
        $tacpham = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Tacpham')->findOneByMahv(''.$mahoivien.'');
        $giaithuong = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Giaithuong')->findOneByMahv(''.$mahoivien.'');
        if(!$hoivien){
            throw $this->createNotFoundException('Khong tim thay hoi vien ' . $tendangnhap);
        }
        $build['hoivien_item'] = $hoivien;
        $build['giaithuong'] = $giaithuong;
        $build['tacpham'] = $tacpham;
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        $changeTemplate = $this->get('project_hoinhabao.template');
        $mau = $changeTemplate->getMau();
        if(isset($_POST['templateForm'])){
            $mau = $changeTemplate->change();
        }
        if($mau == 1)
            return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_show.html.twig', $build);
        else if($mau == 2)
            return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_show2.html.twig', $build);
        else 
            return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_show3.html.twig', $build);
       
    }
    public function indexAction(){
        $session = new Session();
        $session->start();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
        $hoivien = $this->getDoctrine()->getRepository('ProjectHoinhabaoBundle:Hoivien')->findAll();
        if(!$hoivien){
            throw $this->createNotFoundException('không tìm thấy hội viên');
            
        }
        $build['hoivien'] = $hoivien;
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_show_all.html.twig', $build);
        
    }
    public function addAction(Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
                                <a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
           
        }
        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig', $build);
    }
    public function editAction($tendangnhap, Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
            return new Response("<p>Hội viên được cập nhật thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }
        $build['form'] = $form->createView();
        $build['tendangnhap'] = $username;
        $build['vaitro'] = $session->get('vaitro');
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig', $build);
    }
    public function deleteAction($tendangnhap, Request $request) {
       $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
          return new Response("<p>Xóa hội viên thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
        }
        
        $build['form'] = $form->createView();
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_add.html.twig', $build);
    }

    public function multideleteAction(Request $request){
        $session = $request->getSession();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
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
       
            return new Response("<p>Xóa thành công</p><a href='http://localhost/BTL/web/app_dev.php/hoivien'>Trang chủ</a>");
           
        }
    }

    public function reportAction(){
        
        $session = new Session();
        $session->start();
        $username = $session->get('tendangnhap');
        if(!$username){
            return $this->redirectToRoute('project_login');
        }
        //thong ke tong so luong hoi vien, giai thuong, tac pham
        $em = $this->getDoctrine()->getManager();
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

        //thong ke hoi vien theo toa soan
        $toasoan = $em->getRepository('ProjectHoinhabaoBundle:Toasoan')->findAll();
        $i = 0;
        $thongketheotoasoan;    
        foreach($toasoan as $ts){
            $matoasoan = $ts->getMatoasoan();
            $hv = $em->getRepository('ProjectHoinhabaoBundle:Hoivien')->findByMatoasoan(''.$matoasoan.'');
            $thongke['toasoan'] = $ts->getTentoasoan();
            $thongke['hoivien'] = $hv;
            $thongketheotoasoan[$i] = $thongke;
            $i++;
        }
        $build['thongketheotoasoan'] = $thongketheotoasoan;
        return $this->render('ProjectHoinhabaoBundle:Hoivien:hoivien_report.html.twig', $build);
    }
}
?>