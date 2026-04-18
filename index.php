<?php

$connect = mysqli_connect(
    getenv('MYSQL_HOST'),
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASSWORD'),
    getenv('MYSQL_DATABASE')
);

if (!$connect) {
    die("Database connection failed");
}

$query = "SELECT * FROM posts";

$response = mysqli_query($connect, $query);

if (!$response) {
    die("Query failed");
}

echo "<strong>Posts: </strong>";
while ($i = mysqli_fetch_assoc($response)) {
    echo '<p>' . htmlspecialchars($i['title']) . '</p>';
    echo '<p>' . htmlspecialchars($i['body']) . '</p>';
    echo '<p>' . htmlspecialchars($i['date_created']) . '</p>';
    echo '<hr>';
}

mysqli_close($connect);