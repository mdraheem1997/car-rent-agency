<?php 
defined("BASEPATH") OR exit("NO DIRECT ACCESS ALLOWED");
require_once ('PHPExcel.php');
class Excel extends PHPExcel{
	
	 function __construct()
	{
		parent::__construct();
	}
}
?>