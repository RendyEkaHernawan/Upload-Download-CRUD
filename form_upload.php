<html> 
<head> 
    <title> Form Upload </title> 
</head> 
<body> 
<form method = "post" action = "proses_upload.php" enctype="multipart/form-data"> 
    <p><h1>Upload File</h1></p> 
    <table width = "600" border = "0" cellspacing = "1" cellpadding="2"> 
        <tr> 
            <td width = "250">File</td> 
            <td> 
                <input name = "fupload" type = "file" id = "fupload"> 
            </td> 
        </tr> 
        <tr> 
            <td width = "250">Deskripsi File</td> 
            <td> 
            <textarea name = "desc" id = "desc"rows="5"cols="50"></textarea> 
            </td> 
        </tr> 
        <tr> 
            <td width = "250"> </td> 
            <td> </td> 
        </tr> 
        <tr> 
            <td width = "250"> </td> 
            <td> 
                <input name = "upload" type = "submit" id = "upload" value = "Upload"> 
                <input name = "cancel" type = "reset" id = "cancel" value = "Batal"> 
            </td> 
        </tr> 
    </table> 
</form> 
</body> 
</html> 