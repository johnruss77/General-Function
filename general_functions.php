<?php
  
  function option_list($field_name  = '$this_select_field', $query = 'Select * FROM users', $value = 'id', $option = 'name' ) {
  	
	echo '<select name="'.$field_name.'">';
	$results = MYSQL_QUERY($query);
	$row_count = MYSQL_NUM_ROWS($results);
	for ( $i = 0; $i < $row_count; $i++ ) {	  	  
		$selected_option = MYSQL_RESULT($results, $i, $option);
		$selected_value = MYSQL_RESULT($results, $i, $value);
		echo'<option value="'.trim($selected_value).'">'.trim($selected_option).'</option>'; 
	}
	echo'</select>';  
  }




  function option_radio($field_name = '$this_radio_field', $query = 'Select * FROM departments', $value = 'id', $option = 'name') {

  	$results = MYSQL_QUERY($query);
	$row_count = MYSQL_NUM_ROWS($results);
	for ( $i = 0; $i < $row_count; $i++ ) {	  	  
		$selected_option = MYSQL_RESULT($results, $i, $option);
		$selected_value = MYSQL_RESULT($results, $i, $value);
		echo '<input type="radio" name ="'. $field_name. '" value ="'. $selected_value. '">'.$selected_option; 
	}
    
  }

?>
