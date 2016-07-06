<?php

namespace AppBundle\Controller;

use AppBundle\Entity\blockContent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdminBaseController extends Controller
{
    public $resultId;
    /**
     * @Route("/folder/admin_page", name="admin_page")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }


    /**
     * @Route("/folder/admin_page/add_product", name="add_product")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function add_productAction(Request $request){

        $form = $this->createFormBuilder()
        ->setAction($this->generateUrl('add_product'))
            ->add("block_title", TextType::class)
            ->add("block_subhead", TextType::class)
            ->add("block_abstract", TextareaType::class)
            ->add("block_misc", TextType::class)
            ->add("block_body", TextareaType::class)
            ->add("block_footmessage", TextareaType::class)
            ->add("block_price", TextType::class)
            ->add("block_2price", TextType::class)
            ->add("block_postage", TextType::class)
            ->add("block_packaging", TextType::class)
            ->add("block_pageType", HiddenType::class, array("data"=>"product"))
            ->add("block_size", TextType::class)
            ->add("block_varient", TextType::class)
            ->add("block_2varient", TextType::class)
            ->add("block_quantity", TextType::class)
            ->add("block_show", TextType::class)
            ->add("Submit",SubmitType::class)
            ->getForm()
        ;
        $form->handleRequest($request);

        return $this->render('admin/default/index.html.twig', array(
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'product_form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/folder/admin_page/add_article", name="add_article")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function add_articleAction(Request $request){
        $reqData = $this->get('app.dataControlManager');
        $reqData->setRepository("AppBundle:BlockContent");
        $requ = new BlockContent();

        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('add_article'))
            ->add("block_title", TextType::class)
            ->add("block_subhead", TextType::class)
            ->add("block_abstract", TextareaType::class)
            ->add("block_misc", TextType::class)
            ->add("block_body", TextareaType::class)
            ->add("block_footmessage", TextareaType::class)
            ->add("block_pageType", HiddenType::class, array("data"=>"article"))
            ->add("block_show", CheckboxType::class, array(
                'label' => 'Show/Hide',
                'required' => false,
            ))
            ->add("Submit",SubmitType::class)
            ->getForm()
        ;

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $requ->setBlockTitle($form->get("block_title")->getData());
            $requ->setBlockSubHead($form->get("block_subhead")->getData());
            $requ->setBlockAbstract($form->get("block_abstract")->getData());
            $requ->setBlockMisc($form->get("block_misc")->getData());
            $requ->setBlockBody($form->get("block_body")->getData());
            $requ->setBlockFootMessage($form->get("block_footmessage")->getData());
            $requ->setBlockPageType($form->get("block_pageType")->getData());
            $requ->setBlockShow($form->get("block_show")->getData());
            $this->resultId = $reqData->comitDataId($requ);
            echo $this->resultId;
        }

        return $this->render('admin/default/index.html.twig', array(
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'product_form' => $form->createView()
        ));
    }

}
