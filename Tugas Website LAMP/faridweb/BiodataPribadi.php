<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #FAF0DC;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #0B4141;
            padding-bottom:15px ;
            border-radius: 10px;
            width: 700px;

        }
        table {
            color: #FAF0DC;
        }
        td:first-child {
            padding-top: 10px;
            font-weight: bold;
        }
        td:nth-child(2){
            border-bottom: 1px solid #FAF0DC;
        }
        h2 {
            text-align: center;
            color: #FAF0DC;
            margin-top: 5px;
            margin-bottom: 5px;
            position: relative;
            padding-bottom: 10px;
            
        }
        h2::before,
        h2::after {
            content: "";
            position: absolute;
            bottom: 50%;
            width: 50%;
            height: 1px;
            background-color: #FAF0DC;
            display: inline-block;
        }

        h2::before {
            left: 0;
        }

        h2::after {
            right: 0;
        }
        h2 span {
            position: relative;
            z-index: 1;
            padding: 0 10px;
            background-color: #0B4141;
        }
              
    </style>
</head>
<body>
    <div class="container">
        <h2><span>Biodata Pribadi</span></h2>
        <table>
            <tr>
                <td>Nama</td>
                <td>M. Farid Pebrian</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>2110817210015</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>Cita-cita</td>
                <td>Game Developer</td>
            </tr>
            <tr>
                <td>Motivasi Berkuliah di Prodi TI</td>
                <td>Perkembangan teknologi yang semakin pesat terlebihnya lagi dunia
                    pemrograman merupakan hal yang sangat menarik bagi saya.
                </td>
            </tr>
        </table>
    </div>
</body>
</html>