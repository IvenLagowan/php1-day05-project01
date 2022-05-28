<html>

<head>
    <title>Membuat Dat Mahasiswa</title>
</head>

<body>
    <table id="list-data" class="display">
        <thead>
            <tr>
                <th>
                    <h5>NIM</h5>
                </th>
                <th>
                    <h5>Nama</h5>
                </th>
                <th>
                    <h5>Tingkat</h5>
                </th>
                <th>
                    <h5>Fakultas</h5>
                </th>
                <th>
                    <h5>Jurusan</h5>
                </th>
            </tr>
        </thead>

        <?php
        foreach ($mahasiswa as $key => $l_mhs){
     
            echo $l_mhs->NIM;
            echo $l_mhs->Nama;?
            echo $l_mhs->Tingkat;
            echo $l_mhs->Fakultas;
            echo $l_mhs->Jurusan;
        
        }
        ?>
    </table>
</body>

</html>