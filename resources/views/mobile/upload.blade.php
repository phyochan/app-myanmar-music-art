<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload App</title>


</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" name="_token" value="{{ csrf_token()}}">

    <input type="file" name="apk">

    <button>Submit</button>

</form>

</body>
</html>