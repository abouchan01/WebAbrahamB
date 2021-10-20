<?php
	function mostrar_alerta($alertas, $campo) {
		$alerta = '';

		if (isset($alertas[$campo]) && !empty($campo)) {
			$alerta = $alertas[$campo];
		}

		return $alerta;
	}

	function borrar_alertas() {
		$_SESSION['email'] = null;
	}
?>