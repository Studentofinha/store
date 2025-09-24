<nav class="main-nav" style="background: #222; color: #fff; padding: 0.5em 0; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; padding: 0 2em;">
        <div class="brand" style="font-size: 1.5rem; font-weight: bold; letter-spacing: 1px;">
            <a href="index.php" style="color: #fff; text-decoration: none;">
                <span style="color: #007bff;">Our</span> <span style="color: #ff9800;">Store</span>
            </a>
        </div>
        <div class="links" style="display: flex; gap: 1.5em;">
            <a data-active="index" href="index.php" style="color: #fff; text-decoration: none; padding: 0.5em 0.8em; border-radius: 4px; transition: background 0.2s;">Home</a>
            <a data-active="about" href="about.php" style="color: #fff; text-decoration: none; padding: 0.5em 0.8em; border-radius: 4px; transition: background 0.2s;">About</a>
            <a data-active="contact" href="contact.php" style="color: #fff; text-decoration: none; padding: 0.5em 0.8em; border-radius: 4px; transition: background 0.2s;">Contact</a>
            <a data-active="blog" href="blog.php" style="color: #fff; text-decoration: none; padding: 0.5em 0.8em; border-radius: 4px; transition: background 0.2s;">Blog</a>
        </div>
        <form action="search.php" method="get" class="nav-search" style="margin-left: 2em; display: flex; align-items: center;">
            <input type="text" name="q" placeholder="Search products..." style="padding: 0.4em 0.8em; border: none; border-radius: 4px 0 0 4px; outline: none; font-size: 1em;">
            <button type="submit" style="background: #007bff; color: #fff; border: none; padding: 0.4em 1em; border-radius: 0 4px 4px 0; cursor: pointer; font-size: 1em; transition: background 0.2s;">
                🔍
            </button>
        </form>
    </div>
    <style>
        .main-nav .links a:hover, .main-nav .links a.active, .main-nav .links a[data-active][data-active*="<?php echo isset($page_id) ? $page_id : ''; ?>"] {
            background: #333;
            color: #ff9800;
        }
        @media (max-width: 800px) {
            .main-nav > div {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.7em;
            }
            .main-nav .links {
                gap: 0.7em;
            }
            .nav-search {
                width: 100%;
                margin-left: 0;
                margin-top: 0.5em;
            }
        }
    </style>
</nav>