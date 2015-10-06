<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload App</title>


</head>
<body>

<form action="" method="post" >

    <input type="hidden" name="_token" value="{{ csrf_token()}}">

    <input type="text" name="link">
    
    <button>Submit</button>

</form>

</body>
</html>