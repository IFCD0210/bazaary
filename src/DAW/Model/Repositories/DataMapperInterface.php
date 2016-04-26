<?php

// Este es el namespace, que se construye según PSR-4
namespace DAW\Model\Repositories;

/**
 * Interfaz DataMapper
 *
 * Una interfaz es una declaración de "rasgos" (propiedades y funciones)
 * que deben tener obligatoriamente algunas clases de objetos.
 *
 * En este caso aquellas clases de objetos que pretendan eregirse como Data Mappers
 * como es el caso de cualquier Repository.
 *
 * Un Data Mapper, por definición es un componente que puede hacer acciones
 * de CRUD; por lo tanto, podremos decir que cualquier cosa que sea un
 * DataMapper podrá hacer:
 *
 * * C reate
 * * R ead (y ReadAll)
 * * U pdate
 * * D elete (y ReleteAll)
 *
 * La manera en programación de decir que una clase se compromete con unas obligaciones
 * o sea, la manera en que las clases "firman contratos" en los que se comprometen
 * a ofrecer una serie de funciones y propiedades, es mediante la declaración de interfaces.
 *
 * Las interfaces son los contratos, en los que aparecen solo declaraciones de propiedades
 * y declaraciones de funciones.
 * Cualquier clase que quiera "firmar" un contrato de este tipo, debe *implementarlo*,
 * es decir, en términos estrictos, debe implementar la interfaz
 *
 * Por lo tanto, a partir de ahora, cualquier clase de objetos que se defina
 * del siguiente modo:
 *
 * `class MiClaseDeObjetos implements DataMapperInterface`
 *
 * significará que habrá firmado el contrato que se estipule en la interfaz
 * DataMapperInterface.
 *
 * Así sucederá con cualquier interfaz que definamos. Podremos hacer que las clases
 * la cumplan... y PHP será el primero en quejarse si una clase no cumple a rajatabla
 * una interfaz que "haya firmado".
 *
 * Finalmente, cabe decir que podemos considerar como un Data Mapper, cualquier clase
 * que implemente esta interfaz, y por lo tanto, podremos usar esa clase para que realice
 * el trabajo propio de los Data Mappers (hacer las acciones de los CRUDs)
 *
 */
interface DataMapperInterface
{
	public function create($data=null);

	public function read($id);

	public function readAll($criteria=[]);

	public function update($id, $data);

	public function delete($id);

	public function deleteAll($criteria=[]);
}