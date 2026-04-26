<?php
/**
 * VELORA — Part 2 (section2.php)
 * Developer : [Nama Teman] — isi bagian Journal, Team, About (Footer)
 * Sections  : Journal · Team · About / Footer
 *
 * Included by index.php — jangan di-akses langsung.
 */
if (!defined('VELORA_ENTRY')) { http_response_code(403); exit('Direct access forbidden.'); }
?>

<!-- ═══════════════════════════════════════════════════════════
     JOURNAL
════════════════════════════════════════════════════════════ -->
<section class="nx-section" id="journal" style="background:var(--surface);position:relative;">
    <div class="nx-container">
        <div class="reveal" style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:36px;flex-wrap:wrap;gap:16px;">
            <div>
                <span class="section-eyebrow">Journal</span>
                <h2 class="serif" style="font-size:2.4rem;">From the Editorial</h2>
            </div>
            <a href="#" class="btn-ghost" style="padding:8px 20px;font-size:13px;">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="journal-grid">
            <div class="journal-card reveal delay-1">
                <div class="journal-thumb" style="padding:0;">
                    <img src="https://images.unsplash.com/photo-1484788984921-03950022c9ef?w=500&q=80"
                         alt="Minimalist Spaces" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="journal-body">
                    <div class="journal-cat">Editorial</div>
                    <div class="journal-title">The Psychology of Minimalist Spaces</div>
                </div>
            </div>
            <div class="journal-card reveal delay-2">
                <div class="journal-thumb" style="padding:0;">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=500&q=80"
                         alt="Analog Mechanics" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="journal-body">
                    <div class="journal-cat">Industry</div>
                    <div class="journal-title">Future of Analog Mechanics in a Digital Age</div>
                </div>
            </div>
            <div class="journal-card reveal delay-3">
                <div class="journal-thumb" style="padding:0;">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=500&q=80"
                         alt="Mental Clarity" style="width:100%;height:100%;object-fit:cover;">
                </div>
                <div class="journal-body">
                    <div class="journal-cat">Wellness</div>
                    <div class="journal-title">Designing for Mental Clarity: A New Approach</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     TEAM
