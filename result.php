<?php 

//条件分岐
$num1 = $_GET["num1"];
switch ($_GET["num2"]){
    case "A":
        $num2 = 1;
        break;
    case "B":
        $num2 = 2;
        break;
    case "C":
        $num2 = 3;
        break;
    case "D":
        $num2 = 4;
        break;
    case "E":
        $num2 = 5;
        break;
    case "F":
        $num2 = 6;
        break;
    case "G":
        $num2 = 7;
        break;
    case "H":
        $num2 = 8;
        break;
    case "J":
        $num2 = 9;
        break;
    case "K":
        $num2 = 10;
        break;
    case "M":
        $num2 = 11;
        break;
    case "T":
        $num2 = 12;
        break;
    case "U":
        $num2 = 13;
        break;
    case "W":
        $num2 = 14;
        break;
    case "X":
        $num2 = 15;
        break;
    case "Y":
        $num2 = 16;
    break;
    }
$num3 = $_GET["num3"];
$num4 = $_GET["num4"];
$num5 = $_GET["num5"];
$num6 = $_GET["num6"];
$num7 = $_GET["num7"];
$num8 = $_GET["num8"];
$num9 = $_GET["num9"];

//学籍番号
$facultycode = $_GET["num2"];
$studentid = $num1.$facultycode.$num3.$num4.$num5.$num6.$num7.$num8.$num9;
echo $studentid;

//画像のベース生成
$dst_img = imagecreatetruecolor(1010, 1010);//空のキャンバスの作成
$backgroundColor = imagecolorallocate($dst_img, 0, 255, 0);//背景色セット
$boderColor = imagecolorallocate($dst_img, 80, 80, 80);//枠の境界線セット
imagefill($dst_img, 0, 0, $backgroundColor); //背景を透過用に塗る
imagecolortransparent($dst_img, $backgroundColor);//背景色透明化

