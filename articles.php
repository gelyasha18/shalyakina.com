<?php
include 'includes/db.php';
$result = pg_query($conn, "SELECT * FROM articles ORDER BY created_at DESC");
while ($row = pg_fetch_assoc($result)) {
    echo "<div class='article'>
            <h2>{$row['title']}</h2>
            <p>{$row['content']}</p>
            <small>{$row['created_at']}</small>
          </div>";
}
pg_close($conn);
?>