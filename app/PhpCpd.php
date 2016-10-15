<?php
class PhpCpd { 

	function getId() {
		$conn = pg_connect("host=localhost port=5432 dbname=fuga");

		$result = pg_query($conn, "SELECT id FROM dogss");
		if (!$result) {
			echo "Error!.\n";
			exit;
		}

		$arr = pg_fetch_all($result);

		$cnt = count($arr);
		for ($i = 0; $i < $cnt; $i++) {
			$key = key($arr[$i]);
			$data[$key][$i] = $arr[$i][$key];
		}

		pg_close($conn);
		return $data;
	}

	function getName() {
		$conn = pg_connect("host=localhost port=5432 dbname=fuga");

		$result = pg_query($conn, "SELECT name FROM dogs");
		if (!$result) {
			echo "Error!.\n";
			exit;
		}

		$arr = pg_fetch_all($result);

		$cnt = count($arr);
		for ($i = 0; $i < $cnt; $i++) {
			$key = key($arr[$i]);
			$data[$key][$i] = $arr[$i][$key];
		}

		pg_close($conn);
		return $arr;
	}
}
