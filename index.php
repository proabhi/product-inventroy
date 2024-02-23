<?php
/* Plugin Name: Product Inventory
   Description:Custom plugin for product inventory
 */
add_action('admin_menu', 'test_plugin_setup_menu');
         
function test_plugin_setup_menu(){
    add_menu_page( 'Product Inventory Page', 'Product Inventory', 'manage_options', 'product-inventory', 'product_inventory' );
} 
function product_inventory(){  
    ?>
	

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

	<script type="text/javascript">
			/**************Toggle circle icon code for****************/ 
			jQuery(document).on("click",'.circle_arrow',function(){
				var data_id = jQuery(this).parent().parent().attr('data-id');
				jQuery('.parentids_'+data_id).toggle();
				jQuery(this).parent().toggleClass('icon_change');
				if(jQuery(this).parent('.icon_box').hasClass('icon_change')){			
		jQuery(this).parent('.icon_box').parent('.main_product_id').children('.stock_quantityy').children('.select_all_var').show();
		 jQuery(this).parent('.icon_box').parent('.main_product_id').children('.stock_quantityy').children('.stock_checkbox').show();
         if(jQuery(this).parent('.icon_box').parent('.main_product_id').children('.stock_quantityy').children('.stock_checkbox').is(":checked")){
		  jQuery(this).parent('.icon_box').parent('.main_product_id').children('.stock_quantityy').children('.update_s_val').show();	 
		 }
		 else{
			 
		 }
		
		}
		else{ 
		/* jQuery('.stock_checkbox').hide();
        jQuery('.select_all_var').hide();
		jQuery('.update_s_val').hide();	
        jQuery('.icon_box').removeClass('icon_change');   */
         			
		jQuery(this).parent('.icon_box').parent('.main_product_id').children('.stock_quantityy').children('.select_all_var').hide();
		 jQuery(this).parent('.icon_box').parent('.main_product_id').children('.stock_quantityy').children('.stock_checkbox').hide();
		 jQuery(this).parent('.icon_box').parent('.main_product_id').children('.stock_quantityy').children('.update_s_val').hide();
		}
				
			});
			
			/**************Keyup on sku field****************/
			jQuery(document).on("keyup",'.sku_field',function(){
				var sku_input_val = jQuery(this).val();
				if(sku_input_val.length == 0){
				jQuery(this).parent().children('.common_submit_btn').hide();	
				}
				else{
				jQuery(".common_submit_btn").not(this).parent().children('.common_submit_btn').hide();	
				jQuery(this).parent().children('.common_submit_btn').show();
				
				}
				

			});
			/**************Keyup on regular price field****************/
			jQuery(document).on("keyup",'.regular_prices',function(){
				var regular_price = $(this).val();				
				if(regular_price.length == 0){
				jQuery(this).parent().children('.common_submit_btn').hide();		
				}
				else{
				jQuery(".common_submit_btn").not(this).parent().children('.common_submit_btn').hide();	
				jQuery(this).parent().children('.common_submit_btn').show();			
				}
				var regular_price = regular_price.replace(/[^0-9\.]/g,'');
				jQuery(this).val(regular_price);

			});
			/**************Keyup on sale price field****************/
			jQuery(document).on("keyup",'.sale_price',function(){
				var sale_price = jQuery(this).val();
				if(sale_price.length == 0){
				jQuery(this).parent().children('.common_submit_btn').hide();	
				}
				else{
				jQuery(".common_submit_btn").not(this).parent().children('.common_submit_btn').hide();	
				jQuery(this).parent().children('.common_submit_btn').show();	
				}
				var sale_price = sale_price.replace(/[^0-9\.]/g,'');
				jQuery(this).val(sale_price);

			});
			/**************Keyup on stockquantity field****************/
			jQuery(document).on("keyup",'.stock_quantity_pro',function(){
				var stock_quantity = jQuery(this).val();
				if(stock_quantity.length == 0){  
				jQuery(this).parent().children('.common_submit_btn').hide();
				}
				else{
				jQuery(".common_submit_btn").not(this).parent().children('.common_submit_btn').hide();	
				jQuery(this).parent().children('.common_submit_btn').show();
				}
				var stock_quantity = stock_quantity.replace(/[^0-9\.]/g,'');
				jQuery(this).val(stock_quantity);

			});
				/**************Keyup on var sku field****************/
			jQuery(document).on("keyup",'.var_sku_field',function(){
				var var_sku_field = jQuery(this).val();
				if(var_sku_field.length == 0){
				jQuery(this).parent().children('.common_submit_btn').hide();	
				}
				else{
				jQuery(".common_submit_btn").not(this).parent().children('.common_submit_btn').hide();	
				jQuery(this).parent().children('.common_submit_btn').show();
				}

			});
				/**************Keyup on var_submit_price****************/
			jQuery(document).on("keyup",'.var_regular_prices',function(){
				var var_sku_field = jQuery(this).val();
				if(var_sku_field.length == 0){
				jQuery(this).parent().children('.common_submit_btn').hide();	
				}
				else{
				jQuery(".common_submit_btn").not(this).parent().children('.common_submit_btn').hide();	
				jQuery(this).parent().children('.common_submit_btn').show();
				}
                var var_sku_field = var_sku_field.replace(/[^0-9\.]/g,'');
				jQuery(this).val(var_sku_field);
			});
					/**************Keyup on var_submit_price****************/
			jQuery(document).on("keyup",'.var_sale_price',function(){
				var var_sale_price = jQuery(this).val();
				if(var_sale_price.length == 0){
				jQuery(this).parent().children('.common_submit_btn').hide();	
				}
				else{
				jQuery(".common_submit_btn").not(this).parent().children('.common_submit_btn').hide();	
				jQuery(this).parent().children('.common_submit_btn').show();
				}
                var var_sale_price = var_sale_price.replace(/[^0-9\.]/g,'');
				jQuery(this).val(var_sale_price);
			});
			
		   			/**************Keyup on stock qunatity****************/
			jQuery(document).on("keyup",'.var_stock_quantity_pro',function(){
				var get_parent_idds = jQuery(this).parent('.stock_quantityy').parent('.variations_products').data('parentid');
				if(jQuery(".postslink_"+get_parent_idds+" .stock_checkbox").is(':checked')){
				 jQuery(this).parent(".stock_quantityy").children('.common_submit_btn').hide();
                var var_stock_quantity_pro = jQuery(this).val();
				if(var_stock_quantity_pro.length == 0){
				jQuery(this).parent().children('.common_submit_btn').hide();	
				}
                var var_stock_quantity_pro = var_stock_quantity_pro.replace(/[^0-9\.]/g,'');
				jQuery(this).val(var_stock_quantity_pro);				 
				}
                else{				
				var var_stock_quantity_pro = jQuery(this).val();
				if(var_stock_quantity_pro.length == 0){
				jQuery(this).parent().children('.common_submit_btn').hide();	
				}
				else{
				jQuery(".common_submit_btn").not(this).parent().children('.common_submit_btn').hide();	
				jQuery(this).parent().children('.common_submit_btn').show();
				}
                var var_stock_quantity_pro = var_stock_quantity_pro.replace(/[^0-9\.]/g,'');
				jQuery(this).val(var_stock_quantity_pro);
				}
			});
  
			/*************Update mutiple stock of main product************/
				jQuery(document).on("click",".stock_checkbox",function(){
					
					if(jQuery(this).is(':checked')){
					var main_idd = jQuery(this).parent().parent('.main_product_id').data("id");
					jQuery(this).parent(".stock_quantityy").children('.update_s_val').show();
					jQuery('.parentids_'+main_idd+' .common_submit_btn').hide();	
					}
					else{
					jQuery(this).parent(".stock_quantityy").children('.update_s_val').hide();	
					}
					  
				});
				
			jQuery(document).on("click",".update_s_val",function(){
			var get_stock_pro_val = jQuery(this).parent(".stock_quantityy").children(".stock_checkbox").val();
			var main_productt_idd = jQuery(this).parent().parent('.main_product_id').data("id");
		var value_stockk_change = jQuery('.parentids_'+main_productt_idd+' .stock_quantityy .var_stock_quantity_pro').val();
		//alert(value_stockk_change);
				var arrayy_values = [];
				jQuery('.parentids_'+main_productt_idd+' .stock_quantityy .var_stock_quantity_pro').each(function(){
					var get_all_val = $(this).val();
					 arrayy_values.push(get_all_val);
				});
				var datavariable = {
				'action': 'stock_values',
				get_stock_pro_val:get_stock_pro_val,
				arrayy_values:arrayy_values,
				main_productt_idd,main_productt_idd
				};
				var thisdiv = jQuery(this);
		       jQuery.ajax({
				   url: ajaxurl, // this will point to admin-ajax.php
				   type: 'POST',
				   data: datavariable, 
				   success: function (data) {  
				thisdiv.after("<div class='record_product'><img class='success_img' src='<?php echo site_url()?>/wp-content/uploads/2023/05/check.png'><span class='record_txt_status'>Record updated...</span></div>"); 
				  sucess_message_hide(); 
				     
				   }  
				   
			   });   
		
			});
				
function sucess_message_hide(){
		  setTimeout(function() { 
		  jQuery('.record_product,.update_s_val').hide(); 
          		  
		  },3000);
	}  
		</script>
	<?php
	/*$args = array( 'post_type' => 'product', 'post_status' => 'publish', 
'posts_per_page' => -1 );
$products = new WP_Query( $args );
 $publish = $products->found_posts;*/
	?>
	
	<!--<div class="stock_btn_content">
			<ul>
				<li><span>Publish<span>(<?php //echo $publish; ?>)</span></span></li>
				
		</ul>
	</div>-->

<?php
  if (isset($_POST['submit_limit']) )
    {
       $limit_product=$_POST['limit_product'];
       update_option('product_limit_custom',$limit_product);       
    }
 $product_limit_custom = get_option('product_limit_custom'); 
?>

<style>
.upper_form_class input {
    background: #ffffff;
    padding: 11px 15px;
    height: 40px;
}
.stock_central_sec {
    margin-top: 40px;
}
.search_field_input {
    color: #000 !important;
}
.upper_filter form input[type="submit"] {
    background: #00b8db;
}
.upper_form_class input {
    background: #ffffff;
}  
.record_product {
    width: 300px !important;
}
.stock_quantityy input.pro_input_field.var_stock_quantity_pro {
    width: 50%;
    float: left;
}
.stock_quantityy input.var_stock_q_btn.common_submit_btn {
    left: 55%;
}    
.update_s_val{
display:none;  
}
input.stock_checkbox {
    display: none;
}
.regular_price_field input.update_s_val {
    top: 30px;
    right: 20px;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 3px;
} 
.record_product {
    z-index: 999;
}
td.regular_price_field input.stock_checkbox {
    position: absolute;
    left: 50px;
    top: 40px;
}
.select_all_var {
    position: absolute;
    width: 100%;
    left: 0px;
    top: 5px;
    font-size: 13px;
    width: 100%;
	display:none;
}
.stock_quantityy input.stock_checkbox {
    position: absolute;
    top: 29px;
    left: 90px;
}
.even_row_box input[type=submit] {
    left: 60px;
	 padding: 5px 9px;
    margin-top: 5px;
	    cursor: pointer;
		border-radius: 3px;
}
.only_main_pro input.stock_q_btn {
    margin-left: 70px;
    margin-top: 3px;
}
.main_link_only .stock_q_btn {
    position: relative;
    margin-left: 70px;  
}
.main_product_id .common_submit_btn {
    margin-left: 50px;
    position: relative;
    margin-top: 4px !important;
}
</style>

<form method="post" action="#" class="limit_form_new">
	<label>Product Limit</label>
	<input type="text" name="limit_product" value="<?php echo $product_limit_custom; ?>" >
	<input type="submit" name="submit_limit" value="Submit">
</form>



<?php
	
	$product_visi =  $_GET['product_visibility'];	
	
	$search_text =  $_GET['search_text'];	
	
	@$pagi_new = $_GET['paged'];
	if(@$pagi_new){
		
		$pagi_new;
	}
	else {
		$pagi_new = 1;
	}
$paged = (get_query_var('paged')) ? get_query_var('paged') :  $pagi_new;
if($product_visi){
if($product_visi == 'outofstock'){
	$dit = 'IN';
}else{
	$dit = 'NOT IN';	
		
	}
	
	
	
	
	$extra = '&product_visibility='.$product_visi.'&submit=Filter';
	
	$args = array(
    'post_type'=>'product',
    'posts_per_page' => $product_limit_custom,
		'post_status'         => 'publish',
    'paged' => $paged,
	'tax_query' => array(
            array(
                'taxonomy' => 'product_visibility',
                'field'    => 'name',
                'terms'    => $product_visi,
                'operator' => $dit,
            ),	
			
        ),	
);
	
}
	elseif($search_text){
		
		$args = array(
    'post_type'=>'product',
    'posts_per_page' => $product_limit_custom,
	'post_status'         => 'publish',
    'paged' => $paged,
	's'=> $search_text,
);
		
		
		
		
	}
	
	else{
$args = array(
    'post_type'=>'product',
    'posts_per_page' => $product_limit_custom,
    'paged' => $paged,
	'post_status'         => 'publish',
);
}

$loop = new WP_Query( $args );
	
?>	
<div class="upper_filter">
<a class="all_product_button" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=product-inventory">All Products</a>	
<form method="get" action="#" class="upper_form_class">
	<input type="hidden" name="page" value="product-inventory">
	
	<select name="product_visibility" id="product_visibility" class="dropdown_product_cat" required >
		<option value="" >Product visibility</option>
		<option class="level-0" value="exclude-from-catalog" <?php if($product_visi == 'exclude-from-catalog') echo "selected=selected"; ?>>exclude-from-catalog</option>
		<option class="level-0" value="exclude-from-search" <?php if($product_visi == 'exclude-from-search') echo "selected=selected"; ?>>exclude-from-search</option>
		<option class="level-0" value="outofstock" <?php if($product_visi == 'outofstock') echo "selected=selected"; ?>>outofstock</option>
	</select>
	<input type="submit" name="submit" value="Filter">
</form>
	
	
	<form method="get" action="#" class="upper_form_class">
	<input type="hidden" name="page" value="product-inventory" style="background: #ffffff; color: #000;">
	
	<input type="text" name="search_text" class="search_field_input"> 
	<input type="submit" name="submit" value="Search">
</form>
	
	
</div>
	
	<div class="new_pagination">
<?php     $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => @$extra.'&paged=%#%',
            'current' => $pagi_new,
            'total' => $total_pages,
            'prev_text'    => __('« prev'),
            'next_text'    => __('next »'),
        ));
    }   
	?>
