<!DOCTYPE html>
<head>
    <title> PHP File Upload example </title> 
</head>

<body>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <label> Select image : </label>
        <input type="file" name="image">
        <input type="submit" value="Upload" name="submit"> <br/>
    </form>

</body>
</html>