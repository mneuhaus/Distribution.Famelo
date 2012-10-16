<?php
$conditions = array(
	"SCRIPT_FILENAME" => array(
		"/kunden/350350_33330/flow/package-catalog/flow" => array(
			"FLOW_CONTEXT" => "Production",
			"FLOW_ROOTPATH" => "/kunden/350350_33330/flow/package-catalog/"
		)
	),
	"HTTP_HOST" => array(
		"package-catalog.flow.famelo.com" => array(
			"FLOW_CONTEXT" => "Production"
		)
	)
);

foreach ($conditions as $variable => $cases) {
	if (isset($_SERVER[$variable])) {
		foreach ($cases as $case => $enviromentVariables) {
			if ($_SERVER[$variable] == $case) {
				foreach ($enviromentVariables as $key => $value) {
					putenv($key . "=" . $value);
				}
			}
		}
	}
}

?>