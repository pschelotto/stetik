<?php

/**
 * Servicio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    proximidad
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Servicio extends BaseServicio
{
	public function getPrecioFmt()
	{
		return Proximidad::formatPrecio($this->getPrecio());
	}

	public function getPrecioOldFmt()
	{
		return Proximidad::formatPrecio($this->getPrecioOld());
	}
}
