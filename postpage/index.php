<?php

include "require.php";

// if(!ss()){
//     echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
// } 


?>

<!DOCTYPE html>
<html lang="en">
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
        <div class="loginbox">
            <?php 
                if(!ss()){
                    echo "로그인을 해주세요.";
                    echo "<script>
                        const box = document.querySelector('.loginbox');
                        const login = document.createElement('a');
                        box.append(login)
                        login.className = 'loginbtn';
                        login.innerText = '로그인'
                        login.addEventListener('click',e=>{
                            window.location = 'loginindex.php';
                        });
                    </script>";
                }else{
                    echo ss()->id; echo " 님";
                    echo "<script>
                        const box = document.querySelector('.loginbox');
                        const login = document.createElement('a');
                        box.append(login)
                        login.className = 'loginbtn';
                        login.innerText = '로그아웃'
                        login.addEventListener('click',e=>{
                            window.location = 'member/logout.php';
                        });
                        const profile = document.createElement('a');
                        box.append(profile);
                        profile.className = 'profile';
                        profile.innerText = '내 정보';
                        profile.addEventListener('click',e=>{
                            window.location = 'profile.php';
                        });
                        const write = document.createElement('a');
                        box.append(write);
                        write.className = 'write';
                        write.innerText = '내가 쓴 글';
                        write.addEventListener('click',e=>{
                            window.location = 'write.php';
                        });
                        
                    </script>";
                }
            ?>
        </div>
        <a href="createpost.php"><button class ="create">글 쓰기</button></a>
        <div class="listgrid"> 
       
            
        <?php      
        //   $page = 0;
          if (!isset ($_GET['page']) ) {  
              $page = 0;  
          } else {  
              $page = $_GET['page'];  
          }
          $pagenation = $page * 15;
         
          $sql = DB::fetchAll("SELECT * FROM posts order by date DESC limit 15 OFFSET $pagenation"); 
        ?>
	        	
                
                <?php foreach($sql as $key => $value): ?>
                    
                    <div class="postbox">
                        <div class="img">

                        </div>
                        <div class="main">
                            <div class="posttitle">
                                <?= $value->title ?>
                            </div>
                            <div class="posttext">
                            <?= $value->text ?>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="dateandviews">
                            🗓<?= $value->date ?> ▪ 👁‍🗨<?= $value->views ?>
                            </div>
                            <div class="username">
                                by. <?= $value->userid ?>
                            </div>
                           
                        </div>
                        <form action="view.php" method="get">
					            <input type="submit" value ="상세보기" class ="viewbtn">
                                <input type="hidden" name="idx" value= <?=$value->idx?>>
                            </form>
                    </div>
				    
			    <?php endforeach ?>
	        	
                
        </div>
        
    </div>
    <div class="pagenation">
            <?php 
            //  echo $pagenation;
            $count = DB::fetchAll("SELECT * FROM posts order by date DESC");
            $last_page = ceil(count($count)/ 15);
            $nextpage = $page +1;
            $prevpage = $page -1;
            // echo count($count);
            if($nextpage !=1){
                echo "<form action='index.php' method='get'>
                <input type='submit' class ='pagebtn' value = 'prev'>
                <input type='hidden' name='page' value= $prevpage>
            </form>";
            }
            for($i=0; $i<$last_page; $i=$i+1)
	            {   
                    $pagenum = $i+1;
	            	echo "<form action='index.php' method='get'>
                    <input type='submit' class ='pagebtn' value = $pagenum>
                    <input type='hidden' name='page' value= $i>
                </form>";
	            }
                if($nextpage !=$last_page){
                echo "<form action='index.php' method='get'>
                    <input type='submit' class ='pagebtn' value = 'next'>
                    <input type='hidden' name='page' value= $nextpage>
                </form>";
                }
                
            ?>
       </div>
</body>
</html>