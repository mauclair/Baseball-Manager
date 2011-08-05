<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Bm extends Controller_Template
{
    public $template = 'template';
    
    public function before()
    {
        parent::before();
            if ($this->auto_render)
            {
                $this->template->content = '';
                
                $this->template->styles = array();
                $this->template->scripts = array();
            }
    }
    
    public function after()
    {
        if ($this->auto_render)
        {
            $styles = array(	
                'media/css/style.css' => 'screen',
            );
            $scripts = array(
                'media/js/jquery-1.6.2.min.js',
            );
            
            $this->template->styles = array_merge( $this->template->styles, $styles );
            $this->template->scripts = array_merge( $this->template->scripts, $scripts ); 
        }
        parent::after();
    }
}
