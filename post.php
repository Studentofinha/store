<?php
require "php/functions.php";

// Check if 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    // Function to fetch a single blog post by ID
    function getBlogPostById($id) {
        $mysqli = dbConnect();
        $stmt = $mysqli->prepare("SELECT title, summary, content, date FROM blog_posts WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $stmt->close();
        $mysqli->close();
        return $data;
    }

    $post = getBlogPostById($postId);

    if ($post) {
        // Display the blog post
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='description' content='Blog Post'>
            <link rel='stylesheet' href='css/styles.css'>
            <title>{$post['title']}</title>
            <style>
            /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

.container {
    width: 80%;
    margin: 0 auto;
}

header {
    background-color:#f4f4f4 ;
    color: #fff;
    padding: 20px 0;
    margin-bottom: 20px;
}

header .site-title {
    text-align: center;
    font-size: 36px;
}

header nav ul {
    text-align: center;
    list-style: none;
}

header nav ul li {
    display: inline;
    margin: 0 15px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
}

h1, h2 {
    font-size: 36px;
    color: #333;
}

.post-meta {
    font-style: italic;
    color: #666;
}

.post-content {
    margin-top: 20px;
}

.post-summary {
    font-size: 18px;
    margin-bottom: 20px;
}

.post-body {
    font-size: 20px;
    line-height: 1.8;
}

.comment-section {
    margin-top: 40px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.comment-section h3 {
    font-size: 24px;
    color: #333;
}

.comment-section form {
    margin-top: 20px;
}

.comment-section form textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

.comment-section form button {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    background-color: #333;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.comment-section form button:hover {
    background-color: #444;
}

.comments .comment {
    margin-top: 20px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    margin-top: 40px;
}

            </style>
        </head>
        <body>
            <header>
                <div class='container'>
                    <h1 class='site-title'>Our Blog</h1>
                    <nav>
                        <ul>
                            <li><a href='index.php'>Home</a></li>
                            <li><a href='blog.php'>Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <div class='container post'>
                <article>
                    <h2 class='post-title'>{$post['title']}</h2>
                    <p class='post-meta'>Published on: {$post['date']}</p>
                    <div class='post-content'>
                        <p class='post-summary'>{$post['summary']}</p>
                        <div class='post-body'>{$post['content']}</div>
                    </div>
                </article>

                <div class='comment-section'>
                    <h3>Comments</h3>
                    <form action='comment.php' method='POST'>
                        <textarea name='comment' placeholder='Write your comment here...'></textarea>
                        <button type='submit'>Submit Comment</button>
                    </form>
                    <div class='comments'>
                        <!-- Example of a comment -->
                        <div class='comment'>
                            <p><strong>John Doe:</strong> This is an example comment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class='container'>
                    <p>&copy; 2024 Our Store | All Rights Reserved</p>
                </div>
            </footer>
        </body>
        </html>
        ";
    } else {
        echo "<p>Post not found.</p>";
    }
} else {
    echo "<p>No post ID provided.</p>";
}
?>
