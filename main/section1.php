
<?php
/**
 * VELORA — Part 1 (sections_part1.php)
 * Developer : Tom
 * Sections  : Navbar · Hero · Stats · Categories · Featured · Product of the Week
 *
 * Included by index.php — jangan di-akses langsung.
 */
if (!defined('VELORA_ENTRY')) { http_response_code(403); exit('Direct access forbidden.'); }
?>

<!-- ═══════════════════════════════════════════════════════════
     NAVBAR
════════════════════════════════════════════════════════════ -->
<nav class="nx-navbar" id="navbar">
    <a href="index.php" class="nx-brand">VELORA<span class="dot">.</span></a>
    <ul class="nx-nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="#categories">Categories</a></li>
        <li><a href="#featured">Featured</a></li>
        <li><a href="#journal">Journal</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#about">About</a></li>
    </ul>
    <div class="nx-nav-actions">
        <button class="theme-toggle" title="Toggle theme"><i class="bi bi-moon-fill"></i></button>
        <a href="store/shoppingCart.php" class="nx-icon-btn" title="Cart">
            <i class="bi bi-bag"></i>
            <span class="nx-badge"><?= $cart_count ?></span>
        </a>
        <?php if ($is_logged_in): ?>
            <span style="font-size:13px;color:var(--text-muted);display:flex;align-items:center;gap:6px;">
                <i class="bi bi-person-circle" style="color:var(--primary);"></i>
                <?= $user_name ?>
            </span>
            <a href="index.php?logout=1" class="btn-outline" style="padding:8px 20px;font-size:13px;">Sign Out</a>
        <?php else: ?>
            <a href="auth/login.php"  class="btn-outline" style="padding:8px 20px;font-size:13px;">Sign In</a>
            <a href="auth/signUp.php" class="btn-primary" style="padding:8px 20px;font-size:13px;">Get Started</a>
        <?php endif; ?>
    </div>
    <button class="nx-hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
    </button>
</nav>
<div class="nx-mobile-menu" id="mobileMenu">
    <a href="index.php">Home</a>
    <a href="#categories">Categories</a>
    <a href="#featured">Featured</a>
    <a href="#journal">Journal</a>
    <a href="store/shoppingCart.php">Cart</a>
    <a href="auth/login.php">Sign In</a>
    <a href="auth/signUp.php" style="color:var(--primary);font-weight:700;">Get Started →</a>
</div>

<!-- ═══════════════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════════════ -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-orb hero-orb-a"></div>
    <div class="hero-orb hero-orb-b"></div>
    <div class="nx-container">
        <div class="hero-inner">
            <div class="hero-tag reveal"><i class="bi bi-stars"></i> VELORA Vol. 01 — Now Live</div>
            <h1 class="hero-title reveal delay-1">
                Where <em>design</em><br>meets desire.
            </h1>
            <p class="hero-sub reveal delay-2">
                A curated marketplace of premium products and specialist services — handpicked for those who demand more than ordinary.
            </p>
            <div class="hero-search reveal delay-3">
                <i class="bi bi-search" style="color:var(--text-soft);font-size:1rem;margin-right:4px;"></i>
                <input type="text" placeholder="Search products, services, specialists…" id="heroSearch">
                <a href="store/shoppingCart.php" class="btn-primary" style="padding:10px 22px;">Explore</a>
            </div>
            <div class="hero-cta-row reveal delay-4">
                <a href="auth/signUp.php" class="btn-outline">Create Free Account</a>
                <span class="hero-trust"><i class="bi bi-shield-check" style="color:var(--success)"></i> No credit card required</span>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     STATS BAR
════════════════════════════════════════════════════════════ -->
<section class="stats-bar">
    <div class="nx-container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-num" data-count="12400" data-suffix="+">0</div>
                <div class="stat-label">Products Listed</div>
            </div>
            <div class="stat-item">
                <div class="stat-num" data-count="3800" data-suffix="+">0</div>
                <div class="stat-label">Happy Customers</div>
            </div>
            <div class="stat-item">
                <div class="stat-num" data-count="98" data-suffix="%">0</div>
                <div class="stat-label">Satisfaction Rate</div>
            </div>
            <div class="stat-item">
                <div class="stat-num" data-count="24" data-suffix="/7">0</div>
                <div class="stat-label">Expert Support</div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     CATEGORIES
