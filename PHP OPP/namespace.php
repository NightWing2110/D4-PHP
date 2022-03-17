<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>My '{$this->title}' has {$this->numRows} player.</p>";
  }
}
$table = new Table();
$table->title = "Team";
$table->numRows = 11;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>