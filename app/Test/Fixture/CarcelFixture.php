<?php
/**
 * CarcelFixture
 *
 */
class CarcelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'numeroPatios' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'numeroCelda' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'fechaVisita' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'ciudad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'audiencia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'audiencia_id'), 'unique' => 1),
			'fk_carceles_ciudades1_idx' => array('column' => 'ciudad_id', 'unique' => 0),
			'fk_carceles_audiencias1_idx' => array('column' => 'audiencia_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'created' => '2016-03-31 23:06:56',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'numeroPatios' => 'Lorem ipsum dolor sit amet',
			'numeroCelda' => 'Lorem ipsum dolor sit amet',
			'modified' => '2016-03-31 23:06:56',
			'fechaVisita' => '2016-03-31 23:06:56',
			'ciudad_id' => 1,
			'audiencia_id' => 1
		),
	);

}
