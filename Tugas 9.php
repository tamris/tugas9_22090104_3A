<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
        <body>
        <?php
$nim=$nama=$alamat=$email=$no_hp=$prodi="";
$nimErr=$namaErr=$alamatErr=$emailErr=$no_hpErr=$prodiErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST" 
  && isset($_POST["nim"]) 
  && isset($_POST["nama"]) 
  && isset($_POST["alamat"]) 
  && isset($_POST["email"])
  && isset($_POST["no_hp"])
  && isset($_POST["prodi"]) )  {
    $nim = $_POST ["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST ["alamat"];
    $email = $_POST ["email"];
    $no_hp = $_POST ["no_hp"];
    $prodi = $_POST ["prodi"];
  }
?>   

<?php
$nim=$nama=$alamat=$email=$no_hp=$prodi="";
$nimErr=$namaErr=$alamatErr=$emailErr=$no_hpErr=$prodiErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST" 
  && isset($_POST["nim"]) 
  && isset($_POST["nama"]) 
  && isset($_POST["alamat"])
  && isset($_POST["email"])
  && isset($_POST["no_hp"])
  && isset($_POST["prodi"])){
    if (empty($_POST["nim"])) {
        $nimErr = "NIM kosong";
      } else {
        $nim = test_input($_POST["nim"]);
    }
    if (empty($_POST["nama"])) {
        $namaErr = "Name kosong";
      } else {
        $nama = test_input($_POST["nama"]);
    }
    if (empty($_POST["alamat"])){
        $alamatErr = "Alamat kosong";
    } else {
        $alamat = test_input($_POST["alamat"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email kosong";
      } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["no_hp"])){
        $no_hpErr = "No HP kosong";
    } else {
        $no_hp = test_input($_POST["no_hp"]);
    }
    if (empty($_POST["prodi"])){
        $prodiErr = "Prodi kosong";
    } else {
        $prodi = test_input($_POST["prodi"]);
    }

}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
        <form action ="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method = "POST">
        NIM : <input type ="text" name="nim"><span class="error">* <?php echo $nimErr;?></span><br><br>
        Nama : <input type ="text" name="nama"><span class="error">* <?php echo $namaErr;?></span><br><br>
        Alamat : <input type = "text" name="alamat"><span class="error">* <?php echo $alamatErr;?></span><br><br>
        Email : <input type = "text" name="email"><span class="error">* <?php echo $emailErr;?></span><br><br>
        NO HP : <input type = "text" name="no_hp"><span class="error">* <?php echo $no_hpErr;?></span><br><br>
        Prodi : <input type = "text" name="prodi"><span class="error">* <?php echo $prodiErr;?></span><br><br>
        <input type="submit">
</form>

<?php
    echo "NIM:";
    echo $nim;
    echo "<br>";
    echo "Nama:";
    echo $nama;
    echo "<br>";
    echo "Alamat:"; 
    echo $alamat;
    echo "<br>";
    echo "Email:"; 
    echo $email;
    echo "<br>";
    echo "NP HP:"; 
    echo $no_hp;
    echo "<br>";
    echo "Prodi:"; 
    echo $prodi;
    echo "<br>";
?>
        </body>
    </head>
</html>