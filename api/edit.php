<?php 

//請參考add.php的註解，自行讀懂下列程式碼的功能

include_once '../base.php';

$table=$_POST['table'];
$db=new DB($table);

        $row=$db->find(1);

         switch($table){
            case "about":
               $row['tel']=$_POST['tel'];
               $row['live']=$_POST['live'];
               $row['email']=$_POST['email'];
               $row['com']=$_POST['com'];
            break;
            case "title":
               if(!empty($_POST['text'])){
                  $row['text']=$_POST['text'][$key];
               }
               $row['sh']=($_POST['sh']==$id)?1:0;
            break;
            case "admin":
               $row['acc']=$_POST['acc'][$key];
               $row['pw']=$_POST['pw'][$key];
            break;
            case "menu":
               $row['name']=$_POST['name'][$key];
               $row['href']=$_POST['href'][$key];
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            default:
               if(!empty($_POST['text'])){
                  $row['text']=$_POST['text'][$key];
               }
               $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
         }

         $db->save($row);
     
 
//  print_r($_POST);
to("../admin.php");

?>