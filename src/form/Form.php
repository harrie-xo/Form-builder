<?php

namespace Applications\Provider\Package\Forms;

    /*-------------------------------------------------------------------
    | Form Builder by
    | Repositoriey.com | E-mail @ harrieanto31@yahoo.com
    | Facebook.com/harrie.anto.5
    | 04/07/2016
    -------------------------------------------------------------------*/



class Form
{
	/*
	 *set property for form builder, form head[method,etc...] and form body[input]
	 */
	private $fh_att;
	private $fb_att = [];
	private $select_att = [];

    /*
     *save all default data
     */
	
	private $general = [];
    
    /*
     *save all setter data of users
     */

	private $set = [];

	private $bind;




    /*-------------------------------------------------------------------
    |Function open for indicating attribute/property of Form
    |ENCTYPE, METHOD, FILE
    -------------------------------------------------------------------*/
	

	public function open($url,  $set = [])
	{
		$this->general = [
		'method' => 'POST',
		'enctype'=> 'multipart/form-data',
		'action' => $url,
		'class'  => ''
		];

		$this->set = $set;


		
		$merge = array_merge($this->general,  $set);
		
		
		foreach($merge as $k => $v){
		
			$this->fh_att .= ' '.$this->general = $k .' ="'. $k = $v.'"';
		
		}
		ob_start();
		$this->bind = '<form '.$this->fh_att.'>';
		echo $this->bind;
	}

    /*-------------------------------------------------------------------
    |Function close for close of Form register
    |
    -------------------------------------------------------------------*/

	public function close()
	{
		echo $this->bind = '</form>';
		unset($this->bind);
	}

    
    /*-------------------------------------------------------------------
    | Function Input for indicating attribute/property of Form Input
    | Text,Checkbox,Radio with attributes:
    | name,  class,  placeholder,  value etc...
    -------------------------------------------------------------------*/

	public function text($name,  $set = [])
	{
		$this->general = [
		'name' => $name,
		'value' => null,
		'class' => '',
		'required' => '',
		'placeholder' => null,
		'checked' => false,
		'selected' => false
		];

		$this->fb_att ='';

		if(!$set){
			foreach ($this->general as $k => $v) {
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
				$this->bind = '</br><input type = "text" '.$this->fb_att.' /></br>';
				echo $bind;
			
		}

		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
			$this->fb_att .= ' '.$this->general = $k .'="'. $k = $v.'"';
		}

				
				$this->bind = '</br><input type = "text" '.$this->fb_att.' /></br>';
				echo $this->bind;
	
	}

	public function radio($name,  $set = [])
	{
		$this->general = [
		'name' => $name,
		'value' => null,
		'class' => '',
		'required' => '',
		'checked' => false,
		'selected' => false
		];

		$this->fb_att ='';

		if(!$set){
			foreach ($this->general as $k => $v) {
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
				$this->bind = '<input type = "radio" '.$this->fb_att.' />';
				echo $bind;
			
		}

		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
			$this->fb_att .= ' '.$this->general = $k .'="'. $k = $v.'"';
		}

				
				$this->bind = '<input type = "radio" '.$this->fb_att.' />';
				echo $this->bind;
	
	}

	public function checkbox($name,  $set = [])
	{
		$this->general = [
		'name' => $name,
		'value' => null,
		'class' => '',
		'required' => '',
		'checked' => false,
		'selected' => false
		];

		$this->fb_att ='';

		if(!$set){
			foreach ($this->general as $k => $v) {
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
				$this->bind.= '<input type = "checkbox" '.$this->fb_att.' />';
				echo $bind;
			
		}

		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
			$this->fb_att .= ' '.$this->general = $k .'="'. $k = $v.'"';
		}

				
				$this->bind = '<input type = "checkbox" '.$this->fb_att.' />';
				echo $this->bind;
	
	}

	public function number($name,  $set = [])
	{
		$this->general = [
		'name' => $name,
		'value' => null,
		'class' => '',
		'required' => '',
		'min' => 1,
		'max' => 100
		];

		$this->fb_att ='';

		if(!$set){
			foreach ($this->general as $k => $v) {
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
				$this->bind.= '<input type = "number" '.$this->fb_att.' />';
				echo $bind;
			
		}

		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
			$this->fb_att .= ' '.$this->general = $k .'="'. $k = $v.'"';
		}

				
				$this->bind = '<input type = "number" '.$this->fb_att.' />';
				echo $this->bind;
	
	}

