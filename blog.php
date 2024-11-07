<?php require "php/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stay updated with our latest tech news, tips, and insights.">
    <meta name="keywords" content="blog, tech news, updates, tips, insights">
    <link rel="stylesheet" href="css/styles.css">
    <title>Our Blog</title>
    <style>
        .blog-posts {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .blog-post {
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
        }
        .blog-post h2 {
            font-size: 1.5rem;
        }
        .blog-post p.date {
            font-size: 0.9rem;
            color: gray;
        }
        .blog-post p.summary {
            font-size: 1rem;
            margin: 10px 0;
        }
        .read-more {
            color: #007bff;
            text-decoration: none;
        }
        .read-more:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body id="blog">

    <?php include "includes/nav.php"; ?>
    <?php include "includes/header.php"; ?>

    <main>
        <div class="section-title">Blog</div>

        <div class="blog-posts">
            <?php
            // Fetch blog posts
            $posts = getBlogPosts();
            foreach ($posts as $post): ?>
                <div class="blog-post">
                    <h2>
                        <a href="post.php?id=<?php echo $post['id']; ?>">
                            <?php echo $post['title']; ?>
                        </a>
                    </h2>
                    <p class="date"><?php echo date("F j, Y", strtotime($post['date'])); ?></p>
                    <p class="summary"><?php echo $post['summary']; ?></p>
                    <a href="post.php?id=<?php echo $post['id']; ?>" class="read-more">Read More</a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
    <script src="javascript/script.js"></script>

</body>

</html>
