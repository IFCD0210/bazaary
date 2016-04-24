<?php

// Este es el namespace, que se construye según PSR-4
namespace DAW\BazaaryFrontEndBundle\Controller;

// Los aquí presentes son las clases que se necesitan usar habitualmente
// desde un controller:

// Esta clase permite usar @Route Annotations
// ver http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/routing.html
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

// Esta clase es el "Controlador según Symfony 2"
// Al crear un Controller es muy recomendable "extender" nuestro controller
// de esta clase, es decir hacer que nuestro controller sea una "evolución"
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Esta clase representa a la HTTP Request que envió el dispositivo cliente
use Symfony\Component\HttpFoundation\Request;

// Esta clase representa a la HTTP Response
// que se espera que nuestro controlador construya
// y que será devuelta al dispositivo cliente
use Symfony\Component\HttpFoundation\Response;

/**
 * Controlador para las acciones que se realicen en el catálogo
 * algunas de ellas pueden ser:
 * * Listar (que al ser la acción por defecto le llamamos index)
 * * Ordenar
 * * Filtrar
 * * ListarSiguientes (que tiene utilidad cuando se sabe usar Ajax)
 */
class CatalogueController extends Controller
{

    /**
     * @Route("/", name="home")
     * @Route("/catalogue", name="catalogue")
     */
    public function indexAction(Request $request)
    {
    	// Se solicita el localizador de servicios (llamado "service container"),
    	// puesto que estamos en una aplicación MSA
    	$container 	= $this->get('service_container');

    	// Al localizador de servicios le pedimos el servicio del Modelo de Bazaary
    	// El nombre del servicio para el Modelo de Bazaary lo proponemos nosotros (es inventado)
    	$model 		= $container->get('bazaary.model');

    	// Al Modelo de Bazaary, le pedimos que nos dé el repositorio de los items
        $itemsRepo 	= $model->getRepository('Items');

        // Una vez tenemos el repositorio de items, podemos pedirle la colección
        // de todos los items. Usaremos una función de nombre convencional: "readAll"
        $itemsList	= $itemsRepo->readAll();

        //TODO: FALTA RENDERIZAR UNA VIEW TEMPLATE...
        //      PARA ELLO PRIMERO TENEMOS QUE TENER ALGUNA
        //      de momento pintamos HTML con la itemsList a falta de la template

        // Aquí creamos una variable $htmlItemList que contendrá
        // el listado de ítems del modelo en formato HTML
        $htmlItemList = '<ul>';

        foreach($itemsList as $item)
        	$htmlItemList .= '<li id="'.$item->id.'">'.$item->title.'</li>';

        $htmlItemList .= '</ul>';

        // El siguiente código está escrito en notación HEREDOC
        // véase http://php.net/manual/es/language.types.string.php#language.types.string.syntax.heredoc
        $html = <<<HTML
			<!DOCTYPE html>
			<html>
				<head>
					<title>Bazaary Catalogue</title>
				</head>
				<body>
					<h1>Estos son los items del catálogo</h1>
					{$htmlItemList}
				</body>
			</html>
HTML;

		// Creamos una nueva Response cuyo body será el html que hemos generado
		// usando la notación HEREDOC de PHP
        return new Response($html);
    }
}