//フレーム色を指定
//A学部の場合のframeの色を指定
if ($num2 == 1) {
    if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }
    if ($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }
    if ($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//B学部の時のframe1の色を指定
if ($num2 == 2) {
    if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }
    if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }
    if($num8 == 9) {
       $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 0) {
       $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 1) {
       $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 2) {
       $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 3) {
       $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 4) {
       $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 5) {
       $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 6) {
       $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 7) {
       $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
       $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
   }
}
// C学部の時のframe1の色を指定
if ($num2 == 3) {
    if($num6 == 8) {
    $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }
    if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }
    if ($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//D学部の時のframe1の色を指定
if ($num2 == 4) {
    if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }
    if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }
    if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }  
}
//E学部の時のframeの色を指定
if ($num2 == 5) {
   if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//F学部の時のframe1の色を指定
if ($num2 == 6) {
    if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//G学部の時のframe1の色を指定
if ($num2 == 7) {
    if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//H学部の時のframe1の色を指定
if ($num2 == 8) {
    if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//J学部の時のframe1の色を指定
if ($num2 == 9) {
    if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//K学部の時のframe1の色を指定
if ($num2 == 10) {
    if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//M学部の時のframe1の色を指定
if ($num2 == 11) {
    if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//T学部の時のframe1の色を指定
if ($num2 == 12) {
    if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//U学部の時のframe1の色を指定
if ($num2 == 13) {
    if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//W学部の時のframe1の色を指定
if ($num2 == 14) {
    if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//X学部の時のframe1の色を指定
if ($num2 == 15) {
    if($num6 == 5) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 8) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 5) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 8) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 5) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 8) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}
//Y学部の時のframe1の色を指定
if ($num2 == 16) {
    if($num6 == 6) {
        $frame1 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num6 == 9) {
        $frame1 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num6 == 3) {
        $frame1 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num6 == 2) {
        $frame1 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num6 == 7) {
        $frame1 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num6 == 4) {
        $frame1 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num6 == 1) {
        $frame1 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num6 == 0) {
        $frame1 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame1 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num7 == 6) {
        $frame2 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num7 == 9) {
        $frame2 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num7 == 3) {
        $frame2 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num7 == 2) {
        $frame2 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num7 == 7) {
        $frame2 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num7 == 4) {
        $frame2 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num7 == 1) {
        $frame2 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num7 == 0) {
        $frame2 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame2 = imagecolorallocate($dst_img, 115, 56, 42);
    }

    if($num8 == 6) {
        $frame3 = imagecolorallocate($dst_img, 234, 85, 20);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 243, 152, 0);
    } else if($num8 == 9) {
        $frame3 = imagecolorallocate($dst_img, 250, 238, 0);
    } else if($num8 == 3) {
        $frame3 = imagecolorallocate($dst_img, 228, 0, 127);
    } else if($num8 == 2) {
        $frame3 = imagecolorallocate($dst_img, 96, 25, 134);
    } else if($num8 == 7) {
        $frame3 = imagecolorallocate($dst_img, 0, 145, 58);
    } else if($num8 == 4) {
        $frame3 = imagecolorallocate($dst_img, 34, 172, 56);
    } else if($num8 == 1) {
        $frame3 = imagecolorallocate($dst_img, 46, 167, 224);
    } else if($num8 == 0) {
        $frame3 = imagecolorallocate($dst_img, 159, 160, 160);
    } else {
        $frame3 = imagecolorallocate($dst_img, 115, 56, 42);
    }
}

// フレームを描画
imagefilledarc($dst_img, 505, 505, 1010, 1010, 0, 360, $boderColor, IMG_ARC_PIE);
imagefilledarc($dst_img, 505, 505, 1005, 1005, 0, 360, $frame1, IMG_ARC_PIE);
imagefilledarc($dst_img, 505, 505, 930, 930, 0, 360, $boderColor, IMG_ARC_PIE);
imagefilledarc($dst_img, 505, 505, 925, 925, 0, 360, $frame2, IMG_ARC_PIE);
imagefilledarc($dst_img, 505, 505, 845, 845, 0, 360, $boderColor, IMG_ARC_PIE);
imagefilledarc($dst_img, 505, 505, 840, 840, 0, 360, $frame3, IMG_ARC_PIE);
imagefilledarc($dst_img, 505, 505, 768, 768, 0, 360, $boderColor, IMG_ARC_PIE);

//背景の指定と描画
if ($num9 == 0) {
    $bg = imagecreatefrompng("./img/bg/bg00.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010);
} elseif ($num9 == 1) {
    $bg = imagecreatefrompng("./img/bg/bg01.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
} elseif ($num9 == 2) {
    $bg = imagecreatefrompng("./img/bg/bg02.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
} elseif ($num9 == 3) {
    $bg = imagecreatefrompng("./img/bg/bg03.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
} elseif ($num9 == 4) {
    $bg = imagecreatefrompng("./img/bg/bg04.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
} elseif ($num9 == 5) {
    $bg = imagecreatefrompng("./img/bg/bg05.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
} elseif ($num9 == 6) {
    $bg = imagecreatefrompng("./img/bg/bg06.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
} elseif ($num9 == 7) {
    $bg = imagecreatefrompng("./img/bg/bg07.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
} elseif ($num9 == 8) {
    $bg = imagecreatefrompng("./img/bg/bg08.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
} else {
    $bg = imagecreatefrompng("./img/bg/bg09.png");
    imagecopy($dst_img, $bg, 0, 0, 0, 0, 1010, 1010); 
}

//どうぶつさんの指定と名前取得
//CDを除いた下3桁の和の2桁目-1桁目でどうぶつさんを決定
$sum6to8 = $num6 + $num7 + $num8;
if ($sum6to8 < 10) {
    $twosumdig6to8 = 0;
    $onesumdig6to8 = substr($sum6to8,0,1);
} else {
    $twosumdig6to8 = substr($sum6to8,0,1);
    $onesumdig6to8 = substr($sum6to8,1,1);
}

//$animalnumを10以上と未満に場合分け
if ($sum6to8 >= 10) {
    if ("$onesumdig6to8" - "$twosumdig6to8" == 0) {
    $animalnum = 0;
    } elseif ("$onesumdig6to8" - "$twosumdig6to8" == 1) {
        $animalnum = 1;
    } elseif ("$onesumdig6to8" - "$twosumdig6to8" == 2) {
        $animalnum = 2;
    } elseif ("$onesumdig6to8" - "$twosumdig6to8" == 3) {
        $animalnum = 3;
    } elseif ("$onesumdig6to8" - "$twosumdig6to8" == 4) {
        $animalnum = 4;
    } elseif ("$onesumdig6to8" - "$twosumdig6to8" == 5) {
        $animalnum = 5;
    } elseif ("$onesumdig6to8" - "$twosumdig6to8" == 6) {
        $animalnum = 6;
    } elseif ("$onesumdig6to8" - "$twosumdig6to8" == 7) {
        $animalnum = 7;
    } elseif ("$onesumdig6to8" - "$twosumdig6to8" == 8) {
        $animalnum = 8;
    } else {
        $animalnum = 9;
    }
} else {
    $animalnum = $sum6to8;
}

//どうぶつさんの名前を付与
if ("$animalnum" == 0) {
    $animalname = "サイさん";
} elseif ("$animalnum" ==1) {
    $animalname = "ゾウさん";
} elseif ("$animalnum" ==2) {
    $animalname = "クマさん";
} elseif ("$animalnum" ==3) { 
    $animalname = "キリンさん";
} elseif ("$animalnum" ==4) {
    $animalname = "ヒヨコさん";
} elseif ("$animalnum" ==5) {
    $animalname = "カメさん";
} elseif ("$animalnum" ==6) { 
    $animalname = "ライオンさん";
} elseif ("$animalnum" ==7) {
    $animalname = "ヒツジさん";
} elseif ("$animalnum" ==8) {
    $animalname = "マグロさん";
} elseif ("$animalnum" ==9) {
    $animalname = "おにぎりさん";
} else {
    $animalname = "うどんさん";
}

//CDを除いた下3桁の積の1桁目でどうぶつさんのオーラを決定
$pro6to8 = $num6 * $num7 * $num8;
if ($pro6to8 < 10) {
    $threeprodig6to8 = 0;
    $twoprodig6to8 = 0;
    $oneprodig6to8 = substr($pro6to8,0,1);
} else if (9 < $pro6to8 and $pro6to8<100) {
    $threeprodig6to8 = 0;
    $twoprodig6to8 = substr($pro6to8,0,1);
    $oneprodig6to8 = substr($pro6to8,1,1);
} else {
    $threeprodig6to8 = substr($pro6to8,0,1);
    $twoprodig6to8 = substr($pro6to8,1,1);
    $oneprodig6to8 = substr($pro6to8,2,1);
}

//どうぶつさんの指定と描画
if ($animalnum == 0) {  //どうぶつさんを指定したのち、そのどうぶつさんの中でどの画像になるかを指定
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/0/horn08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/0/horn09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 1) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/1/elephant09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 2) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/2/bear08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/2/bear09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 3) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/3/giraffe09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 4) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/4/chick08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/4/chick09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 5) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/5/turtle09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 6) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/6/lion08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/6/lion09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 7) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/7/sheep09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 8) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/8/fish08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/8/fish09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else if ($animalnum == 9) {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/9/onigiri09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
} else {
    if ($oneprodig6to8 == 0) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon00.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 1) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon01.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 2) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon02.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 3) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon03.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 4) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon04.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 5) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon05.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 6) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon06.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 7) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon07.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else if ($oneprodig6to8 == 8) {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon08.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    } else {
        $animalaura = imagecreatefrompng("./img/animal/nega/udon09.png");
        imagecopy($dst_img, $animalaura, 0, 0, 0, 0, 1010, 1010);
    }
}

