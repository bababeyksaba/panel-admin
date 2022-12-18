<?php
include 'database.php';
$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone =$_POST['phone'];
$time = time();

$sql = "INSERT INTO form (userName,email,phone,password,date) VALUES ('$user','$email','$password','$phone',;$time)";
$result = mysqli_query($con,$sql);
if($result){
    echo 'success';
}else{
    echo mysqli_error($con);
}
function convert($string){
    $persian =['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];
    $num =range(0,9);
    $convertedPersianNums= str_replace($persian,$num,$string);
    $englishNumbersOnly=str_replace($arabic,$num,$convertedPersianNums);
    return $englishNumbersOnly;
}
// اگر شماره موبایل و ایمیل میگرفتید :
if (isset($_POST['submit'])){
    $userName =$_POST['user'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $phone=$_POST['phone'];
    $sql1 ="SELECT * FROM form WHERE phone='$phone';";
    $res1 =mysqli_query($con,$sql1);
    $row1 =mysqli_fetch_assoc($res1);
    if(mysqli_num_rows($res1)>0 && $row1['action']==1){
        echo "شما قبلا ثبت نام کرده اید. لطفا وارد شوید.";
        // header('location: ../operations/error.php?id=registered');
        exit();
    }

    if (mysqli_num_rows($res1)>0 && $row1['action']==0){
        $sql = "UPDATE form SET userName='$userName', email='$email', password='$password', date='$time' WHERE phone='$phone';";
    }else{
        $sql = "INSERT INTO form (userName, phone, email, password, date) VALUES ('$userName', '$phone', '$email', '$password', '$time');";
    }
    $res = mysqli_query($con, $sql);

    $code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

    if($res){
        header('location: sms.php?phone='.$phone.'&code='.$code);
    }else{
        echo "متاسفانه ثبت نام شما انجام نشد. لطفا دوباره تلاش کنید.";
        // header('location: ../operations/error.php?id=no-reg');
    }
    

}    

?> 