</div>
	
	
<div class="stock_central_sec">
	
	
	
	
	<table>
			<thead>
			
			  <tr class="produt_detail_c">
				  <th>Type</th>
				  <th><i class='far fa-image'></i></th>
				  <th>ID</th>
				  <th>Product Name</th>
				  <th><i class="fa fa-tag  offer_icon_b"></i></th>
				  <th>SKU</th>
				  <th>Regular Price</th>
				  <th>Sale Price</th>
				  <th>Current Stock</th>
				  <th>Categories</th>
				  <th>Date</th>
				
				  
			   </tr>
			</thead>
		  
	
		<?php
	if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();
       
	
		$p_id = get_the_id();
	    $p_title = get_the_title($p_id);
 		$sku = get_post_meta($p_id, '_sku', true ); 
		$product = wc_get_product( $p_id );
		$regular_price = get_post_meta($p_id, '_regular_price', true );
        $sale_price = get_post_meta($p_id, '_sale_price', true );
		$stock_quantity = get_post_meta($p_id, '_stock', true );
		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
		?>
		
		<?php 
		$inner_product = get_post_meta($p_id,'postids_add',true);
		
		if($inner_product){ 
		$p_id;
		$main_product = get_post_meta($p_id,'add_productlink',true);
		if($main_product){
			
			
			$p_id;
			$product = wc_get_product($p_id);
			$variation_ids = $product->get_children();
			$implode_ids = implode(",",$variation_ids);
		
		?>
		<tr class="parent_box main_link_only even_row_box main_product_id ev_box postslink_<?php echo $p_id;?>" data-id="<?php echo $p_id;?>">
				<td>Main</td>
			   <td><img src="<?php echo $feat_image_url;?>"></td>
			   <td><?php echo $p_id; ?></td>
			   <td class="p_title"><a href="<?php echo site_url(); ?>/wp-admin/post.php?post=<?php echo $p_id; ?>&action=edit" target="_blank" title="Edit Product"><?php echo $p_title;?></a></td>
			   <td class="icon_box"><i class='fas fa-box-open product_detail_hide' ></i><i class='fas fa-compress-alt circle_arrow'></i></td>
			   <td class="sku_p_field"><input type="text" name="sku_field" class="pro_input_field sku_field updated_sku_<?php echo $p_id;?>" value="<?php echo $sku;?>">
			   <input type="submit" name="skusave" class="btn_pro_dave common_submit_btn show_mesg_<?php echo $p_id;?>">
			   <input type="hidden" name="getpro_id" value="<?php echo $p_id;?>" class="hidden_prod_id">
			   <input type="hidden" name="get_previous_sku" value="<?php echo $sku;?>" class="get_previous_sku">
			   </td>
			   <td class="regular_price_field">
				   <?php if($variation_ids){ echo"-";}else{ ?>
				   <input type="text" name="regular_price" value="<?php echo $regular_price?>" class="regular_prices pro_input_field"><input type="submit" name="submit_price" class="submit_price common_submit_btn show_mesg_<?php echo $p_id;?>"><input class="hidden_pro_idd" type="hidden" name="get_pro_id" value="<?php echo $p_id;?>">
			<?php } ?>
			</td>
			   <td class="sale_price_field">
				    <?php if($variation_ids){ echo "-";}else{ ?>
				   <input type="text" name="sale_pricee" value="<?php echo $sale_price;?>" class="sale_price pro_input_field"><input type="submit" name="submit_sale_btn" class="submit_sale_btn common_submit_btn show_mesg_<?php echo $p_id;?>"><input type="hidden" class="hidden_sale" name="hidden_sale" value="<?php echo $p_id;?>">
			<?php } ?>
			</td>
			   <td class="stock_quantityy">
				   <?php if($variation_ids){ echo "<span class='select_all_var'>Check this for all variations</span><input type='checkbox' name='main_var_stock' class='stock_checkbox' value='$implode_ids'>
					<input type='submit' name='submitt' class='update_s_val'>
					";}else{ ?>
				   <input type="text" name="stock_quantity" value="<?php echo $stock_quantity;?>" class="pro_input_field stock_quantity_pro"><input type="submit" name="stock_btn" class="stock_q_btn common_submit_btn show_mesg_<?php echo $p_id;?>"><input type="hidden" name="hidden_stock" value="<?php echo $p_id;?>" class="hidden_stock">
			<?php } ?>
			</td>
			   
			   <td class="product_category"><?php
				$terms = get_the_terms( $p_id, 'product_cat' );
				$items = array();
				foreach($terms as $term){
					 $items[] = $term->name;
				}
				echo $List = implode(', ', $items);
				   ?>
				</td>
			   
			   <td class="product_date"><?php echo get_the_date("Y/m/d H:i:s", $p_id);  ?></td>
		  </tr>
		
		
		
			<?php
			
			
	$counter=0;	
		if( $variation_ids ) {
			
					foreach ( $variation_ids as $id ) {
						//$variationId = 39;
$variation = new WC_Product_Variation($id);
						//print_r($variation);
 $variationName = implode(" / ", $variation->get_variation_attributes());
 $variable_product = wc_get_product($id);
 $get_regular_price = $variable_product->get_regular_price();
 $get_sale_price = $variable_product->get_sale_price();
 $get_price = $variable_product->get_price();
 $get_sku = $variable_product->get_sku();
 $get_stock_quantity = $variable_product->get_stock_quantity();
 $get_image = $variable_product->get_image();
 $stock_status_pro = $variable_product->get_stock_status();						
		
		?>
			
		 <tr class="even_row_box variations_products hide_linking_product parentids_<?php echo $p_id;?>" data-parentid="<?php echo $p_id;?>">
			<td>Variation</td>
			<td><?php echo $get_image; ?></td>
			<td><?php echo $id;?></td>
			<td class="p_title"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/05/move-up-1.png">  <?php echo  $variationName;?></td>
			<td><i class="circle_div"></i></td>
			<td class="sku_p_field">
			<input type="text" name="var_sku_field" class="pro_input_field var_sku_field updatedvar__sku_<?php echo $id;?>" value="<?php echo $get_sku;?>">
			<input type="submit" name="var_skusave" class="var_skusave common_submit_btn">
			<input type="hidden" name="var_getpro_id" value="<?php echo $id;?>" class="var_hidden_id">
			<input type="hidden" name="var_sku_val" value="<?php echo $id;?>" class="var_sku_val">
			<input type="hidden" name="get_previous_sku" value="<?php echo $get_sku;?>" class="get_previous_sku">
			</td>  
			<td class="regular_price_field"><input type="text" name="var_regular_price" value="<?php echo $get_regular_price?>" class="var_regular_prices pro_input_field"><input type="submit" name="var_submit_price" class="var_submit_price common_submit_btn"><input class="var_hidden_pro_idd" type="hidden" name="var_get_pro_id" value="<?php echo $id;?>"><input class="var_hidden_main_id" type="hidden" name="var_hidden_main_id" value="<?php echo $p_id;?>">
			<input class="hidden_var_index" type="hidden" name="hidden_var_index" value="<?php echo $counter;?>">			
			</td>
			<td class="sale_price_field">
			<input type="text" name="var_sale_pricee" value="<?php echo $get_sale_price;?>" class="var_sale_price pro_input_field">
			<input type="submit" name="var_submit_sale_btn" class="var_submit_sale_btn common_submit_btn">
			<input class="var_hidden_sale" type="hidden" name="var_hidden_sale" value="<?php echo $id;?>">
			<input class="var_index_sale" type="hidden" name="var_index_sale" value="<?php echo $counter;?>">
			<input class="var_sale_main_id" type="hidden" name="var_sale_main_id" value="<?php echo $p_id;?>">
			</td>
			<td class="stock_quantityy">
			<input type="text" name="var_stock_quantity" value="<?php echo $get_stock_quantity;?>" class="pro_input_field var_stock_quantity_pro">
			<input type="submit" name="var_stock_btn" class="var_stock_q_btn common_submit_btn">
			<input type="hidden" name="var_quantity_main_id" value="<?php echo $p_id;?>" class="var_quantity_main_id">
			<input type="hidden" name="var_quantity_id" value="<?php echo $id;?>" class="var_quantity_id">
			<input type="hidden" name="var_quantity_index" value="<?php echo $counter;?>" class="var_quantity_index">
			<input type="hidden" name="stock_status" class="stock_status" value="<?php echo $stock_status_pro;?>">
			</td>
			<td class="product_category">
				</td>
			   
			   <td class="product_date"><?php echo get_the_date("Y/m/d H:i:s", $id);  ?></td>
		   </tr>
		
		
		<?php 
		$counter++;
		}} ?>
		
		

		<?php
				   
		    $get_sub_ids = get_post_meta($p_id, 'postids_add', true );  		   
		   $array_search = array_search($p_id, $get_sub_ids);
           unset($get_sub_ids[$array_search]);

		   foreach($get_sub_ids as $get_sub_ids1){
			   if($get_sub_ids1){
			
            $product = wc_get_product( get_the_id() );  
            if (  is_a( $product, 'WC_Product' ) ){			 
			$product_var = wc_get_product($get_sub_ids1);
			$variation_ids_inner = $product_var->get_children();   
			$p_title = get_the_title($get_sub_ids1);	
			$sku = get_post_meta($get_sub_ids1, '_sku', true ); 
			$regular_price = get_post_meta($get_sub_ids1, '_regular_price', true );
            $sale_price = get_post_meta($get_sub_ids1, '_sale_price', true );
		    $stock_quantity = get_post_meta($get_sub_ids1, '_stock', true );
			$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id($get_sub_ids1) );
		   ?>
            <tr class="even_row_box hide_linking_product parentids_<?php echo $p_id;?>">
			<td>Linked</td>
			<td><img src="<?php echo $feat_image_url;?>"></td>
			<td><?php echo $get_sub_ids1;?></td>
			<td class="p_title"><a href="<?php echo site_url(); ?>/wp-admin/post.php?post=<?php echo $get_sub_ids1; ?>&action=edit" target="_blank" title="Edit Product"><?php echo $p_title;?></a></td>
			<td><i class="circle_div"></i></td>
			<td class="sku_p_field"><input type="text" name="sku_field" class="pro_input_field sku_field updated_sku_<?php echo $get_sub_ids1;?>" value="<?php echo $sku;?>"><input type="submit" name="skusave" class="btn_pro_dave common_submit_btn">
			<input type="hidden" name="getpro_id" value="<?php echo $get_sub_ids1;?>" class="hidden_prod_id"></td>
			<td class="regular_price_field">
				<?php if($variation_ids_inner){ echo "-";}else{ ?>
				<input type="text" name="regular_price" value="<?php echo $regular_price?>" class="pro_input_field regular_prices"><input type="submit" name="submit_price" class="submit_price common_submit_btn"><input class="hidden_pro_idd" type="hidden" name="get_pro_id" value="<?php echo $get_sub_ids1;?>">
				
				<?php } ?></td>
			<td class="sale_price_field">
				<?php if($variation_ids_inner){ echo "-";}else{ ?>
				<input type="text" name="sale_pricee" value="<?php echo $sale_price;?>" class="pro_input_field sale_price"><input type="submit" name="submit_sale_btn" class="submit_sale_btn common_submit_btn"><input class="hidden_sale" type="hidden" name="hidden_sale" value="<?php echo $get_sub_ids1;?>">
				<?php } ?></td>
			<td class="stock_quantityy">
				<?php if($variation_ids_inner){ echo "-";}else{ ?>
				<input type="text" name="stock_quantity" value="<?php echo $stock_quantity;?>" class="pro_input_field stock_quantity_pro"><input type="submit" name="stock_btn" class="stock_q_btn common_submit_btn"><input type="hidden" name="hidden_stock" value="<?php echo $get_sub_ids1;?>" class="hidden_stock">
				<?php } ?>
				</td>
			<td class="product_category"><?php
				$terms = get_the_terms( $get_sub_ids1, 'product_cat' );
				$items = array();
				foreach($terms as $term){
					 $items[] = $term->name;
				}
				echo $List = implode(', ', $items);
				   ?>
				</td>
			   
			   <td class="product_date"><?php echo get_the_date("Y/m/d H:i:s", $get_sub_ids1);  ?></td>
		   </tr>
		
		   <?php } }}}} else {
			
			$product = wc_get_product($p_id);
			$variation_ids = $product->get_children();
			$implode_ids = implode(",",$variation_ids);
		
		?>
		
			<tr class="even_row_box only_main_pro main_product_id ev_box postslink_<?php echo $p_id;?>" data-id="<?php echo $p_id;?>">
			   <td>Main</td>
			   <td><img src="<?php echo $feat_image_url;?>"></td>
			   <td><?php echo $p_id;
					//echo "<pre>";
					//print_r($variation_ids);
		
								   
				   ?></td>
			   <td class="p_title"><a href="<?php echo site_url(); ?>/wp-admin/post.php?post=<?php echo $p_id; ?>&action=edit" target="_blank" title="Edit Product"><?php echo $p_title;?></a></td>
			   <td class="icon_box"><i class='fas fa-box-open product_detail_hide' ></i><i class='fas fa-compress-alt circle_arrow'></i></td>
			   <td class="sku_p_field"><input type="text" name="sku_field" class="pro_input_field sku_field updated_sku_<?php echo $p_id;?>" value="<?php echo $sku;?>"><input type="submit" name="skusave" class="btn_pro_dave common_submit_btn show_mesg_<?php echo $p_id;?>">
			   <input type="hidden" name="getpro_id" value="<?php echo $p_id;?>" class="hidden_prod_id">
			   </td>
			   <td class="regular_price_field">
				    <?php if($variation_ids){ echo"-";}else{ ?>
				   <input type="text" name="regular_price" value="<?php echo $regular_price?>" class="pro_input_field regular_prices"><input type="submit" name="submit_price" class="submit_price common_submit_btn show_mesg_<?php echo $p_id;?>"><input class="hidden_pro_idd" type="hidden" name="get_pro_id" value="<?php echo $p_id;?>">
				<?php } ?>
				</td>
			   <td class="sale_price_field">
				    <?php if($variation_ids){ echo "-";}else{ ?>
				   <input type="text" name="sale_pricee" value="<?php echo $sale_price;?>" class="pro_input_field sale_price"><input type="submit" name="submit_sale_btn" class="submit_sale_btn common_submit_btn show_mesg_<?php echo $p_id;?>"><input type="hidden" class="hidden_sale" name="hidden_sale" value="<?php echo $p_id;?>">
				<?php } ?>
				</td>
			   <td class="stock_quantityy">
				    <?php if($variation_ids){echo "<span class='select_all_var'>Check this for all variations</span><input type='checkbox' name='main_var_stock' class='stock_checkbox' value='$implode_ids'>
					<input type='submit' name='submitt' class='update_s_val'>
					";}else{ ?>
				   <input type="text" name="stock_quantity" value="<?php echo $stock_quantity;?>" class="pro_input_field stock_quantity_pro"><input type="submit" name="stock_btn" class="stock_q_btn common_submit_btn show_mesg_<?php echo $p_id;?>"><input type="hidden" name="hidden_stock" value="<?php echo $p_id;?>" class="hidden_stock">
				<?php } ?> 
				</td>
			   <td class="product_category"><?php
				$terms = get_the_terms( $p_id, 'product_cat' );
				$items = array();
				foreach($terms as $term){
					 $items[] = $term->name;
				}
				echo $List = implode(', ', $items);
				   ?>
				</td>
			   
			   <td class="product_date"><?php echo get_the_date("Y/m/d H:i:s", $p_id);  ?></td>
		   </tr>
		
		
		
		<?php
			$product = wc_get_product($p_id);
			$variation_ids = $product->get_children();
			
		$counter=0;	
		if( $variation_ids ) {
			
					foreach ( $variation_ids as $id ) {
						//$variationId = 39;
$variation = new WC_Product_Variation($id);
						//print_r($variation);
$variationName = implode(" / ", $variation->get_variation_attributes());
						
				$variable_product = wc_get_product($id);
 $get_regular_price = $variable_product->get_regular_price();
 $get_sale_price = $variable_product->get_sale_price();
 $get_price = $variable_product->get_price();
 $get_sku = $variable_product->get_sku();
 $get_stock_quantity = $variable_product->get_stock_quantity();
 $get_image = $variable_product->get_image();
 $stock_status_pro = $variable_product->get_stock_status();							
		
		?>
			
		 <tr class="even_row_box variations_products hide_linking_product parentids_<?php echo $p_id;?>" data-parentid="<?php echo $p_id;?>">
			<td>Variation</td>
			<td><?php echo $get_image; ?></td>
			<td><?php echo $id;?></td>
			<td class="variation_img"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/05/move-up-1.png">  <?php echo  $variationName;?></td>
			<td><i class="circle_div"></i></td>
			<td class="sku_p_field">
			<input type="text" name="var_sku_field" class="pro_input_field var_sku_field updatedvar__sku_<?php echo $id;?>" value="<?php echo $get_sku;?>"><input type="submit" name="var_skusave" class="btn_pro_dave common_submit_btn">
			<input type="hidden" name="var_getpro_id" value="<?php echo $id;?>" class="hidden_prod_id"></td>
			<td class="regular_price_field">
			<input type="text" name="var_regular_price" value="<?php echo $get_regular_price?>" class="pro_input_field var_regular_prices"><input type="submit" name="var_submit_price" class="var_submit_price common_submit_btn"><input class="var_hidden_pro_idd" type="hidden" name="var_get_pro_id" value="<?php echo $id;?>">
			</td>
			<td class="sale_price_field">
			<input type="text" name="var_sale_pricee" value="<?php echo $get_sale_price;?>" class="pro_input_field var_sale_price"><input type="submit" name="var_submit_sale_btn" class="var_submit_sale_btn common_submit_btn"><input class="var_hidden_sale" type="hidden" name="var_hidden_sale" value="<?php echo $id;?>"></td>
			<td class="stock_quantityy">
			<input type="text" name="var_stock_quantity" value="<?php echo $get_stock_quantity;?>" class="pro_input_field var_stock_quantity_pro">
			<input type="submit" name="var_stock_btn" class="var_stock_q_btn common_submit_btn">
			<input type="hidden" name="var_hidden_stock" value="<?php echo $id;?>" class="var_hidden_stock">
			<input type="hidden" name="var_quantity_main_id" value="<?php echo $p_id;?>" class="var_quantity_main_id">
			<input type="hidden" name="var_quantity_id" value="<?php echo $id;?>" class="var_quantity_id">
			<input type="hidden" name="var_quantity_index" value="<?php echo $counter;?>" class="var_quantity_index">
			<input type="hidden" name="stock_status" class="stock_status" value="<?php echo $stock_status_pro;?>">
			</td>
			<td class="product_category">
				</td>
			   
			   <td class="product_date"><?php echo get_the_date("Y/m/d H:i:s", $id);  ?></td>
		   </tr>
		
		
		<?php $counter++;}} ?>
		
		
		
		<?php
		}
		
    endwhile;

 
	}
