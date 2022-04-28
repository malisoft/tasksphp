<?php require_once("view/partials/header.php") ?>

<body>
<?php require_once("view/partials/nav_admin.php") ?>

<?php
$slot=require "view/components/table_users.php";
//the slot will be rendered into the slot varaible in the table component
require "view/components/table.php";
?>

</body>
<?php require("view/partials/footer.php") ?>
