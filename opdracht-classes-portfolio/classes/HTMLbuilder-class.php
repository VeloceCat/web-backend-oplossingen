<?php

	class HTMLbuilder {

		protected $header;
		protected $body;
		protected $footer;
	
		public function __construct($header, $body, $footer)
		{
			$this->header	=	$header;
			$this->body		=	$body;
			$this->footer	=	$footer;
			
			$this->buildPage();
		}
		
		public function buildHeader()
		{
			$filesArray	=	$this->findFiles('css', 'css');
			$cssLinks	=	$this->createCssLink($filesArray);
            
			include 'html/'. $this->header;
		}	
		
		public function buildBody()
		{
			include 'html/'. $this->body;
		}	
		
		public function buildFooter()
		{
			$filesArray	=	$this->findFiles('js', 'js');
			$jsScripts	=	$this->createJsScripts($filesArray);
			
			include 'html/'. $this->footer;
		}
		
		public function buildPage()
		{
			$this->buildHeader();
			$this->buildBody();
			$this->buildFooter();
		}
		
		public function findFiles($dir, $file)
		{
			$Files = glob($dir . '/*.' . $file);
			return $Files;
		}
		
		public function createCssLink($filesArray)
		{
			foreach ($filesArray as $file)
			{
                $link = '<link rel="stylesheet" type="text/css" href="'.$file.'">';
                echo $link;
			}
		}
		
		public function createJsScripts($filesArray)
		{
			foreach ($filesArray as $file)
			{
                $script = '<script src="' . $file . '"></script>';
                echo $script;
			}	
		}
        
        
	}


?>
