<?php
/**
 * AcusadoFixture
 *
 */
class AcusadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'ocupacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'culpabilidad' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'capacidadPago' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sentencia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ciudad_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'audiencia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'user_id', 'ciudad_id', 'audiencia_id'), 'unique' => 1),
			'fk_acusados_ciudades_idx' => array('column' => 'ciudad_id', 'unique' => 0),
			'fk_acusados_users1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_acusados_audiencias1_idx' => array('column' => 'audiencia_id', 'unique' => 0)
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
			'created' => '2016-03-31 23:03:36',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'ocupacion' => 'Lorem ipsum dolor sit amet',
			'culpabilidad' => 1,
			'capacidadPago' => 1,
			'modified' => '2016-03-31 23:03:36',
			'sentencia' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'ciudad_id' => 1,
			'audiencia_id' => 1
		),
	);

}
