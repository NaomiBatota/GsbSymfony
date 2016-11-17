<?php
namespace Pg\GsbFraisBundle\Controller;
require_once("include/fct.inc.php");
//require_once ("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use PdoGsb;

class ListeTabletteController extends Controller
{
	public function lesTablettesAction() 
	{
        $pdo = $this->get('pg_gsb_frais.pdo');
        $lesTablettes=$pdo->getLesTablette(); 
                    return $this->render('PgGsbFraisBundle:ListeTablette:listeaffectation.html.twig',
                     array('lesTablettes'=>$lesTablettes));

    }

    public function lesVisiteursAction()

    {
    	        $pdo = $this->get('pg_gsb_frais.pdo');
        		$visiteurs=$pdo->getLesVisiteurs(); 

                return $this->render('PgGsbFraisBundle:ListeTablette:listetablette.html.twig', array('visiteurs'=>$visiteurs));

    }
}



