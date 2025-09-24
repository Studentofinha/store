<?php

require "config.php";

function dbConnect()
{
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if ($mysqli->connect_error != 0) {
        return FALSE;
    } else {
        return $mysqli;
    }
}


function getCategories()
{
    $mysqli = dbConnect();

    $categories = [];
    $result = $mysqli->query("SELECT DISTINCT category FROM products");
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;

    }

    return $categories;

}

function getHomePageProducts($int)
{
    $mysqli = dbConnect();
    $limit = (int) $int;
    $data = [];
    // Use prepared statement for safety even with integers
    $stmt = $mysqli->prepare("SELECT * FROM products ORDER BY RAND() LIMIT ?");
    $stmt->bind_param("i", $limit);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $stmt->close();
    return $data;


}

function getProductsByCategory($category)
{
    $mysqli = dbConnect();

    $smtp = $mysqli->prepare("SELECT *FROM products WHERE category =?");
    $smtp->bind_param("s", $category);
    $smtp->execute();
    $result = $smtp->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    return $data;
}
/**
 * The getProductBytitle function will fetch the product by its title.
 * @param  [string] $title [The product's title]
 * @return [array]        [The fetched product]
 */
function getProductBytitle($title)
{
    $mysqli = dbConnect();
    $stmt = $mysqli->prepare("SELECT * FROM products WHERE title = ?");
    $stmt->bind_param("s", $title);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);
    if (count($data) == 0) {
        header("Location: index.php");
        exit();
    } else {
        return $data;
    }
}
function getBlogPosts()
{
    $mysqli = dbConnect();  // Establish database connection

    // Prepare the SQL query to select all blog posts, ordered by date
    $stmt = $mysqli->prepare("SELECT id, title, summary, content, date FROM blog_posts ORDER BY date DESC LIMIT 10");
    $stmt->execute();

    // Get the result and fetch all records as an associative array
    $result = $stmt->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);

    // Close the statement and connection
    $stmt->close();
    $mysqli->close();

    return $data;
}


?>