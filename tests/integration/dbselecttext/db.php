<?php
namespace Wikimedia\Rdbms;

interface IDatabase {
	public function query( $sql, $method );
	public function select(
		$table, $vars, $conds = '', $fname = __METHOD__,
		$options = [], $join_conds = []
	);
	public function insert( $table, $a, $fname = __METHOD__, $options = [] );
	public function selectSQLText(
		$table, $vars, $conds = '', $fname = __METHOD__,
		$options = [], $join_conds = []
 );
}

class Database implements IDatabase {
	public function query( $sql, $method ) {
		// do some stuff
		return (object)[ 'some_field' => 'some value' ];
	}

	public function select(
		$table, $vars, $conds = '', $fname = __METHOD__,
		$options = [], $join_conds = []
	) {
		return (object)[ 'some_field' => 'some value' ];
	}
	public function insert( $table, $a, $fname = __METHOD__, $options = [] ) {
		return true;
	}
	public function selectSQLText(
		$table, $vars, $conds = '', $fname = __METHOD__,
		$options = [], $join_conds = []
 ) {
		return "query";
	}
}

class MysqlDatabase extends Database {
	public function getType() {
		return 'mysql';
	}
}
