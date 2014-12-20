<?php 

namespace Phalcon\Db\Adapter\Pdo {

	/**
	 * Phalcon\Db\Adapter\Pdo\Sqlite
	 *
	 * Specific functions for the Sqlite database system
	 * <code>
	 *
	 * $config = array(
	 *  "dbname" => "/tmp/test.sqlite"
	 * );
	 *
	 * $connection = new Phalcon\Db\Adapter\Pdo\Sqlite($config);
	 *
	 * </code>
	 */
	
	class Sqlite extends \Phalcon\Db\Adapter\Pdo {

		const FETCH_ASSOC = 1;

		const FETCH_BOTH = 2;

		const FETCH_NUM = 3;

		protected $_eventsManager;

		protected $_descriptor;

		protected $_dialectType;

		protected $_type;

		protected $_dialect;

		protected $_connectionId;

		protected $_sqlStatement;

		protected static $_connectionConsecutive;

		protected $_pdo;

		protected $_affectedRows;

		/**
		 * This method is automatically called in \Phalcon\Db\Adapter\Pdo constructor.
		 * Call it when you need to restore a database connection.
		 *
		 * @param array $descriptor
		 * @return boolean
		 */
		public function connect($descriptor){ }


		/**
		 * Returns an array of \Phalcon\Db\Column objects describing a table
		 *
		 * <code>print_r($connection->describeColumns("posts")); ?></code>
		 *
		 * @param string $table
		 * @param string $schema
		 * @return \Phalcon\Db\Column[]
		 */
		public function describeColumns($table, $schema){ }


		/**
		 * Lists table indexes
		 *
		 * @param string $table
		 * @param string $schema
		 * @return \Phalcon\Db\Index[]
		 */
		public function describeIndexes($table, $schema){ }


		/**
		 * Lists table references
		 *
		 * @param string $table
		 * @param string $schema
		 * @return \Phalcon\Db\Reference[]
		 */
		public function describeReferences($table, $schema){ }

	}
}
