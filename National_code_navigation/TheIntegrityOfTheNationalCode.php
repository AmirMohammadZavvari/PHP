<?php
//بررسی صحت کد ملی
function validate_national_code($code) {
    if (strlen($code) != 10) { // اگر طول رشته 10 نباشد
        return false; // کد ملی نامعتبر است
    }
    if ($code == 0 || in_array($code, array(1111111111, 2222222222, 3333333333, 4444444444, 5555555555, 6666666666, 7777777777, 8888888888, 9999999999))) {
        return false; 
    }
    $sum = 0; // متغیری برای نگه داشتن مجموع
    for ($i = 0; $i < 9; $i++) { // برای هر رقم از چپ به راست تا رقم نهم
        $digit = (int) $code[$i]; // رقم را به عدد تبدیل می کنیم
        $sum += $digit * (10 - $i); // رقم را در عدد متناظر ضرب می کنیم و به مجموع اضافه می کنیم
    }
    $remainder = $sum % 11; // باقی مانده را می گیریم
    $control = (int) $code[9]; // رقم دهم را به عدد تبدیل می کنیم
    if ($remainder < 2 && $control == $remainder) { // اگر باقی مانده بین 0 تا 2 باشد و برابر کد کنترل باشد
        return true; // کد ملی معتبر است
    }
    if ($remainder >= 2 && $control == 11 - $remainder) { // اگر باقی مانده بین 3 تا 10 باشد و برابر 11 منهای باقی مانده باشد
        return true; // کد ملی معتبر است
    }
    return false; // در غیر این صورت، کد ملی نامعتبر است
}
// اگر فرم ارسال شده باشد
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // کد ملی را از ورودی می گیریم
    $code = $_POST["code"];
    // صحت کد ملی را بررسی می کنیم
    $valid = validate_national_code($code);
    // اگر کد ملی معتبر باشد
    if ($valid) {
        // پیام مثبت را نشان می دهیم
        $message = "<span class='bg-success-subtle rounded py-1 px-5'>" . " درست " . "</span>";
    } else {
        // پیام منفی را نشان می دهیم
        $message = "<span class='bg-danger-subtle rounded py-1 px-5'>" . " اشتباه " . "</span>";
    }
    
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmirMohammadZavvari</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link font -->
    <link rel="stylesheet" href="https://dl.daneshjooyar.com/mvie/Moodi_Hamed/assets/css/font-yekanbakh-vf.css">
</head>
<body style=" font-family: YekanBakh !important;">
    <div class="w-25 h-50 rounded-3 border border-2 border-dark container text-center d-flex flex-column justify-content-center align-items-center mt-5" dir="rtl">
        <p class="h2 ">بررسی صحت کد ملی</p>
        <form class="form-control  border-0" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p>لطفا کد ملی خود را وارد کنید:</p>
            <input dir="ltr" type="text" name="code" class="p-1 rounded-3" maxlength="10" required>
            <input type="submit" value="بررسی" class="button btn btn-outline-dark p-0 px-2  py-1">
        </form>
        <?php
        // اگر پیامی وجود داشته باشد
        if (isset($message)) {
            // کلاس سبک بندی را بر اساس صحت کد ملی تعیین می کنیم
            $class = $valid ? "valid" : "invalid";
            // پیام را با کلاس مربوطه نشان می دهیم
            echo "<div class='message $class'>$message</div>";
        }
        ?>
    </div>
</body>
</html>