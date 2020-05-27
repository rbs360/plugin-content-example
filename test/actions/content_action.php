<?php
	
	namespace Kernel\Plugins\Test\Actions;
	
	class ContentAction extends \Kernel\Plugins\PluginContentBase {
		
		
		/**
			* Requered function for render content result
		*/
		public function content() {   
			$this->beforeDisplay();
			$this->page->set(['var'=>'test']);
			return $this->output("content");
		}
		
	}