	public function email($name,  $set = [])
	{
		$this->general = [
		'name' => $name,
		'value' => null,
		'class' => '',
		'required' => '',
		'placeholder' => ''
		];

		$this->fb_att ='';

		if(!$set){
			foreach ($this->general as $k => $v) {
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
				$this->bind.= '</br><input type = "email" '.$this->fb_att.' />';
				echo $bind;
			
		}

		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
			$this->fb_att .= ' '.$this->general = $k .'="'. $k = $v.'"';
		}

				
				$this->bind = '</br><input type = "email" '.$this->fb_att.' />';
				echo $this->bind;
	
	}

	public function url($name,  $set = [])
	{
		$this->general = [
		'name' => $name,
		'value' => null,
		'class' => '',
		'required' => '',
		'placeholder' => ''
		];

		$this->fb_att ='';

		if(!$set){
			foreach ($this->general as $k => $v) {
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
				$this->bind.= '</br><input type = "url" '.$this->fb_att.' />';
				echo $bind;
			
		}

		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
			$this->fb_att .= ' '.$this->general = $k .'="'. $k = $v.'"';
		}

				
				$this->bind = '</br><input type = "url" '.$this->fb_att.' />';
				echo $this->bind;
	
	}

	public function textarea($name,  $set = [])
	{
		$this->general = [
		'name' => $name,
		'cols' => 50,
		'rows' => 5,
		'value' => null,
		'class' => '',
		'required' => '',
		'placeholder' => null
		];
        
	
		$this->fb_att ='';

		if(!$set){
	
			foreach ($this->general as $k => $v) {
	
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
	
				$this->bind = '</br><textarea '.$this->fb_att.' ></textarea></br>';
				echo $bind;
			
		}
	
		$this->set = [];

		if(!in_array($this->set, $this->general)){
	
			return false;
	
		}

		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
		
			$this->fb_att .= ' '.$this->general = $k .'="'. $k = $v.'"';
		
		}
				
				$this->bind = '</br><textarea '.$this->fb_att.' ></textarea></br>';
		
				echo $this->bind;	
	}

	public function select($name,  $set = [])
	{
		$this->general = [
		'name' => $name,
		'class' => '',
		'required' => '',
		];
        
	
		$this->select_att ='';

		if(!$set){
	
			foreach ($this->general as $k => $v) {
	
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
	
				$this->bind = '</br><textarea '.$this->fb_att.' ></textarea></br>';
				echo $bind;
			
		}
	

		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
		
			$this->select_att .= ' '. $k .'="'. $k = $v.'"';

		
		}
				
				$this->bind = '<select '.$this->select_att.' >';
				echo $this->bind;
	}

	public function endselect()
	{
		echo $this->bind = '</select>';
	}

	public function option($set = [])
	{
		$this->general = [
		'value' => '',
		'label_opt' => '',
		'required' => '',
		];
        
	
		$this->select_att ='';

		if(!$set){
	
			foreach ($this->general as $k => $v) {
	
				$this->fb_att .= $this->general = $k .'="'. $k = $v.'"';
			}
	
				$this->bind = '</br><textarea '.$this->fb_att.' ></textarea></br>';
				echo $bind;
			
		}
	
		$this->set = array($set);



		$merge = array_merge($this->general,  $set);
		
		foreach($merge as $k => $v){
		
			$this->select_att .= ' '.$this->general = $k .'="'. $k = $v.'"';

		
		}
				
	   $this->bind = '<option value= "'.$merge['value'].'" >'.$merge['label_opt'].'</option>';		
	   echo $this->bind;	
	}


    
    /*--------------------------------------------------------------------------------
    | Function submit for send an POST request of body contents Form
    --------------------------------------------------------------------------------*/


	public function submit($name,  $set = [])
	{
		
		$this->general = [
		'type' => 'submit',
		'value' => 'Submit',
		'class' => ''
		];

        $this->submit= '';
        $this->set=$set;
        
        if(!$this->set){
		foreach ($this->general as $k => $v)
		{
			$this->submit.= ' '.$this->general = $k .'="'. $k = $v.'"';
		}


		$this->bind = '</br><input '.$this->submit.' /></br>';
		
		echo $this->bind; 
        
        }


		$merge = array_merge($this->general,  $this->set);		
		
		foreach ($merge as $k => $v)
		{
		
			$this->submit.= ' '.$this->general = $k .'="'. $k = $v.'"';
		
		}


		$this->bind = '</br><input '.$this->submit.' /></br>';
		
		echo $this->bind; 
	}
}




    /*-------------------------------------------------------------------
    | End...-0-^-0-
    | Repositoriey.com | E-mail @ harrieanto31@yahoo.com
    | Facebook.com/harrie.anto.5
    | 04/07/2016
    -------------------------------------------------------------------*/
