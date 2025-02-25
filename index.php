<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RexCGod - Information Security</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>RexCGod</h1>
                <p>Information Security Blog</p>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#downloads">Downloads</a></li>
                </ul>
            </nav>
        </div>
        <div class="theme-switcher">
  <button onclick="toggleTheme()">🌓</button>
</div>

<script>
  function toggleTheme() {
    document.documentElement.setAttribute('data-theme',
      document.documentElement.getAttribute('data-theme') === 'light' 
        ? 'dark' 
        : 'light'
    );
  }
</script>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Understanding Cybersecurity Threats</h2>
            <p>Exploring information security concepts and defense strategies</p>
            <a href="#downloads" class="btn">View Downloads</a>
        </div>
    </section>

    <main class="container" id="downloads">
        <section class="featured-posts">
            <h2>Latest Downloads</h2>
            <div class="post-grid">
                <?php 
                // Sample posts data (in a real application, this would come from a database)
                $posts = [
                    [
                        'title' => 'vISitor',
                        'excerpt' => 'A metod ddos php killed powerfull free download without any delay',
                        'date' => 'February 25, 2025',
                        'category' => 'Method',
                        'image' => 'https://img.youtube.com/vi/vF6kFe873dI/maxresdefault.jpg',
                        'download_link' => '#download1'
                    ]
                ];

                // Loop through and display posts
                foreach ($posts as $post) {
                    echo '<article class="post-card">';
                    echo '<div class="post-image" style="background-image: url(\'' . $post['image'] . '\')"></div>';
                    echo '<div class="post-content">';
                    echo '<span class="category">' . $post['category'] . '</span>';
                    echo '<h3>' . $post['title'] . '</h3>';
                    echo '<p>' . $post['excerpt'] . '</p>';
                    echo '<div class="post-meta">';
                    echo '<span class="date"><i class="far fa-calendar"></i> ' . $post['date'] . '</span>';
                    echo '<a href="' . $post['download_link'] . '" class="download-link"><i class="fas fa-download"></i> Download</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</article>';
                }
                ?>
            </div>
        </section>

        <section class="about-section">
            <div class="about-content">
                <h2>About This Blog</h2>
                <p>RexCGod is dedicated to providing educational content about information security, network protections, and cybersecurity awareness. Our goal is to help readers understand security concepts and protective measures.</p>
                <p>All content on this blog is for educational purposes only. We encourage responsible use of information and adherence to legal and ethical guidelines.</p>
            </div>
            <div class="newsletter">
                <h3>Subscribe to Updates</h3>
                <p>Get notified when new resources are available</p>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Your Email Address" required>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
        </section>
    </main>

    <section class="social-links">
        <div class="container">
            <h3>Connect With Us</h3>
            <div class="social-buttons">
                <a href="https://t.me/wszall22" class="social-button telegram">
                    <i class="fab fa-telegram"></i>
                    <span>Join Telegram</span>
                </a>
                <a href="https://youtube.com/@rexcgod" class="social-button youtube">
                    <i class="fab fa-youtube"></i>
                    <span>YouTube Channel</span>
                </a>
                <a href="https://chat.whatsapp.com/J5iVgYfMbvCK9vT1YpcL8x" class="social-button whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <span>Join Whatsapp</span>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h3>RexCGod</h3>
                    <p>Information Security Blog</p>
                </div>
                <div class="footer-links">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#downloads">Downloads</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 RexCGod. All rights reserved.</p>
                <p class="disclaimer">Content on this blog is for educational purposes only.</p>
            </div>
        </div>
    </footer>
</body>
</html>
