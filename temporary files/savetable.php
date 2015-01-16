<?php
	if(isset($_POST['createTable'])){
		require("config.php");

		$cols = $_POST['cols'];
		$rows = $_POST['rows'];
		/* insert vertical headers into table */
		$query = 'TRUNCATE TABLE tableheaders';

		if(mysql_query($query)){
			for($i=1; $i<=$rows;$i++){
				$rowname = 'row_'.$i;
				for($j=1; $j<=$cols; $j++){
					$colname = 'col_'.$j;
					$query = 'INSERT INTO `tableheaders` (`vertical_header`, `horizontal_header`) VALUES("'.$_POST[$rowname].'","'.$_POST[$colname].'")';
					if(!mysql_query($query)){ die("couldn't insert vertical or horizontal header");}
					echo $query;
				}
			}
		}
	}
?>