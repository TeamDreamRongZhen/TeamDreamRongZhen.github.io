<?php
    if(isset($_POST["sblink"]))
    {
        $name = $_POST['uplink']; //get
        $myfile = fopen("links.txt", "w") or die("无法打开文件");
        fwrite($myfile, $name."\n");
        fclose($myfile);
        echo "上传成功";
        echo "1.5秒后跳转至主页";
        header("refresh:1.5;url=../index.htm");
    }
?>