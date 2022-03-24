<?php

namespace Drupal\testmodule\Controller;

use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Controller\ControllerBase;
//use Drupal\Core\Url;

/**
 * creating my first test page in drupal 8
 */
class TestmoduleController extends ControllerBase
{
	
	public function getFirstpageDisplay(Request $request)
	{
		// code...
	   $msg = 'Hello';
	   return [
        '#type' => 'markup',
        '#markup' => $this->t($msg),
       ];
 
	}
}