//フレームの模様の指定
if ($oneprodig6to8 == 0) {
    $deco = imagecreatefrompng("./img/deco/deco00.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else if ($oneprodig6to8 == 1) {
    $deco = imagecreatefrompng("./img/deco/deco01.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else if ($oneprodig6to8 == 2) {
    $deco = imagecreatefrompng("./img/deco/deco02.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else if ($oneprodig6to8 == 3) {
    $deco = imagecreatefrompng("./img/deco/deco03.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else if ($oneprodig6to8 == 4) {
    $deco = imagecreatefrompng("./img/deco/deco04.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else if ($oneprodig6to8 == 5) {
    $deco = imagecreatefrompng("./img/deco/deco05.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else if ($oneprodig6to8 == 6) {
    $deco = imagecreatefrompng("./img/deco/deco06.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else if ($oneprodig6to8 == 7) {
    $deco = imagecreatefrompng("./img/deco/deco07.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else if ($oneprodig6to8 == 8) {
    $deco = imagecreatefrompng("./img/deco/deco08.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
} else {
    $deco = imagecreatefrompng("./img/deco/deco09.png");
    imagecopy($dst_img, $deco, 0, 0, 0, 0, 1010, 1010);
}

//個人の遊び用上書き処理
if ($studentid == "1T1608826") {
    
}

ob_start();
imagepng($dst_img, "./img/result/$studentid.png"); //resultimgディレクトリに保存
imagepng($dst_img);
$dst_img = ob_get_clean();
$studentidimg = base64_encode($dst_img);
imagedestroy($dst_img); //メモリ解放


//OGP用の画像生成
$dst_img_ogp = imagecreatetruecolor(2667, 1400);
$ogpbackground = imagecreatefrompng("./img/result/ogp/ogpbackground.png");
imagecopy($dst_img_ogp, $ogpbackground, 0, 0, 0, 0, 2667, 1400);
$studentidimg_copy = imagecreatefrompng("./img/result/$studentid.png");
imagecopy($dst_img_ogp, $studentidimg_copy, 120, 370, 0, 0, 1010, 1010);

//パラダイス籍番号の合成
$textColor = imagecolorallocate($dst_img_ogp, 0, 0, 0);
$fp = @fopen("./counter1.txt", "r+") or die("Counter Error");//結果ページのアクセス数カウント
flock($fp, LOCK_EX);
$count = fgets($fp);
$count++;
rewind($fp);
fputs($fp, $count);
fclose($fp);

$digcount = strlen($count); //アクセス桁数を取得

$cdmin = 0;
$cdmax = 9;
$cdnum = rand($cdmin, $cdmax); //CDはランダム

if($digcount == 1) { //パラダイス番号の決定
    $cardnum = "1P19000$count-$cdnum";
} else if ($digcount == 2) {
    $cardnum = "1P1900$count-$cdnum";
} else if ($digcount == 3){
    $cardnum = "1P190$count-$cdnum";
} else if ($digcount == 4){
    $cardnum = "1P19$count-$cdnum";
} else {
    $cardnum = "1P1$count-$cdnum";
}

$font = "./font/Helvetica.ttc";
imagettftext($dst_img_ogp, 60, 0, 1900, 512, $textColor, $font, $cardnum);
date_default_timezone_set('Asia/Tokyo');
$date = date("Y    m   d"); //入パラダイス日時の取得
imagettftext($dst_img_ogp, 60, 0, 1250, 620, $textColor, $font, $date);

//どうぶつさん名の合成
if($animalnum == 0) {
    $nametext = imagecreatefrompng("./img/animal/0/horn_ogp.png");
    list($width, $height) = getimagesize("./img/animal/0/horn_ogp.png");
} else if ("$animalnum" == 1) {
    $nametext = imagecreatefrompng("./img/animal/1/elephant_ogp.png");
    list($width, $height) = getimagesize("./img/animal/1/elephant_ogp.png");
} else if ("$animalnum" == 2) {
    $nametext = imagecreatefrompng("./img/animal/2/bear_ogp.png");
    list($width, $height) = getimagesize("./img/animal/2/bear_ogp.png");
} else if ("$animalnum" == 3) {
    $nametext = imagecreatefrompng("./img/animal/3/giraffe_ogp.png");
    list($width, $height) = getimagesize("./img/animal/3/giraffe_ogp.png");
} else if ("$animalnum" == 4) {
    $nametext = imagecreatefrompng("./img/animal/4/chick_ogp.png");
    list($width, $height) = getimagesize("./img/animal/4/chick_ogp.png");
} else if ("$animalnum" == 5) {
    $nametext = imagecreatefrompng("./img/animal/5/turtle_ogp.png");
    list($width, $height) = getimagesize("./img/animal/5/turtle_ogp.png");
} else if ("$animalnum" == 6) {
    list($width, $height) = getimagesize('./img/animal/6/lion_ogp.png');
    $nametext = imagecreatefrompng('./img/animal/6/lion_ogp.png');
} else if ("$animalnum" == 7) {
    $nametext = imagecreatefrompng("./img/animal/7/sheep_ogp.png");
    list($width, $height) = getimagesize("./img/animal/7/sheep_ogp.png");
} else if ("$animalnum" == 8) {
    $nametext = imagecreatefrompng("./img/animal/8/fish_ogp.png");
    list($width, $height) = getimagesize("./img/animal/8/fish_ogp.png");
} else if ("$animalnum" == 9) {
    $nametext = imagecreatefrompng("./img/animal/9/onigiri_ogp.png");
    list($width, $height) = getimagesize("./img/animal/9/onigiri_ogp.png");
} else {
    $nametext = imagecreatefrompng("./img/animal/nega/udon_ogp.png");
    list($width, $height) = getimagesize("./img/animal/nega/udon_ogp.png");
}

imagecopy($dst_img_ogp, $nametext, 1240, 800, 0, 0, $width, $height);

ob_start();
imagepng($dst_img_ogp, "./img/result/ogp/ogp_$studentid.png");
imagedestroy($dst_img_ogp); //メモリ解放

//URL短縮
    // HTML出力用
    $html = '' ;

	// アクセストークンの設定
	$access_token = '3df399784d748b18d44ff37b8133a2959beffb30' ;

    // 元のURLは$before_url = '$_SERVER["REQUEST_URI"];' ;
    $before_url = 'https://twitter.com' ;

	// GETメソッドで指定がある場合は上書き
	if( isset( $_GET['url'] ) && !empty( $_GET['url'] ) ) {
		$before_url = $_GET['url'] ;
	}

	// cURLを利用してリクエスト
	$curl = curl_init() ;
	curl_setopt( $curl, CURLOPT_URL , 'https://api-ssl.bitly.com/v3/shorten?access_token=' . $access_token . '&longUrl=' . rawurlencode( $before_url ) ) ;
	curl_setopt( $curl, CURLOPT_HEADER, 1 ) ;						// ヘッダーを取得する
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false ) ;			// 証明書の検証を行わない
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true ) ;			// curl_execの結果を文字列で返す
	curl_setopt( $curl, CURLOPT_TIMEOUT, 15 ) ;						// タイムアウトの秒数
	curl_setopt( $curl, CURLOPT_FOLLOWLOCATION , true ) ;			// リダイレクト先を追跡するか？
	curl_setopt( $curl, CURLOPT_MAXREDIRS, 5 ) ;					// 追跡する回数
	$res1 = curl_exec( $curl ) ;
	$res2 = curl_getinfo( $curl ) ;
	curl_close( $curl ) ;

	// 取得したデータ
	$json = substr( $res1, $res2['header_size'] ) ;			// 取得したデータ(JSONなど)
	$header = substr( $res1, 0, $res2['header_size'] ) ;	// レスポンスヘッダー (検証に利用したい場合にどうぞ)

	// 取得したJSONをオブジェクトに変換
	$obj = json_decode( $json ) ;

	// URLを表示用に整形 (検証用)
	foreach( array( 'before_url', ) as $variable_name ) {
		${ $variable_name } = htmlspecialchars( ${ $variable_name } , ENT_QUOTES , 'UTF-8' ) ;
	}



	// 出力
	$html .= '<h2>短縮URL</h2>' ;

	// 成功時
	if( isset( $obj->data->url ) && !empty( $obj->data->url ) ) {
		// 取得した短縮URL
		$shorten_url = $obj->data->url ;

		// 出力
		$html .= 	'<dt>短縮したURL</dt>' ;
		$html .= 		'<dd><a href="' . $shorten_url . '" target="_blank">' . $shorten_url . '</a></dd>' ;

	// 失敗時
	} else {
		$html .= '<p><mark>短縮URLを作成できませんでした…。</mark></p>';

	}
	// ブラウザに[$html]の内容を出力
	// 運用時はHTMLのヘッダーとフッターを付けましょう。
    echo $html ;

?>