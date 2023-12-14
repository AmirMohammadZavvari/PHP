<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>آپلود تصویر</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- link font -->
        <link rel="stylesheet" href="https://dl.daneshjooyar.com/mvie/Moodi_Hamed/assets/css/font-yekanbakh-vf.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    </head>

    <body style=" font-family: YekanBakh !important;">
        <section style="height: 90vh;" class="d-flex justify-content-center align-items-center">
            <div class=" text-center container w-50 mx-auto p-2 rounded-pill bg-black bg-opacity-25 border border-2 border-dark">
                <div class="w-75 mx-auto">
                    <h2 class="fs-1 fw-bold pt-2">آپلودر تصویر</h2>
                    <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="btn-group my-4 w-100">
                            <button type="submit" class="btn btn-primary upload-btn">آپلود</button>
                            <input style="font-family: 'Acme', sans-serif;" type="file" class="py-3 bg-light btn fw-bolder" id="imageFile" name="imageFile" accept=".jpg">
                            <label for="imageFile" class="fs-5 fw-normal text-muted bg-light btn m-0 py-3" dir="rtl">انتخاب تصویر:</label>
                        </div>
                    </form>

                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $uploadedFile = $_FILES['imageFile'];
                            $allowedExtensions = array('jpg'); 
                            $maxFileSize = 100 * 1024; 

                            if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
                                $fileName = $uploadedFile['name'];
                                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                                if (in_array($fileExtension, $allowedExtensions) && $uploadedFile['size'] <= $maxFileSize) {
                                    echo '<div class="alert alert-success p-2 mx-5 bg-opacity-10 rounded-4 border border-1 border-success" dir="rtl">تصویر با موفقیت آپلود شد!</div>';
                                } else {
                                    echo '<div class="alert alert-danger p-2 mx-5  bg-opacity-10 rounded-4 border border-1 border-danger" dir="rtl">نوع فایل یا حجم فایل مجاز نیست!</div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger p-2 mx-5  bg-opacity-10 rounded-4 border border-1 border-danger" dir="rtl">خطا در آپلود فایل!</div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>