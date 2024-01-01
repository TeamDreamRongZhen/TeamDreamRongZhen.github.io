<?php
$target_dir = "upimg/";
$target_file = $target_dir . basename($_FILES["imgToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// is it image??? Or Fake????
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imgToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "请上传正确的图片";
    echo "1.5秒后跳转至上传页面";
    header("refresh:1.5;url=index.html");
    $uploadOk = 0;
  }
}

// already exists???
if (file_exists($target_file)) {
  echo "文件已存在，请更改文件名";
  echo "1.5秒后跳转至上传页面";
  header("refresh:1.5;url=index.html");
  $uploadOk = 0;
}


// file formats
if($imageFileType != "jpg" && $imageFileType != "webp" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "请上传jpg, jpeg, png, webp, gif格式的图片";
  echo "1.5秒后跳转至上传页面";
  header("refresh:1.5;url=upload.html");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "oops你的图片没有上传，请重试或联系HungryHenry";
  echo "1.5秒后跳转至上传页面";
  header("refresh:1.5;url=index.html");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target_file)) {
    echo "图片 ". htmlspecialchars( basename( $_FILES["imgToUpload"]["name"])). " 已上传";
    echo "1.5秒后跳转至主页";
    header("refresh:1.5;url=../index.htm");
  } else {
    echo "oops你的图片没有上传，请重试或联系HungryHenry";
    echo "1.5秒后跳转至上传页面";
    header("refresh:1.5;url=index.html");
  }
}
?>