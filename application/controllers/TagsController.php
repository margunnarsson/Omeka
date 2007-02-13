<?php

require_once MODEL_DIR.DIRECTORY_SEPARATOR.'Tag.php';
/**
 * @package Omeka
 * @author Nate Agrin, Kris Kelly
 **/
require_once 'Kea/Controller/Action.php';
class TagsController extends Kea_Controller_Action
{	
	public function init()
	{
		$this->_table = Doctrine_Manager::getInstance()->getTable('Tag');
	}
	
	public function browseAction()
	{
		$tags = $this->_table->findAll();		
		$this->render('tags/browse.php', compact('tags'));
	}
}