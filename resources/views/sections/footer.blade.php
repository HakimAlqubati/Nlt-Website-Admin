<style>

</style>
<div class="footer-wraps" id="contact">

    <section class="section footer">
        <div class="w-layout-blockcontainer container w-container">
            <div class="footer-wrapper">
                <div id="w-node-_357bbdff-f022-d97d-372f-3a4f52dbcd08-1ea245e2" class="footer-wrap">
                    <a href="#home" aria-current="page" class="w-inline-block w--current">
                        <img src="images/logo/nlt-white-notext.png" loading="lazy"
                            data-w-id="2eade726-4906-62fd-ec06-aecb37b0d062" alt="NLT Logo" class="footer-logo">
                    </a>
                    <p data-w-id="39472867-c1b2-1e92-7935-3a921f8c4160" class="footer-short-text">
                        Next Level Tech (NLT) delivers innovative enterprise software solutions that help companies
                        scale,
                        automate workflows, and achieve customer success — all from one unified digital platform.
                    </p>
                </div>
                <div data-w-id="863e0dbd-a486-b887-26e7-78721ea245e5" class="footer-wrap">
                    <p class="footer-nav-title">Product</p>
                    <div class="footer-item-wrap">
                        <a href="#about" class="footer-menu w-inline-block">
                            <div class="footer-menu-wrap">
                                <div class="footer-menu-text">About</div>
                                <div class="footer-menu-text">About</div>
                                <div class="line-underline"></div>
                            </div>
                        </a>
                        <a href="#features" class="footer-menu w-inline-block">
                            <div class="footer-menu-wrap">
                                <div class="footer-menu-text">Features</div>
                                <div class="footer-menu-text">Features</div>
                                <div class="line-underline"></div>
                            </div>
                        </a>


                    </div>
                </div>
                <div data-w-id="863e0dbd-a486-b887-26e7-78721ea24607" class="footer-wrap">
                    <p class="footer-nav-title"> </p>
                    <div class="footer-item-wrap">

                    </div>
                </div>
                <div data-w-id="863e0dbd-a486-b887-26e7-78721ea24623" class="footer-wrap">
                    <p class="footer-nav-title"> </p>
                    <div class="footer-item-wrap">

                    </div>
                </div>
                <div id="w-node-_863e0dbd-a486-b887-26e7-78721ea2463f-1ea245e2" class="footer-wrap demo-invite">
                    <h4 class="demo-title">Experience the Power of NLT</h4>
                    <p class="demo-subtitle">Discover how our solutions can elevate your business.</p>
                    <button id="open-demo-modal" class="demo-open-btn">Request Your Demo</button>
                </div>

            </div>
            <div data-w-id="863e0dbd-a486-b887-26e7-78721ea24667" class="footer-bottom-wrapper">
                <div data-w-id="863e0dbd-a486-b887-26e7-78721ea24679" class="footer-copy-wrap">
                    <p class="copy-text">
                        © 2025 <a href="#home" aria-current="page" class="link w--current">Next Level Tech
                            (NLT)</a>.
                        All rights reserved. Crafted with innovation and excellence by NLT Team.
                    </p>
                </div>

                <div data-w-id="31116495-67d4-0e05-693a-f3ce6896a361" class="footer-social-wrap">
                    <a href="https://discord.com/" target="_blank"
                        class="socail-single-link footer-socail-link w-inline-block">
                        <div class="socail-icon-block"><img loading="lazy" src="images/Discord-White-Icon.svg"
                                alt="Discord" class="social-icon-2"><img loading="lazy"
                                src="images/Discord-White-Icon.svg" alt="Discord" class="social-icon-2"></div>
                        <div class="socail-icon-bg footer-socail-icon-bg"></div>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank"
                        class="socail-single-link footer-socail-link w-inline-block">
                        <div class="socail-icon-block"><img loading="lazy" src="images/Facebook-White-Icon.svg"
                                alt="Facebook" class="social-icon-2"><img loading="lazy"
                                src="images/Facebook-White-Icon.svg" alt="Facebook" class="social-icon-2"></div>
                        <div class="socail-icon-bg footer-socail-icon-bg"></div>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank"
                        class="socail-single-link footer-socail-link w-inline-block">
                        <div class="socail-icon-block"><img loading="lazy" src="images/Linkedin-White-Icon.svg"
                                alt="LinkedIn" class="social-icon-2"><img loading="lazy"
                                src="images/Linkedin-White-Icon.svg" alt="LinkedIn" class="social-icon-2"></div>
                        <div class="socail-icon-bg footer-socail-icon-bg"></div>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank"
                        class="socail-single-link footer-socail-link w-inline-block">
                        <div class="socail-icon-block"><img loading="lazy" src="images/Instagram-White-Icon.svg"
                                alt="Instagram" class="social-icon-2"><img loading="lazy"
                                src="images/Instagram-White-Icon.svg" alt="Instagram" class="social-icon-2"></div>
                        <div class="socail-icon-bg footer-socail-icon-bg"></div>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="footer-logo-wrap">
            <img src="images/custom/Next-Level-Tech-Logo.svg" loading="lazy"
                data-w-id="413a3482-7e02-8892-f7d5-858cde5e0184" alt="NLT Logo">
        </div> --}}
    </section>
</div>

<!-- المودال -->
<div id="demoModal" class="demo-modal">
    <div class="demo-modal-content">
        <span class="demo-modal-close" id="close-demo-modal">&times;</span>

        <!-- ✅ نموذج الفورم كما هو -->
        <div class="form-block w-form form-block-demo-request">
            <form method="POST" action="{{ route('demo.request.store') }}" class="form-layout" novalidate>
                @csrf
                <h4 class="newsletter-sub-text">See how NLT can work for your business</h4>

                <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                <div class="form-grid">
                    <div class="form-field">
                        <label for="name">Name</label>
                        <input class="w-input" type="text" name="name" id="name" placeholder="Your name"
                            value="{{ old('name') }}" required>
                    </div>

                    <div class="form-field">
                        <label for="email">Work Email</label>
                        <input class="w-input" type="email" name="email" id="email"
                            placeholder="Work email" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-field">
                        <label for="company">Company</label>
                        <input class="w-input" type="text" name="company" id="company" placeholder="Company"
                            value="{{ old('company') }}" required>
                    </div>

                    <div class="form-field">
                        <label for="phone">Phone (optional)</label>
                        <input class="w-input" type="tel" name="phone" id="phone"
                            placeholder="Phone (optional)" value="{{ old('phone') }}">
                    </div>

                    <div class="form-field full-width">
                        <label for="message">What do you want to achieve? (optional)</label>
                        <textarea class="w-input" name="message" id="message" rows="4"
                            placeholder="Tell us more about your needs...">{{ old('message') }}</textarea>
                    </div>

                    <div class="form-field full-width submit-container">
                        <input type="submit" class="email-btn-demo w-button" value="Request Demo">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
