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

<body id="blog" style="background: #f7f9fb; font-family: 'Segoe UI', 'Roboto', Arial, sans-serif; color: #222; margin: 0;">

    <style>
        body#blog {
            min-height: 100vh;
        }
        .section-title {
            text-align: center;
            font-size: 2.3rem;
            font-weight: 700;
            margin: 2.5rem 0 1.5rem 0;
            letter-spacing: 1px;
            color: #1a237e;
            text-shadow: 0 2px 8px rgba(30,60,120,0.07);
        }
        .blog-posts {
            max-width: 800px;
            margin: 0 auto 3rem auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(30,60,120,0.07);
            padding: 2.5rem 2rem;
        }
        .blog-post {
            border-bottom: 1px solid #e3e8ee;
            padding: 1.7rem 0;
            transition: background 0.2s;
        }
        .blog-post:last-child {
            border-bottom: none;
        }
        .blog-post h2 {
            font-size: 1.6rem;
            margin: 0 0 0.5rem 0;
            font-weight: 600;
            color: #0d47a1;
            transition: color 0.2s;
        }
        .blog-post h2 a {
            color: inherit;
            text-decoration: none;
        }
        .blog-post h2 a:hover {
            color: #ff9800;
            text-decoration: underline;
        }
        .blog-post p.date {
            font-size: 0.98rem;
            color: #607d8b;
            margin: 0 0 0.7rem 0;
            letter-spacing: 0.5px;
        }
        .blog-post p.summary {
            font-size: 1.08rem;
            margin: 0 0 1.1rem 0;
            color: #333;
            line-height: 1.7;
        }
        .read-more {
            display: inline-block;
            color: #fff;
            background: linear-gradient(90deg, #007bff 60%, #00bcd4 100%);
            padding: 0.5em 1.2em;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(0,123,255,0.08);
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }
        .read-more:hover {
            background: linear-gradient(90deg, #0056b3 60%, #0097a7 100%);
            color: #fff;
            box-shadow: 0 4px 16px rgba(0,123,255,0.13);
            text-decoration: none;
        }
        @media (max-width: 900px) {
            .blog-posts {
                padding: 1.2rem 0.5rem;
            }
        }
        @media (max-width: 600px) {
            .section-title {
                font-size: 1.5rem;
            }
            .blog-posts {
                padding: 0.7rem 0.2rem;
            }
            .blog-post h2 {
                font-size: 1.1rem;
            }
        }
    </style>

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