wp_reset_postdata();


		  
	?>
	

		</table>
	

</div>

<div class="new_pagination">
<?php     $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => @$extra.'&paged=%#%',
            'current' => $pagi_new,
            'total' => $total_pages,
            'prev_text'    => __('« prev'),
            'next_text'    => __('next »'),
        ));
    }   
	?>
</div>
 <?php
  
   /* $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1
    );

$brand_product_list = new WP_Query( $args);
    $pagination_count = 1;       
    while($brand_product_list->have_posts()) : $brand_product_list->the_post(); 

        $pagination_count++;

    endwhile; wp_reset_query();
//echo'<pre>';print_r($pagination_count/12); exit;
wp_reset_query();   */
?>

<?php
   /* $pagination = round($pagination_count/12);
    for($i=1;$i<=$pagination;$i++)
    {
        $pagination_no[] = $i;
    ?>
    <a class="product-category-view-all" href="?page=product-inventory&pagination=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php }*/ ?>

<?php
   /* $paged = (get_query_var('paged')) ? get_query_var('paged') : $_GET['pagination'];

    $args = array(
        'post_type' => 'product',
        'paged' => $paged,
        'posts_per_page' => 12,
    );
    $wp_query = new WP_Query($args);

    while($wp_query->have_posts()) : $wp_query->the_post(); 

       
        $p_id = get_the_id();
	 echo  $p_title = get_the_title($p_id);
	echo "<br>";

        
    endwhile; wp_reset_query();
    $data[] = array(
        'pagination' => $pagination_no
    );

    //echo json_encode($peoduct_list, $pagination)
    echo json_encode($data)*/
?>
<?php
} 
?>
