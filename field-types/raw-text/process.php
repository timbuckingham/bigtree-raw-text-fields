<?php
	// Was erroneously re-decoded from JSON to an array
	if (is_array($field["input"])) {
		$field["output"] = json_encode($field["input"], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
	} else {
		$field["output"] = $field["input"];
	}
