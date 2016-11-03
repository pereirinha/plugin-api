<?php

class RemoveCapitalP {
	function __construct() {
	}

	function init() {
		add_action( 'init', array( $this, 'remove_capital_p' ) );
	}

	function remove_capital_p() {
		remove_filter( 'the_content', 'capital_P_dangit', 11 );
	}
}

$action = new RemoveCapitalP();
$action->init();