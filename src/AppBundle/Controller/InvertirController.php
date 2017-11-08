<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use BackendBundle\Entity\Ctacte;
use BackendBundle\Entity\Proyectos;
use BackendBundle\Entity\Movimientos;

class InvertirController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function invertirAction(Request $request, Proyectos $proyectos) {
        $acciones = 0;
        $apago = 0;
        $user = $this->getUser();
        $idu = $user->getIdusuario();
        $em = $this->getDoctrine()->getManager();
        $compra = new Movimientos();
        $form = $this->createForm('AppBundle\Form\MovimientosType', $compra);
        $ctacte_repo = $em->createQuery(
                        "select sum(c.monto)  from BackendBundle:Ctacte c where c.usuariousuario=$idu and c.estado=3")->setMaxResults(1)->getOneOrNullResult();
        $edo_hecho = $em->getRepository("BackendBundle:Config")->find(3);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $acciones = $form->get('acciones')->getData();
            $moviemiento = $form->get('tipoaccion')->getData();
            if ($acciones > 0) {
                if ($moviemiento == 'Compra') {
                    if (($proyectos->getAcciones()-$proyectos->getVendidas()) <= $acciones) {
                        $apago = $compra->getAcciones() * ($proyectos->getValor() + $proyectos->getCop());
                        if ($ctacte_repo[1] >= $apago) {
                            $compra->setReaded(0);
                            $compra->setProyectos($proyectos);
                            $compra->setUsrdestino($user);
                            $compra->setUsuariousuario($user);
                            $compra->setPrecio($apago); //NO LO GUARDA
                            $compra->setEstado(1);
                            $em->persist($compra);
                            $flush = $em->flush($compra);

                            $proyectos->setVendidas($compra->getAcciones() + $proyectos->getVendidas());
                            $em->persist($proyectos);
                            $em->flush($proyectos);
                            
                            if ($flush == null) {
                                $cta = new Ctacte();
                                $cta->setEstado($edo_hecho);
                                $cta->setFechaingreso(new \DateTime('now'));
                                $cta->setFechavalidacion(new \DateTime('now'));
                                $cta->setMonto(-1 * $apago);
                                $cta->setMovimiento('Inversion');
                                $cta->setUsuariousuario($user);
                                $cta->setCodigocomprobante($proyectos->getCodigo());
                                $em->persist($cta);
                                if ($em->flush($cta) == null) {
                                    $this->get('session')->getFlashBag()->add('success', "Acciones Compradas");
                                }
                            } else {
                                $this->get('session')->getFlashBag()->add('danger', ">Acciones NO  Compradas");
                            }
                        } else {
                            $this->get('session')->getFlashBag()->add('danger', "La Cantidad de Acciones Excede su monto disponible");
                        }
                    } else {
                        $this->get('session')->getFlashBag()->add('danger', "La Cantidad de acciones a comprar, es mayor que las acciones disponibles");
                    }
                }
            } else {
                $this->get('session')->getFlashBag()->add('danger', "Debe al menos transar 1 accion");
            }
        }

        return $this->render('AppBundle:Invertir:index.html.twig', array(
                    'proyecto' => $proyectos,
                    'form' => $form->createView(),
                    'acciones' => $acciones,
                    'monto' => $ctacte_repo,
                    'pagar' => $apago
        ));
    }

}
