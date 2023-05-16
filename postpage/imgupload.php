<?php 
print_r($_FILES);
// $file_name = $_FILES['upload_file']['name'];
$tmp_file = $_FILES['upload_file']['tmp_name'];
$fileTypeExt = explode("/", $_FILES['upload_file']['type']);
$fileType = $fileTypeExt[0];
$fileExt = $fileTypeExt[1];

$extStatus = false;

switch($fileExt){
	case 'jpeg':
	case 'jpg':
	case 'gif':
	case 'bmp':
	case 'png':
		$extStatus = true;
		break;
	
	default:
		echo "이미지 전용 확장자(jpg, bmp, gif, png)외에는 사용이 불가합니다."; 
		exit;
		break;
}
if($fileType == 'image'){

	if($extStatus){

		// $resFile = "./files/{$_FILES['upload_file']['name']}";
        $resFile = './files/'.$idx.$fileExt;
		
		$imageUpload = move_uploaded_file($tmp_file, $resFile);
		
	
		if($imageUpload == true){
			echo "파일이 정상적으로 업로드 되었습니다. <br>";
			echo "<img src='{$resFile}' width='100' />";
		}else{
			echo "파일 업로드에 실패하였습니다.";
		}
	}	
	else {
		echo "파일 확장자는 jpg, bmp, gif, png 이어야 합니다.";
		exit;
	}	
}	
else {
	echo "이미지 파일이 아닙니다.";
	exit;
}
// $file_path = './files/'.$idx.'jpg';
// image table 
 // bidx : 0 
//  bidx : 0 , image : 1
 // bidx:0, image : 2

// $r = move_uploaded_file($tmp_file, $file_path);
?>