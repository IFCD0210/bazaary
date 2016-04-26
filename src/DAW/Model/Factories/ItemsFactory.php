<?php

// Este es el namespace, que se construye según PSR-4
namespace DAW\Model\Factories;

/**
 * Una Factory crea entidades,
 * y esta factory concretamente la entidad de tipo Item.
 *
 * Es por ello que al igual que hacíamos con el ItemsRepository
 * añadiremos la definición de la entidad Item a este fichero,
 * usando un nombre más entendible (ItemEntity), para realizar 
 * acciones de generación de entidades:
 *
 * `new ItemEntity()`
 *
 */
use DAW\Model\Entities\Items as ItemEntity;

/**
 * Clase ItemsFactory
 * Implementa el patrón Factory
 *
 * Dispone de dos únicos métodos que permiten crear una entidad (createOne)
 * y una colección de entidades (createMany)
 *
 * El acceso a esta clase se realiza mediante el contenedor de servicios ("service_container")
 * El nombre del servicio que crea un ItemsFactory está en el fichero
 * `src/Model/config/services.yml`
 *
 */
class ItemsFactory
{

	/**
	 * Función que crea una entidad de tipo Item
	 * @param  array  $row Array (opcional) con los datos que se usarán para crear la entity
	 * @return ItemEntity la entidad de tipo Item creada
	 */
	public function createOne($row=[]){
		$newItem = new ItemEntity();

		$row = (array)$row;
		if (is_array($row)):
			foreach($row as $property=>$value):
				if (property_exists($newItem, $property))
					$newItem->{$property}=$value;
			endforeach;
		endif;

		return $newItem;
	}

	/**
	 * Función que crea una colección de entidades de tipo Item
	 * @param  array  $rows Array con los datos que se usarán para crear cada entity
	 * @return array of ItemEntity La colección rellenada con los Items creados
	 */
	public function createMany($rows){
		$collection = array();

		if (is_array($rows) || ($rows instanceof \Traversable)):
			foreach($rows as $row):
				$collection[] = $this->createOne($row);
			endforeach;
		endif;

		return $collection;
	}

	/**** Function Synonyms ****/
	public function newInstance(){
		return $this->createOne();
	}
}