════════════════════════════════════════════════════════════ -->
<section class="nx-section" id="categories" style="position:relative;">
    <div class="nx-container">
        <div class="reveal">
            <span class="section-eyebrow">Browse</span>
            <h2 class="serif" style="font-size:2.4rem;margin-bottom:8px;">Curated Categories</h2>
            <p style="color:var(--text-muted);margin-bottom:40px;">Hand-picked selection of premium physical goods and digital expertise.</p>
        </div>
        <div class="cat-grid reveal delay-1">
            <div class="cat-card">
                <img class="cat-card-bg" src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=700&q=80" alt="Living &amp; Home">
                <div class="cat-card-overlay"></div>
                <div class="cat-card-label">
                    <h3>Living &amp; Home</h3>
                    <span>Elevated environments</span>
                </div>
            </div>
            <div class="cat-card">
                <img class="cat-card-bg" src="https://images.unsplash.com/photo-1498049794561-7780e7231661?w=500&q=80" alt="Tech">
                <div class="cat-card-overlay"></div>
                <div class="cat-card-label"><h3>Tech</h3><span>Precision gear</span></div>
            </div>
            <div class="cat-card">
                <img class="cat-card-bg" src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?w=500&q=80" alt="Wellness">
                <div class="cat-card-overlay"></div>
                <div class="cat-card-label"><h3>Wellness</h3><span>Body &amp; mind</span></div>
            </div>
            <div class="cat-card">
                <img class="cat-card-bg" src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=700&q=80" alt="Fashion">
                <div class="cat-card-overlay"></div>
                <div class="cat-card-label"><h3>Fashion</h3><span>Timeless style</span></div>
            </div>
            <div class="cat-card">
                <img class="cat-card-bg" src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=700&q=80" alt="Design">
                <div class="cat-card-overlay"></div>
                <div class="cat-card-label"><h3>Design</h3><span>Conceptual excellence</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     FEATURED
════════════════════════════════════════════════════════════ -->
<section class="nx-section" id="featured" style="background:var(--surface);position:relative;">
    <div class="nx-container">
        <div class="featured-grid">
            <div class="featured-img-wrap reveal left">
                <div class="featured-img" style="padding:0;">
                    <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?w=600&q=80"
                         alt="Visual Storytelling Masterclass"
                         style="width:100%;height:100%;object-fit:cover;border-radius:var(--radius-lg);">
                </div>
            </div>
            <div class="reveal right">
                <span class="featured-tag">Featured Exhibit</span>
                <h2 class="serif featured-title">Visual Storytelling Masterclass</h2>
                <div class="featured-meta">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--primary-light);display:flex;align-items:center;justify-content:center;font-size:1.1rem;">👤</div>
                    <span><strong>Julian Voss</strong> — Director of Photography</span>
                </div>
                <p style="color:var(--text-muted);font-style:italic;line-height:1.75;margin-bottom:16px;">"True visual storytelling is the ability to see the soul of a subject before you ever press the shutter."</p>
                <ul class="check-list">
                    <li>4-week immersive digital curriculum</li>
                    <li>1-on-1 portfolio review with industry leaders</li>
                    <li>Lifetime access to session recordings</li>
                </ul>
                <div class="featured-price">$299<span style="font-size:1rem;color:var(--text-muted);font-weight:400;">/session</span></div>
                <div style="display:flex;gap:12px;">
                    <a href="store/shoppingCart.php" class="btn-primary"><i class="bi bi-bag-plus"></i> Reserve Seat</a>
                    <a href="#" class="btn-ghost">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     PRODUCT OF THE WEEK
════════════════════════════════════════════════════════════ -->
<section class="nx-section" id="potw" style="position:relative;">
    <div class="nx-container">
        <div class="reveal" style="margin-bottom:36px;">
            <span class="section-eyebrow">Weekly Pick</span>
            <h2 class="serif" style="font-size:2.4rem;">Product of the Week</h2>
        </div>
        <div class="potw-wrap reveal delay-1">
            <div class="potw-img" style="padding:0;overflow:hidden;">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&q=80"
                     alt="Acoustic Prism Headphones"
                     style="width:100%;height:100%;object-fit:cover;">
            </div>
            <div>
                <span class="potw-badge">⭐ Limited Edition</span>
                <h3 class="serif potw-title">The Acoustic Prism v.02</h3>
                <p style="color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Engineered for those who hear the nuances in silence. Featuring a custom titanium driver and carbon fiber housing for the discerning audiophile.</p>
                <div class="potw-avail"><i class="bi bi-check-circle-fill"></i> 12 Units Left — Ships in 2 days</div>
                <div style="font-size:2.2rem;font-weight:700;color:var(--primary);margin-bottom:20px;">$1,450<span style="font-size:1rem;font-weight:400;color:var(--text-muted);">.00</span></div>
                <div style="display:flex;gap:12px;">
                    <a href="store/shoppingCart.php" class="btn-primary" style="flex:1;justify-content:center;"><i class="bi bi-bag"></i> Acquire Now</a>
                    <a href="#" class="btn-ghost">Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
