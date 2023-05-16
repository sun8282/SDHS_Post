<?php
    include "require.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
    <h1 class ="pagetitle" style ="margin-top: 30px;"><a href="index.php">디지텍 POST</a></h1>
    <div class="list"> 
       <h1>내가 쓴글</h1>
            <table>
	        	<thead>
	        		<tr>
	        			<th class ="th">제목</th>
	        			<th class ="th">날짜</th>
	        			<th class ="th">조회수</th>

	        		</tr>
	        	</thead>
        <?php      
          $user = ss()->id;
          $sql = DB::fetchAll("SELECT * FROM posts where userid ='$user' order by views DESC limit 10"); 
        ?>
	        	<tbody class ="indextbody">
                
                <?php foreach($sql as $key => $value): ?>
                    

				    <tr>
					    <td><?= $value->title ?></td>
					    <td><?= $value->date ?></td>
                        <!-- <a href="view.php?idx=1"></a> -->
                        <td><?= $value->views ?></td>
                        <form action="update.php" method="get">
					        <td><input type="submit" value ="수정" class ="viewbtn"></td>
                            <input type="hidden" name="idx" value= <?=$value->idx?>>
                        </form>
                        <form action="delete.php" method="get">
					        <td><input type="submit" value ="삭제" class ="viewbtn"></td>
                            <input type="hidden" name="idx" value= <?=$value->idx?>>
                        </form>
                    </tr>
			    <?php endforeach ?>
                <?php
                    if(count($sql) > 9){
                        echo "<script>
                        const tb = document.querySelector('.list');
                        const more = document.createElement('div');
                        tb.append(more)
                        more.className = 'morebar';
                        more.innerText = '더보기'
                            </script>";
                    }
                    ?>   
	        	</tbody>
	        </table>
            
        </div>
    </div>
</body>
</html>