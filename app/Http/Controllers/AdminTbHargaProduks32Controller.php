<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;
	use App\Models\TbHargaProduk;

	class AdminTbHargaProduks32Controller extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = false;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = false;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "tb_harga_produks";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Produk","name"=>"id_produk","join"=>"tb_produks,judul"];
			$this->col[] = ["label"=>"Diskon","name"=>"diskon"];
			$this->col[] = ["label"=>"Jenis Harga","name"=>"jenis_harga"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Produk','name'=>'id_produk','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'tb_produks,judul','readonly'=>true];
			$this->form[] = ['label'=>'Qty','name'=>'qty','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','readonly'=>true];
			$this->form[] = ['label'=>'Harga','name'=>'harga','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>true];
			$this->form[] = ['label'=>'Diskon','name'=>'diskon','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jenis Harga','name'=>'jenis_harga','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>true];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label"=>"Produk","name"=>"id_produk","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"produk,id"];
			//$this->form[] = ["label"=>"Qty","name"=>"qty","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
			//$this->form[] = ["label"=>"Harga","name"=>"harga","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			//$this->form[] = ["label"=>"Diskon","name"=>"diskon","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
			//$this->form[] = ["label"=>"Jenis Harga","name"=>"jenis_harga","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();
	        $this->button_selected[] = ['label'=>'Set Diskon 10%','icon'=>'fa fa-check','name'=>'set_diskon_10'];
	        $this->button_selected[] = ['label'=>'Set Diskon 15%','icon'=>'fa fa-check','name'=>'set_diskon_15'];
	        $this->button_selected[] = ['label'=>'Set Diskon 20%','icon'=>'fa fa-check','name'=>'set_diskon_20'];
	        $this->button_selected[] = ['label'=>'Set Diskon 25%','icon'=>'fa fa-check','name'=>'set_diskon_25'];
	        $this->button_selected[] = ['label'=>'Set Diskon 30%','icon'=>'fa fa-check','name'=>'set_diskon_30'];
	        $this->button_selected[] = ['label'=>'Set Diskon 35%','icon'=>'fa fa-check','name'=>'set_diskon_35'];
	        $this->button_selected[] = ['label'=>'Set Diskon 40%','icon'=>'fa fa-check','name'=>'set_diskon_40'];
	        $this->button_selected[] = ['label'=>'Set Diskon 45%','icon'=>'fa fa-check','name'=>'set_diskon_45'];
	        $this->button_selected[] = ['label'=>'Set Diskon 50%','icon'=>'fa fa-check','name'=>'set_diskon_50'];
	        $this->button_selected[] = ['label'=>'Set Diskon 55%','icon'=>'fa fa-check','name'=>'set_diskon_55'];
	        $this->button_selected[] = ['label'=>'Set Diskon 60%','icon'=>'fa fa-check','name'=>'set_diskon_60'];
	        $this->button_selected[] = ['label'=>'Set Diskon 65%','icon'=>'fa fa-check','name'=>'set_diskon_65'];
	        $this->button_selected[] = ['label'=>'Set Diskon 70%','icon'=>'fa fa-check','name'=>'set_diskon_70'];
	        $this->button_selected[] = ['label'=>'Set Diskon 75%','icon'=>'fa fa-check','name'=>'set_diskon_75'];
	        $this->button_selected[] = ['label'=>'Set Diskon 80%','icon'=>'fa fa-check','name'=>'set_diskon_80'];
	        $this->button_selected[] = ['label'=>'Set Diskon 85%','icon'=>'fa fa-check','name'=>'set_diskon_85'];

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	        if($button_name == 'set_diskon_10') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 10;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_15') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 15;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_20') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 20;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_25') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 25;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_30') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 30;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_35') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 35;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_40') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 40;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_45') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 45;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_50') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 50;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_55') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 55;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_60') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 60;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_65') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 65;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_70') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 70;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_75') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 75;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_80') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 80;
		        	$updatediskon->save();
		        }
	        } elseif ($button_name == 'set_diskon_85') {
	        	for ($i=0; $i < count($id_selected); $i++) { 
		        	$updatediskon = TbHargaProduk::find($id_selected[$i]);
		        	$updatediskon->diskon = 85;
		        	$updatediskon->save();
		        }
	        }
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
	        $query->where('jenis_harga','Retail');
	            
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :) 


	}