<?php
/**
 * FiscalsProcesoFixture
 *
 */
class FiscalsProcesoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'proceso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fiscal_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'proceso_id', 'fiscal_id'), 'unique' => 1),
			'fk_fiscales_procesos_procesos1_idx' => array('column' => 'proceso_id', 'unique' => 0),
			'fk_fiscales_procesos_fiscales1_idx' => array('column' => 'fiscal_id', 'unique' => 0)
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
			'proceso_id' => 1,
			'fiscal_id' => 1
		),
	);

}
