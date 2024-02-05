@include ('layouts.head');
<link rel="stylesheet" href="css/main.css">
<!-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> -->



<menu>
    @include ('layouts.menu');
</menu>

<!--==================== ABOUT ====================-->
<section class="about section" id="about">
    <h2 class="section__title">About Me</h2>
    <span class="section__subtitle text-dark">Introduction</span>

    <div class="about__container container grid">
        <img src="/packages/images/a.jpg" alt="My Pic" class="about__img img-fluid rounded-circle">
        <div class="about__data">
            <p class="about__description text-dark">
                Passionate Web Developer skilled in HTML, CSS, and JavaScript. Experienced in creating visually
                appealing websites and proficient in WordPress customization. Strong communication and collaboration
                skills, committed to exceeding expectations and contributing to team success. Eager to learn and grow.
            </p>
            <div class="about__info">
                <div>
                    <span class="about__info-title">02+</span>
                    <span class="about__info-name">Years <br> experience</span>
                </div>
                <div>
                    <span class="about__info-title">05+</span>
                    <span class="about__info-name">Completed <br> certifications</span>
                </div>
            </div>

            <div class="about__buttons mt-3">
                <a download="" href="/packages/pdf/Adum Maker Awan CV.pdf" class="btn btn-primary">
                    Download CV<i class="uil uil-download-alt ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@include ('layouts.footer');

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

