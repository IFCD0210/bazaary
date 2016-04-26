<?php

// Este es el namespace, que se construye según PSR-4
namespace DAW\Model\Repositories;

/**
 * Un ItemsRepository necesita usar una Factory y una Gateway
 * concretamente, las dos que se indican a continuación,
 * y que son de cosecha propia
 *
 */
use DAW\Model\Factories\ItemsFactory;
use DAW\Model\Gateways\ItemsGateway;

/**
 * Del mismo modo el Repository también manipulará entidades,
 * concretamente la entidad de tipo Item
 * Mientras que el fichero que la describe se llamará como la Tabla
 * en este fichero, la daremos a conocer con un nombre más entendible
 * "ItemEntity", es por eso que usamos la palabra clave "as",
 * para asignarle un alias a la clase Items.
 */
use DAW\Model\Entities\Items as ItemEntity;

use DAW\Model\Repositories\DataMapperInterface;

/**
 * Clase ItemsRepository
 * Implementa el patrón Repository, y requiere para ello
 * una Factory (que sea una ItemsFactory) y una Gateway (que sea una ItemsGateway)
 *
 * El acceso a esta clase se realiza mediante el contenedor de servicios ("service_container")
 * El nombre del servicio que crea un ItemsRepository está en el fichero
 * `src/Model/config/services.yml`
 *
 */
class ItemsRepository
	implements DataMapperInterface
{

	/**
	 * Instancia de una ItemsFactory que implemente el patrón Factory
	 * @var \DAW\Model\Factories\ItemsFactory
	 */
	protected $factory;

	/**
	 * Instancia de una ItemsGateway que implemente el patrón Gateway
	 * @var \DAW\Model\Gateways\ItemsGateway
	 */
	protected $gateway;

	/**
	 * Constructor del ItemsRepository
	 * se ejecuta cada vez que queremos crear un ItemsRepository
	 * En este constructor se reciben un itemsFactory y un itemsGateway
	 * que serán los que utilice el ItemsRepository
	 * para implementar correctamente el patrón Repository
	 * @param  ItemsFactory la factoría de Items que el presente Repositorio usará
	 * @param  ItemsGateway la gateway que permitirá al Repository realizar fetches y flushes
	 * @return ItemsRepository El resultado de ejecutar un __construct es un nuevo ItemsRepository
	 *
	 */
	public function __construct(
		ItemsFactory $itemsFactory,
		ItemsGateway $itemsGateway)
	{
		$this->factory = $itemsFactory;
		$this->gateway = $itemsGateway;
	}


	/**
	 * Función que crea una entidad Item
	 * usando la Factoría (que para eso está, para crear entidades)
	 * y almacenándola en el sistema de datos a través de la Gateway
	 *
	 * @param  Array|StdClass|String $data Son los datos que se usarán
	 * para asignar valores a las propiedades de la entidad.
	 * Estos datos pueden ser un Array, un Objeto (en PHP se llama StdClass),
	 * o un String (ya que JSON que permite expresar Objetos es un formato de texto)
	 * @return ItemEntity El resultado de hacer Create es una nueva
	 * entidad de Item
	 *
	 */
	final public function create($data=null){
		$newItem = $this->factory->createOne($data);
		return $this->gateway->flush($newItem);
	}

	/**
	 * Función que "lee" una entidad Item
	 * usando el gateway para acceder al sistema de almacenamiento
	 * de datos, y luego la factory para crear la entidad Item
	 * con los datos conseguidos.
	 *
	 * @param  Mixed $id Es el valor exclusivo que *identifica* al Item
	 * en el sistema de almacenamiento (y por tanto también en la aplicación)
	 * @return ItemEntity   El resultado de leer en búsqueda de un Item
	 * el almacén de datos es una entidad de tipo Item (que estará vacía
	 * si no se ha encontrado el ítem que se buscaba)
	 */
	final public function read($id){
		$result = $this->gateway->fetch($id);
		return $this->factory->createOne($result);
	}

	/**
	 * Función que "lee" una colección de entidades Item
	 * usando el gateway para acceder al sistema de almacenamiento
	 * de datos, y luego la factory para crear la colección de
	 * entidades Item, con los datos conseguidos.
	 *
	 * @param  Array $criteria Criteria es la palabra inglesa para definir
	 * una serie de criterios. En este caso es un array conteniendo los criterios
	 * de búsqueda, es decir, el filtro que se aplicará a los datos a leer,
	 * para sólo obtener los datos de aquellos Items que superen el filtro.
	 * Criteria por defecto es un array vacío ('[]').
	 * @return Array of ItemEntity El resultado de leer en búsqueda de una colección
	 * de Items es una colección (un array ya nos vale) de entidades de Tipo Item.
	 * El array estará vacío si no se ha encontrado ningún dato
	 * (aplicando los criterios de búsqueda)
	 */
	final public function readAll($criteria=[]){
		$result = $this->gateway->fetchAll($criteria);
		return $this->factory->createMany($result);
	}

	/**
	 * Función que "actualiza" una entidad Item
	 * usando el gateway para acceder al sistema de almacenamiento
	 * de datos, y luego la factory para crear la colección de
	 * entidades Item, con los datos conseguidos.
	 *
	 * @param  Mixed $id Es el valor exclusivo que *identifica* al Item
	 * en el sistema de almacenamiento (y por tanto también en la aplicación)
	 * @param  Array $data Nuevos valores para las propiedades de la Entidad
	 * @return El resultado de hacer update es la entidad con los nuevos
	 * valores en sus propiedades
	 */
	final public function update($id,$data){
		$oldData = $this->gateway->fetch($id);
		$newData = array_merge($oldData, $data);
		$newItem = $this->factory->createOne($newData);
		return $this->gateway->flush($newItem);
	}

	/**
	 * Función que elimina una entidad Item
	 * usando el gateway para que se borre del sistema de datos
	 *
	 * @param  Mixed $id Es el valor exclusivo que *identifica* al Item
	 * en el sistema de almacenamiento (y por tanto también en la aplicación)
	 * @return Mixed Puede ser el valor que elijamos a nuestra conveniencia:
	 * el id del Item borrado, o el número de elementos eliminados al realizar
	 * la operación, o un booleano...
	 */
	final public function delete($id){
		return $this->gateway->delete($id);
	}

	/**
	 * Función que elimina un conjunto de Items, bajo un criterio,
	 * usando el gateway para que se borren del sistema de datos
	 *
	 * @param  Array $criteria Criteria es la palabra inglesa para definir
	 * una serie de criterios. En este caso es un array conteniendo los criterios
	 * de búsqueda, es decir, el filtro que se aplicará a los datos a borrar,
	 * para sólo eliminar los datos de aquellos Items que superen el filtro.
	 * Criteria por defecto es un array vacío ('[]').
	 * @return Mixed Puede ser el valor que elijamos a nuestra conveniencia:
	 * el número de elementos eliminados al realizar
	 * la operación, o un booleano...
	 */
	final public function deleteAll($criteria=[]){
		return $this->gateway->deleteAll($criteria);
	}
}