<?php
// Este es el namespace, que se construye según PSR-4
namespace DAW\Model;

// Esta clase se utiliza para formalizar que el Modelo de Bazaary
// sólo admitirá un objeto del tipo ContainerInterface
// El servicio `service_container` es un objeto de este tipo
// con lo que se asegura recibir un objeto que tendrá las mismas capacidades
// si es que no se recibe el propio `service_container`
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Modelo de Bazaary
 * El modelo de Bazaary constituye la implenetación del Modelo de datos
 * para la aplicación Bazaary
 *
 * Por lo tanto, deberá integrar Repositorios que implementan el Modelo de Negocio
 * y Entidades que constituyen el Modelo de Dominio.
 *
 * Este Modelo, en tanto que actúa como un Servicio registrado dentro de la aplicación,
 * permitirá acceder a los recursos que gestiona.
 *
 * Por un lado permitirá que le sea solitada cualquiera de las Entidades
 * del Modelo de Dominio
 *
 * Por otro lado, permitirá que le sea solicitado cualquier Repositorio de Entidades,
 * y así permitir acceso al Modelo de Negocio
 *
 */
class BazaaryModel
{

	/**
	 * Copia del gestor de servicios
	 * @var ContainerInterface
	 */
	protected $service_container;

	/**
	 * Constructor
	 * Es la función que responderá cuando se solicite el servicio `bazaary.model`
	 * Creará un Objeto de tipo BazaaryModel, que cuente con una copia del
	 * `service_container`, para no tener que solicitarlo
	 *
	 * @param ContainerInterface $service_container es el gestor de servicios 
	 * que BazaaryModel necesita para poder atender cualquiera de las dos solicitudes
	 * que pueda atender
	 */
	public function __construct(ContainerInterface $service_container)
	{
		$this->service_container = $service_container;
	}

	/**
	 * Lógica de Negocio
	 * @param  String $entityName es el nombre de la entidad para la que se desea un repositorio
	 * @return Repository|null si existe un repositorio para la entidad pedida
	 * se devuelve un Repositorio, si no, devuelve null
	 */
	public function getRepository($entityName){
		// Por pragmatismo, se ha decidido que los repositorios
		// serán servicios que se llamaran:
		// "bazaary.model.{entidad}.repository"
		$repositoryServiceName = 'bazaary.model.' . 
								  strtolower($entityName) . 
								  '.repository';

		// Por lo tanto, si el service container tiene registrado un servicio llamado así,
		// entonces es que ese servicio devolverá el Repository que se nos pide
		if ($this->service_container->has($repositoryServiceName))
			return $this->service_container->get($repositoryServiceName);

		return null;
	}

	/**
	 * Lógica de Dominio
	 * @param  String $entityName es el nombre de la entidad que se desea
	 * @return Entity|null si existe una factory para la entidad pedida
	 * se devuelve una instancia nueva de la Entidad creada por la Factoría,
	 * si no, devuelve null
	 */
	public function getEntity($entityName){
		// Por pragmatismo, se ha decidido que las factorías
		// serán servicios que se llamaran:
		// "bazaary.model.{entidad}.factory"
		$factoryServiceName = 'bazaary.model.' . 
								  strtolower($entityName) . 
								  '.factory';

		$factory = null;

		// Por lo tanto, si el service container tiene registrado un servicio llamado así,
		// entonces es que ese servicio devolverá la Factory que necesitamos usar
		if ($this->service_container->has($factoryServiceName))
			$factory = $this->service_container->get($factoryServiceName);
		// Si no hubiera el servicio de factory registrado,
		// como sabemos que los Repositories usan Factories, optaremos por
		// tratar de obtener la factory a partir del Repository
		else{
			$repository = $this->getRepository($entityName);
			if ($repository)
				$factory = $repository->getFactory();
		}

		// En este punto sabremos si hemos conseguido la factory
		// con la que crear la entity que se nos pide
		if ($factory)
			return $factory->newInstance();
		else
			return null;
	}
}