════════════════════════════════════════════════════════════ -->
<section class="team-section" id="team">
    <div class="team-blob team-blob-1"></div>
    <div class="team-blob team-blob-2"></div>
    <div class="nx-container">
        <div class="team-header">
            <div class="section-eyebrow reveal">The Builders</div>
            <h2 class="reveal delay-1">Meet the minds behind <em style="font-style:italic;">VELORA</em></h2>
            <p class="reveal delay-2">A passionate team of student creators who designed and built VELORA as a premium curated marketplace experience.</p>
        </div>
        <div class="team-grid">

            <!-- Card 01 — Tom -->
            <div class="team-card-wrap reveal">
                <div class="team-card">
                    <div class="team-card-num">01</div>
                    <div class="tc-icon-badge"><i class="bi bi-window-fullscreen"></i></div>
                    <div class="team-photo-area">
                        <div class="t-ring t-ring-1"></div>
                        <div class="t-ring t-ring-2"></div>
                        <div class="t-ring t-ring-3"></div>
                        <img class="team-avatar" src="assets/css/image/tom.jpeg" alt="Tom" loading="lazy">
                    </div>
                    <div class="team-card-body">
                        <div class="team-name">Tom</div>
                        <div class="team-role">Landing Page</div>
                        <div class="team-desc">Designed and built the VELORA landing experience — from the hero section all the way to the journal.</div>
                        <div class="team-links">
                            <a href="#" title="GitHub"><i class="bi bi-github"></i></a>
                            <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 02 — Felysia -->
            <div class="team-card-wrap reveal delay-1">
                <div class="team-card">
                    <div class="team-card-num">02</div>
                    <div class="tc-icon-badge"><i class="bi bi-shield-lock-fill"></i></div>
                    <div class="team-photo-area">
                        <div class="t-ring t-ring-1"></div>
                        <div class="t-ring t-ring-2"></div>
                        <div class="t-ring t-ring-3"></div>
                        <img class="team-avatar" src="assets/css/image/felysia.jpeg" alt="Felysia" loading="lazy">
                    </div>
                    <div class="team-card-body">
                        <div class="team-name">Felysia</div>
                        <div class="team-role">Authentication</div>
                        <div class="team-desc">Crafted the sign in and register flows with secure PHP session handling and validation.</div>
                        <div class="team-links">
                            <a href="#" title="GitHub"><i class="bi bi-github"></i></a>
                            <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 03 — Jodi -->
            <div class="team-card-wrap reveal delay-2">
                <div class="team-card">
                    <div class="team-card-num">03</div>
                    <div class="tc-icon-badge"><i class="bi bi-bag-heart-fill"></i></div>
                    <div class="team-photo-area">
                        <div class="t-ring t-ring-1"></div>
                        <div class="t-ring t-ring-2"></div>
                        <div class="t-ring t-ring-3"></div>
                        <img class="team-avatar" src="assets/css/image/jodi.jpeg" alt="Jodi" loading="lazy">
                    </div>
                    <div class="team-card-body">
                        <div class="team-name">Jodi</div>
                        <div class="team-role">Store &amp; Checkout</div>
                        <div class="team-desc">Built the shopping cart and checkout with a seamless and intuitive payment experience.</div>
                        <div class="team-links">
                            <a href="#" title="GitHub"><i class="bi bi-github"></i></a>
                            <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 04 — Bagus -->
            <div class="team-card-wrap reveal delay-3">
                <div class="team-card">
                    <div class="team-card-num">04</div>
                    <div class="tc-icon-badge"><i class="bi bi-palette-fill"></i></div>
                    <div class="team-photo-area">
                        <div class="t-ring t-ring-1"></div>
                        <div class="t-ring t-ring-2"></div>
                        <div class="t-ring t-ring-3"></div>
                        <img class="team-avatar" src="assets/css/image/bagus.jpeg" alt="Bagus" loading="lazy">
                    </div>
                    <div class="team-card-body">
                        <div class="team-name">Bagus</div>
                        <div class="team-role">Design &amp; Vision</div>
                        <div class="team-desc">Shaped the overall design vision and ensured a premium user experience throughout VELORA.</div>
                        <div class="team-links">
                            <a href="#" title="GitHub"><i class="bi bi-github"></i></a>
                            <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.team-grid -->
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     FOOTER / ABOUT
════════════════════════════════════════════════════════════ -->
<footer class="nx-footer" id="about">
    <div class="nx-container">
        <div class="nx-footer-grid">
            <div class="nx-footer-brand">
                <div class="nx-brand" style="font-size:1.6rem;">VELORA<span class="dot">.</span></div>
                <p>A curated marketplace bridging the gap between premium products and specialized human expertise. Crafted with care by our team.</p>
                <div class="nx-footer-newsletter" style="margin-top:20px;">
                    <input type="email" placeholder="Enter your email…" id="newsletterEmail">
                    <button onclick="window.showToast('Subscribed! Welcome to VELORA.','success')">Subscribe</button>
                </div>
            </div>
            <div>
                <h5>Explore</h5>
                <ul>
                    <li><a href="#categories">Categories</a></li>
                    <li><a href="#featured">Featured Exhibit</a></li>
                    <li><a href="#potw">Product of Week</a></li>
                    <li><a href="#journal">Journal</a></li>
                </ul>
            </div>
            <div>
                <h5>Account</h5>
                <ul>
                    <li><a href="auth/login.php">Sign In</a></li>
                    <li><a href="auth/signUp.php">Create Account</a></li>
                    <li><a href="store/shoppingCart.php">Shopping Cart</a></li>
                    <li><a href="store/checkOut.php">Checkout</a></li>
                </ul>
            </div>
            <div>
                <h5>Company</h5>
                <ul>
                    <li><a href="#">About VELORA</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="nx-footer-bottom">
            <p>&copy; <?= $current_year ?> VELORA Marketplace. All rights reserved.</p>
            <div class="nx-social">
                <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" title="Twitter/X"><i class="bi bi-twitter-x"></i></a>
                <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
    </div>
</footer>
