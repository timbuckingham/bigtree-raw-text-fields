<?php
	// Make sure we escape the value so it draws properly in the widget
	$field["value"] = BigTree::safeEncode($field["value"]);
	include BigTree::path("admin/form-field-types/draw/textarea.php");
