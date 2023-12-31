<?php
    include "view/header.php";
    include "model/blog.php";
    include "model/pdo.php";
    include "global.php";
    include "model/gv.php";
    include "model/monhoc.php";
    include "model/khoahoc.php";
   

    $list_tintuc = loadall_tintuc();
    $list_gv = loadall_gv();
$list_monhoc = loadall_monhoc();
$list_khoahoc = loadall_khoahoc();

    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            case "dmkhoahoc":
              
                include "view/subject/subject-grid.php";
                break;
            case "introduce":
                include "view/nav_control/introduce.php";
                break;
            case "blog":
             
                include "view/blog/blog.php";
                break;
            case "contact":
                include "view/nav_control/contact.php";
                break;   
            case "gioithieu":
                include "view/nav_control/introduce.php";
                break;
            case "list_gv":
              
                include "view/news.php";
                break;   
                case "news":
                    include "view/list_gv.php";
                    break;   
            case "gv-grid":
                include "view/gv/gv-grid.php";
                break;   
                     
        
        case "subject-detail":
            if(isset($_GET['id'])&&($_GET['id'])>0){
                $id = $_GET['id'];
                 $kh = loadone_khoahoc($id);
                extract($kh); 
                include "view/subject/subject-detail.php";
            }
          
            break;   
         case "subject-grid":
                include "view/subject/subject-grid.php";
                break;   
                     
    }
    }else{
        include "view/about.php";
        include "view/subject.php";
        include "view/home.php";
        include "view/list_gv.php";
        include "view/news.php";
    }

    include "view/footer.php";
?>