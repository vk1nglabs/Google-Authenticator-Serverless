<?php

if (!function_exists('_json')) {
	/**
	 * Response JSON
	 */
	function _json($success, $message, $data = [])
	{
		$result = [
			'success' => $success,
			'data' => $data,
			'message' => $message,
		];

		echo json_encode($result);
		exit();
	}
}
