<?php include "connect.php" ?>
<html><head><meta charset="utf-8"></head>
<body>
<div style="display:lineblock">
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
<div style="padding: 15px;">
<?=$row ["name"]?><br><?=$row ["address"]?><br><?=$row ["email"]?><br>
<a href="detail.php?username=<?=$row["username"]?>">
<img src='member_photo/<?=$row["username"]?>.jpg' width='100'>
</a><br>
</div>
<?php endwhile; ?>
</div></body></html>