<?php

/**
 * Servicio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    stetik
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Servicio extends BaseServicio
{
	function verimagen(){
		return "<img src='/uploads/servicios/".$this->getImagen()."'/>";
	}
}
