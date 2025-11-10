<!-- method 1 -->
<!-- mysqli procedural method, normal/insecure insert query -->

<?php
require("./database.php");

$id = $_GET["id"];
$sql = "DELETE FROM crud WHERE id = $id"; 

$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: show.php?msg=Data deleted successfully");
  exit;
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>




                                                    <!-- method 1 -->
                                                   <?php
                                                      // require("./database.php");

                                                      // $id = $_GET["id"];

                                                      // $stmt = mysqli_prepare($conn, "DELETE FROM crud WHERE id = ?");
                                                      // if ($stmt === false) {
                                                      //     die("Prepare failed: " . mysqli_error($conn));
                                                      // }

                                                      // mysqli_stmt_bind_param($stmt, "i", $id); 

                                                      // $execute_result = mysqli_stmt_execute($stmt);

                                                      // if ($execute_result) {
                                                      //     header("Location: show.php?msg=Data deleted successfully");
                                                      //     exit;
                                                      // } else {
                                                      //     echo "Failed: " . mysqli_stmt_error($stmt);
                                                      // }

                                                      // mysqli_stmt_close($stmt);
                                                      ?>



<!-- mysqli OOP Style -->
<!-- method 2 -->
<?php
// require("./database.php");

// $id = $_GET["id"];

// $stmt = mysqli_prepare($conn, "DELETE FROM crud WHERE id = ?");
// if ($stmt === false) {
//     die("Prepare failed: " . mysqli_error($conn));
// }

// mysqli_stmt_bind_param($stmt, "i", $id);  // 'i' = integer

// $execute_result = mysqli_stmt_execute($stmt);

// if ($execute_result) {
//     header("Location: show.php?msg=Data deleted successfully");
//     exit;
// } else {
//     echo "Failed: " . mysqli_stmt_error($stmt);
// }

// mysqli_stmt_close($stmt);
?>




                                        <!-- method 2 mysqli OOP Style-->
                                         <!-- Secure Delete with Prepared Statement -->
                                       <?php
                                          // require("./database.php");

                                          // $id = $_GET["id"];

                                          // $stmt = $conn->prepare("DELETE FROM crud WHERE id = ?");
                                          // if ($stmt === false) {
                                          //     die("Prepare failed: " . $conn->error);
                                          // }

                                          // $stmt->bind_param("i", $id);

                                          // if ($stmt->execute()) {
                                          //     header("Location: show.php?msg=Data deleted successfully");
                                          //     exit;
                                          // } else {
                                          //     echo "Failed: " . $stmt->error;
                                          // }

                                          // $stmt->close();
                                          ?>



<!-- method 3 -->
<!-- no Secure Delete  pdo -->
<?php
// require("./database.php");

// $id = $_GET["id"];

// $stmt = $conn->prepare("DELETE FROM crud WHERE id = ?");
// if ($stmt === false) {
//     die("Prepare failed: " . $conn->error);
// }

// $stmt->bind_param("i", $id);

// if ($stmt->execute()) {
//     header("Location: show.php?msg=Data deleted successfully");
//     exit;
// } else {
//     echo "Failed: " . $stmt->error;
// }

// $stmt->close();
?>



                                        <!-- method 3 -->
                                        <!-- Secure Delete with Prepared Statement pdo -->
                                        <?php
                                        // require("./database.php");  // $pdo is PDO instance

                                        // $id = $_GET["id"];

                                        // $stmt = $pdo->prepare("DELETE FROM crud WHERE id = ?");

                                        // if ($stmt->execute([$id])) {
                                        //     header("Location: show.php?msg=Data deleted successfully");
                                        //     exit;
                                        // } else {
                                        //     $error = $stmt->errorInfo();
                                        //     echo "Failed: " . $error[2];
                                        // }
                                        ?>
