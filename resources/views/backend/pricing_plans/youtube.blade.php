<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewTube</title>
{{--    <link rel="stylesheet" href="style.css">--}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            background-color: #f9fafb;
            color: #111827;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 56px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
            z-index: 50;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            color: #dc2626;
        }

        .logo span {
            font-size: 20px;
            font-weight: 600;
        }

        .search-container {
            flex: 1;
            max-width: 672px;
            margin: 0 16px;
        }

        .search-box {
            display: flex;
            width: 100%;
        }

        .search-box input {
            flex: 1;
            padding: 8px 16px;
            border: 1px solid #e5e7eb;
            border-right: none;
            border-radius: 9999px 0 0 9999px;
            outline: none;
            font-size: 16px;
        }

        .search-box input:focus {
            border-color: #3b82f6;
        }

        .search-btn {
            padding: 8px 24px;
            background-color: #f3f4f6;
            border: 1px solid #e5e7eb;
            border-left: none;
            border-radius: 0 9999px 9999px 0;
            cursor: pointer;
        }

        .search-btn:hover {
            background-color: #e5e7eb;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .icon-btn {
            padding: 8px;
            background: none;
            border: none;
            border-radius: 9999px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-btn:hover {
            background-color: #f3f4f6;
        }

        .icon-btn i {
            width: 24px;
            height: 24px;
        }

        /* Container */
        .container {
            display: flex;
            margin-top: 56px;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 56px;
            width: 256px;
            height: calc(100vh - 56px);
            background-color: white;
            overflow-y: auto;
        }

        .sidebar-items {
            padding: 8px;
        }

        .sidebar-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 12px;
            text-decoration: none;
            color: #111827;
            border-radius: 8px;
        }

        .sidebar-item:hover {
            background-color: #f3f4f6;
        }

        .sidebar-item.active {
            background-color: #f3f4f6;
            font-weight: 500;
        }

        .sidebar-item i {
            width: 24px;
            height: 24px;
        }

        /* Content */
        .content {
            flex: 1;
            margin-left: 256px;
            padding: 16px;
        }

        /* Video Grid */
        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 16px;
        }

        /* Video Card */
        .video-card {
            cursor: pointer;
        }

        .thumbnail {
            position: relative;
            aspect-ratio: 16 / 9;
            border-radius: 12px;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .duration {
            position: absolute;
            bottom: 4px;
            right: 4px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            font-size: 14px;
            padding: 0 4px;
            border-radius: 4px;
        }

        .video-info {
            display: flex;
            gap: 12px;
            margin-top: 12px;
        }

        .channel-avatar {
            width: 36px;
            height: 36px;
            border-radius: 9999px;
        }

        .video-details h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 4px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .channel-name {
            font-size: 14px;
            color: #4b5563;
            margin-bottom: 2px;
        }

        .video-stats {
            font-size: 14px;
            color: #4b5563;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .video-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .content {
                margin-left: 0;
            }

            .video-grid {
                grid-template-columns: 1fr;
            }

            .search-container {
                display: none;
            }
        }
    </style>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
<nav class="navbar">
    <div class="nav-left">
        <button class="icon-btn">
            <i data-lucide="menu"></i>
        </button>
        <div class="logo">
            <i data-lucide="video" class="logo-icon"></i>
            <span>ViewTube</span>
        </div>
    </div>

    <div class="search-container">
        <div class="search-box">
            <input type="text" placeholder="Search">
            <button class="search-btn">
                <i data-lucide="search"></i>
            </button>
        </div>
    </div>

    <div class="nav-right">
        <button class="icon-btn">
            <i data-lucide="video"></i>
        </button>
        <button class="icon-btn">
            <i data-lucide="bell"></i>
        </button>
        <button class="icon-btn">
            <i data-lucide="user"></i>
        </button>
    </div>
</nav>

<div class="container">
    <aside class="sidebar">
        <div class="sidebar-items">
            <a href="#" class="sidebar-item active">
                <i data-lucide="home"></i>
                <span>Home</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="flame"></i>
                <span>Trending</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="compass"></i>
                <span>Explore</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="play-square"></i>
                <span>Subscriptions</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="clock"></i>
                <span>History</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="thumbs-up"></i>
                <span>Liked Videos</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="film"></i>
                <span>Movies</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="gamepad-2"></i>
                <span>Gaming</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="newspaper"></i>
                <span>News</span>
            </a>
            <a href="#" class="sidebar-item">
                <i data-lucide="trophy"></i>
                <span>Sports</span>
            </a>
        </div>
    </aside>

    <main class="content">
        <div class="video-grid">
            <div class="video-card">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee" alt="Video thumbnail">
                    <span class="duration">15:30</span>
                </div>
                <div class="video-info">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde" alt="Channel avatar" class="channel-avatar">
                    <div class="video-details">
                        <h3>Building a Modern Web Application</h3>
                        <p class="channel-name">Tech Academy</p>
                        <p class="video-stats">250,000 views • 2 weeks ago</p>
                    </div>
                </div>
            </div>

            <div class="video-card">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05" alt="Video thumbnail">
                    <span class="duration">42:15</span>
                </div>
                <div class="video-info">
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12" alt="Channel avatar" class="channel-avatar">
                    <div class="video-details">
                        <h3>Amazing Nature Documentary 2024</h3>
                        <p class="channel-name">Nature Channel</p>
                        <p class="video-stats">1,200,000 views • 1 month ago</p>
                    </div>
                </div>
            </div>

            <div class="video-card">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d" alt="Video thumbnail">
                    <span class="duration">25:45</span>
                </div>
                <div class="video-info">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Channel avatar" class="channel-avatar">
                    <div class="video-details">
                        <h3>Professional Cooking Tips</h3>
                        <p class="channel-name">Cooking Master</p>
                        <p class="video-stats">750,000 views • 3 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Initialize Lucide icons
    lucide.createIcons();
</script>
</body>
</html>