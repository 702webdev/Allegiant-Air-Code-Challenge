<?php
/**
 * Web Developer Project
 *
 * Instructions:
 *
 *  1. Use web service information located in the DAO (dao.php) to
 *     retrieve data from the web service.
 *  2. Populate models (model.php) with results from web service call.
 *  3. Display results returned from DealDao::getData() in view (view.phtml).
 */

// required files for this project
require 'dao.php';
require 'model.php';

// get modeled data from DAO
$models = DealDao::getData();

// render html view
require 'view.phtml';