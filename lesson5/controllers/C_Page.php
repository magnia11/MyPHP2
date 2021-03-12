<?php

include_once('models/model.php');

class C_Page extends C_Base
{
	
	public function action_index(){
		$this->title .= '::Чтение';
		$text = text_get();
		$this->content = $this->Template('views/v_index.php', array('text' => $text));	
	}
	
	public function action_edit(){
		$this->title .= '::Редактирование';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->Template('views/v_edit.php', array('text' => $text));		
	}
}
