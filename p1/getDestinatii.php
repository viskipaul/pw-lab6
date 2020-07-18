include "dbConfig.php";

$plecare_id = $_POST['plecare'];

$sql = "SELECT sosire FROM destinatii WHERE id=".$plecare_id;

$result = mysqli_query($con, $sql);

$sosiri = array();

while( $row = mysqli_fetch_array($result) ){
    $id = $row['id'];
    $sosire = $row['sosire'];

    $users_arr[] = array("id" => $id, "sosire" => $sosire);
}

// encoding array to json format
echo json_encode($sosiri);