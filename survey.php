<?php
// Przykładowa konfiguracja bazy danych (dostosuj do własnych danych)
$servername = "localhost";
$username = "ankieta";
$password = "Aefoo4pah5deiPho";
$dbname = "ankieta";

// Utwórz połączenie z bazą danych
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdź połączenie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pobierz dane z formularza
    $pickImage1 = $_POST['pickImage1'];
    $pickImage2 = $_POST['pickImage2'];
    $pickImage3 = $_POST['pickImage3'];
    $pickImage4 = $_POST['pickImage4'];
    $pickImage5 = $_POST['pickImage5'];
    $pickImage6 = $_POST['pickImage6'];
    $pickImage7 = $_POST['pickImage7'];
    $pickImage8 = $_POST['pickImage8'];
    $pickImage9 = $_POST['pickImage9'];
    $pickImage10 = $_POST['pickImage10'];
    $pickImage11 = $_POST['pickImage11'];
    $pickImage12 = $_POST['pickImage12'];
    $pickImage13 = $_POST['pickImage13'];
    $pickImage14 = $_POST['pickImage14'];
    $pickImage15 = $_POST['pickImage15'];
    $pickImage16 = $_POST['pickImage16'];
    $pickImage17 = $_POST['pickImage17'];
    $pickImage18 = $_POST['pickImage18'];
    $pickImage19 = $_POST['pickImage19'];
    $pickImage20 = $_POST['pickImage20'];
    $pickImage21 = $_POST['pickImage21'];
    $pickImage22 = $_POST['pickImage22'];
    $pickImage23 = $_POST['pickImage23'];
    $pickImage24 = $_POST['pickImage24'];
    $pickImage25 = $_POST['pickImage25'];



if(isset($_POST['save_checkbox']))
{
    $pickImage1 = $_POST['pickImage1'];
    $pickImage2 = $_POST['pickImage2'];
    $pickImage3 = $_POST['pickImage3'];
    $pickImage4 = $_POST['pickImage4'];
    $pickImage5 = $_POST['pickImage5'];
    $pickImage6 = $_POST['pickImage6'];
    $pickImage7 = $_POST['pickImage7'];
    $pickImage8 = $_POST['pickImage8'];
    $pickImage9 = $_POST['pickImage9'];
    $pickImage10 = $_POST['pickImage10'];
    $pickImage11 = $_POST['pickImage11'];
    $pickImage12 = $_POST['pickImage12'];
    $pickImage13 = $_POST['pickImage13'];
    $pickImage14 = $_POST['pickImage14'];
    $pickImage15 = $_POST['pickImage15'];
    $pickImage16 = $_POST['pickImage16'];
    $pickImage17 = $_POST['pickImage17'];
    $pickImage18 = $_POST['pickImage18'];
    $pickImage19 = $_POST['pickImage19'];
    $pickImage20 = $_POST['pickImage20'];
    $pickImage21 = $_POST['pickImage21'];
    $pickImage22 = $_POST['pickImage22'];
    $pickImage23 = $_POST['pickImage23'];
    $pickImage24 = $_POST['pickImage24'];
    $pickImage25 = $_POST['pickImage25'];

    $query = "INSERT INTO demo (pickImage1, pickImage2, pickImage3, pickImage4, pickImage5, pickImage6, pickImage7, pickImage8, pickImage9, pickImage10, pickImage11, pickImage12, pickImage13, pickImage14, pickImage15, pickImage16, pickImage17, pickImage18, pickImage19, pickImage20, pickImage21, pickImage22, pickImage23, pickImage24, pickImage25) VALUES ('$pickImage1', '$pickImage2', '$pickImage3', '$pickImage4', '$pickImage5', '$pickImage6', '$pickImage7', '$pickImage8', '$pickImage9', '$pickImage10', '$pickImage11', '$pickImage12', '$pickImage13', '$pickImage14', '$pickImage15', '$pickImage16', '$pickImage17', '$pickImage18', '$pickImage19', '$pickImage20', '$pickImage21', '$pickImage22', '$pickImage23', '$pickImage24', '$pickImage25')";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Check";
        header("Location: index.html");
    }
    else
    {
        $_SESSION['status'] = "Not Check";
        header("Location: index.html");
    }
}

// Zamknij połączenie
$conn->close();
?>
