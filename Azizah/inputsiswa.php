<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Form Login</title>
        <link rel="stylesheet" href="style.css">
    
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background: url(bg.jpg)
            }
            .box {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(0, 0, 0,.8);
                width: 400px;
                padding: 40px;
                box-sizing: border-box;
                box-shadow: 0 15px 25px rgba(0,0,0.5);
                border-radius: 10px;
            }
            .box h2 {
                margin: 0 0 0 30px;
                padding: 0;
                color: #fff;
                text-align: center;
            }
            .box .inputBox {
                position: relative;
            }
            .box .inputBox input {
                width: 100%;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                margin-bottom: 30px;
                border: none;
                border-bottom: 1px solid #fff;
                outline: none;
                background: transparent;
            }
            .box .inputBox label {
                position: absolute;
                top: 0;
                left: 0;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                pointer-events: none;
                transition: .5%;
            }
            .box .inputBox input:focus ~ label {
                top: -20px;
                left: 0;
                color: #03a9f4;
                font-size: 12px;
            }
            .box input [type="submit"] {
                background: transparent;
                border: none;
                outline: none;
                color: #fff;
                background: blue;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 5px;
            }


        </style>
    </head>

    <body>
        <div class="box">
            <h2>Cek Peminjaman Buku<h2><br>
            <form>
                <div class="inputBox">
                    <input type="text" name="" required="">
                    <label>Nama</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="" required="">
                    <label>Nis</label><br>
                </div>
                <input type="submit" name="" value="Cek Peminjaman"><br>
            </form>
        </div>
    </body>

</html>