<?php
    namespace Html;
    class Table {
        public $title = "";
        public $rows = 0;

        public function info() {
            echo "<p>$this->title has $this->rows rows rows<br> </p>";
        }
    }

    $table = new \Html\Table();
    $table->title = "My Table";
    $table->rows = 5;
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $table->info();
   ?>
</body>
</html>