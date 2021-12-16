<!DOCTYPE html>
<head>
    <title> PHP File Upload example </title> 
</head>

<body>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <label> Select image : </label>
        <input type="file" name="image"> <br>
        <!-- Selection to put into topic for Database for display in view.php-->
        <select name = "topic">
        <option value = "Christmas21" selected>Christmas 2021</option>
            <option value = "azer21">Azerbaijan 2021</option>
            <option value = "card21">Cardiff 2021</option>
            <option value = "londoct21" >London October 2021</option>
            <option value = "londnov21" >London November 2021</option>
            <option value = "tom2021">Tom's Birthday 2021</option>
            <option value = "manc2021">Manchester 2021</option>
        </select>
        <input type="submit" value="Upload" name="submit"> <br/>
    </form>

</body>
</html>