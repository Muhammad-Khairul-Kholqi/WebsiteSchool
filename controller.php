<?php
    $conn = mysqli_connect("localhost", "root", "", "db_projectakr");

    // function register
    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["conf_password"]);

        $result = mysqli_query($conn, "SELECT username FROM tbl_loginakr WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "
                <script>
                    alert ('Username sudah terdaftar!');
                </script>
            ";

            return false;
        }

        if($password !== $password2) {
            echo "
                <script>
                    alert('Password tidak sesuai');
                </script>
            ";

            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($conn, "INSERT INTO tbl_loginakr VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $wadah = [];
        while($container = mysqli_fetch_assoc($result)) {
            $wadah[] = $container;
        }
        return $wadah;
    }

    // function tambah data
    function tambah($data) {
        global $conn;
        
        $nama = htmlspecialchars($data["nama"]);
        $jabatan = htmlspecialchars($data["jabatan"]);

    $query = "INSERT INTO tbl_daftarguru VALUES ('', '$nama', '$jabatan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }

       // function untuk mencari data
       function cari($menjelajahi) {
        $query = "SELECT * FROM tbl_daftarguru
                    WHERE
                    nama LIKE '%$menjelajahi%' OR
                    jabatan LIKE '%$menjelajahi%'
                    ";

        return query($query);
    }
?>