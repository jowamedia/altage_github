<?php

namespace Altage\GastroCmd\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function DashboardAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return $this->render('AltageGastroCmd:App:dashboard.html.twig');
    }
    public function CmdMenuApercuAction()
    {
/*A effacer, les dates sont gérées dans TWIG directement
 * 		
 *     	$aujourdhui = new DateTime(); 
    	//$begin = new DateTime('2012-09-01 09:00:00',);
		$begin = new DateTimeInterface();
    	$begin->modify('monday this week');  
		//$DateLundi = date('Y-m-d H:i:s');
		//$DateLundi = date_create_from_format('j-M-Y', strtotime('monday this week'));
		//$DateLundi = strtotime('monday this week');
		$DateLundi=date('l-j-F', $aujourdhui);

		$formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::LONG,
				IntlDateFormatter::NONE,
				'Europe/Paris',
				IntlDateFormatter::GREGORIAN );
		$date =new DateTime('14-02-2012');
		$formatter->format($date);//affiche 14 février 2012
*/
    	return $this->render('AltageGastroCmd:App:cmdMenuApercu2.html.twig');
    }
    public function CmdMenusFormAction()
    {
    
    	return $this->render('AltageGastroCmd:App:cmdMenusForm.html.twig');
    }
}
