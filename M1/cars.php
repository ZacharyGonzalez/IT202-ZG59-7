<?php
require(__DIR__ . "/partials/nav.php");
?>

<h3>cars</h3>


<form method="GET">
        make: <input type="text" name="make"/>
        <br />
        model: <input type="text" name="model"/>
        <br />
        year: <input type="int" name="year"/>
        <br />
        <input type="submit">
</form>
<?php
if (isset($_GET["make"]) && isset($_GET["model"]) && isset($_GET["year"])){
    $make=$_GET['make'];
    $model=$_GET['model'];
    $year=$_GET['year'];
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO CARS (make, model, year) VALUES(:make, :model, :year)");
    try {
        $stmt->execute([":make" => $make, ":model" => $model, ":year" => $year]);
        echo "Successfully inserted car";
    } catch (Exception $e) {
        echo "There was a problem inserting car";
        "<pre>" . var_export($e, true) . "</pre>";
    }
}


?>