<?php
	/**
	 * Project: Zest-Writer-Site
	 * zest-writer-site Copyrightę 2016 Kevin Vuilleumier
	 */

	require_once __DIR__.'/../init.php';
	require_once __DIR__.'/../ApiError.php';

	ApiError::error($_GET['e']);