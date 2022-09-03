<!DOCTYPE html>
<html>

<head>
    <title>Masukkan Data Siswa</title>
    <style type="text/css">
    input,
    textarea {
        padding: 0;
        margin: 0;
    }

    h2 {
        color: #50626C;
        text-align: center;
        font-family: arial;
        text-transform: uppercase;
        border: 3px solid #f1f1f1;
        padding: 5px;
        width: 490px;
        margin: auto;
        margin-bottom: 10px;
        margin-top: 20px;
    }

    form {
        border: 3px solid #f1f1f1;
        font-family: arial;
        width: 500px;
        margin: auto;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    label {
        color: #50626C;
        text-transform: uppercase;
    }

    button {
        background-color: #049372;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f03434;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;

    }

    span {
        color: #50626C;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
    </style>


</head>

<body>
    <header>
        <center>
            <h3>Data Siswa</h3>
            <center>
    </header>
    <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
        <fieldset>

            <p>
                <label for="nis">NIS</label>
                <input type="text" name="nis" placeholder="NIS" />
            </p>
            <p>
                <label for="nisn">NISN</label>
                <input type="text" name="nisn" placeholder="NISN" />
            </p>
            <p>
                <label for="nama">Nama</label>
                <input type="text" name="nama" placeholder="Nama" />
            </p>
            <p>
                <label for="jk">Jenis Kelamin </label>
                <label><input type="radio" name="jk" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jk" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="jurusan">Jurusan </label>
                <select name="jurusan">
                    <option>Jurusan</option>
                    <option>RPL</option>
                    <option>TKJ</option>
                    <option>TR</option>
                    <option>TJA</option>
                </select>
            </p>
            <p>
                <label for="username">Username </label>
                <input type="text" name="username" placeholder="Username" />
            </p>
            <p>
                <label for="password">Password </label>
                <input type="text" name="password" placeholder="Password" />
            </p>
            <p>
                <label for="level">Level </label>
                <input type="text" name="level" placeholder="Level" />
            </p>
            <p>
                <label>Foto</label>
                <input type="file" name="file" class="file">
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>

</html>