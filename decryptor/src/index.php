<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Document</title>
</head>

<body style="margin: 20px 35px">
    <font style="font-family:Century Gothic" size=12 color=#21618C>
        File Decrypter :)
    </font>
    <br><br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label style="font-family:Century Gothic"> Decrypt File </label>
        <input style="font-family:Century Gothic;
                    border: none;
                    border-radius: 12px;
                    color: #FFFFFF;
                    background-color: #7FB3D5;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;"
        type="file" name="file" />
        <br><br>
        <label style="font-family:Century Gothic"> Key </label>
        <input style="font-family:Century Gothic;
                    border: none;
                    border-radius: 12px;
                    color: #FFFFFF;
                    background-color: #7FB3D5;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;"

        type="file" name="key" placeholder="Select the private key" />
        <br><br><br>
        <button style="font-family:Century Gothic;
        border: none;
        border-radius: 12px;
        color: #FFFFFF;
        background-color: #7FB3D5;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;">Submit</button>
    </form>
</body>

</html>