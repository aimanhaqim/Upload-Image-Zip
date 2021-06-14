<?php
	if($_FILES['zip_file']['name'] != ''){
		$output = "";
		$file_name = $_FILES['zip_file']['name'];
		$array = explode(".", $file_name);
		$name = $array[0];
		$ext = $array[1];
		if($ext == 'zip'){
			$path = 'upload/';
			$location = $path . $file_name;
			if(move_uploaded_file($_FILES['zip_file']['tmp_name'], $location)){
				$zip = new ZipArchive;
				if($zip->open($location)){
					
				}
				$files = scandir($path . $name);
				foreach($files as $file){
					$tmp_ext = explode(".", $file);
					$file_ext = end($tmp_ext);
					$allowed_ext = array('jpg', 'png', 'jpeg', 'gif');
					if(in_array($file_ext, $allowed_ext)){
						$new_file = $tmp_ext[0].".".$file_ext;
						
						$output .= "<br />".$new_file."<center><img src='upload/".$name."/".$new_file."' height='100px' width='80px'/></center>";
						
					}
				}
				
			}
		}
		
		echo $output;
	}
		
?>