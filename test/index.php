<?php
	namespace Kernel\Plugins\Test;
	
	
	
	class Index extends \Kernel\Plugins\PluginBase {
		
		/** get system name */
		public function getName()
		{
			return "test";
		}
		
		
		/**
			* Render description install
		*/
		public function actionIndex() {
			$this->display("description");
		}
		
		
		
		/**
			* Render settings form
		*/
		public function actionSettings() {
			$this->beforeDisplay();
			$this->page->set($this->settings);
			$this->printCallbackLink(\Kernel\Plugins\PluginManager::PLUGIN_TYPE_CONTENT);
			$this->display("settings");
		}
		
	}	