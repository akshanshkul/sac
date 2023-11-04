<?php
include 'header.php';
?>
<main>
    <!--=============== MAIN PAGE SLIDER ===============-->

    <section class="slider-container reveal">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/images/slider/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="assets/images/slider/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="assets/images/slider/3.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="assets/images/slider/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="assets/images/slider/1.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="assets/images/slider/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="assets/images/slider/3.jpeg" alt=""></div>
                <div class="swiper-slide"><img src="assets/images/slider/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="assets/images/slider/1.jpeg" alt="">9</div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <div class="autoplay-progress">
                <svg viewBox="0 0 48 48">
                </svg>
                <span></span>
            </div>
        </div>
    </section>
    <div class="title reveal">
        <h1>Student's Walfare Dean</h1>
    </div>


    <style>
        .team-heading {
            text-align: center;
        }

        .team-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .team-member {
            text-align: center;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.21);
            transition: transform 0.3s ease-in-out;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .team-member h3 {
            font-weight: 700;
            margin: 0;
        }

        .team-member .role {
            color: #888;
            margin-bottom: 10px;
        }

        .fa {
            font-size: 24px;
            margin: 0 10px;
            color: #000;
            transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
            text-decoration: none;
        }

        .team-member:hover .fa {
            transform: scale(1.2);
            color: #007AFF;
        }
    </style>
    <h1 class="team-heading">Our Team</h1>

    <div class="team-section">
        <div class="team-member">
            <img src="https://cutt.ly/Hwn6Y0NL" alt="Team Member 1">
            <h3>Abhay Gupta</h3>
            <p class="role">Designer</p>

        </div>
        <div class="team-member">
            <img src="https://cutt.ly/Hwn6Y0NL" alt="Team Member 2">
            <h3>Abhay Gupta</h3>
            <p class="role">Developer</p>

        </div>
        <div class="team-member">
            <img src="https://cutt.ly/Hwn6Y0NL" alt="Team Member 3">
            <h3>Abhay Gupta</h3>
            <p class="role">Developer</p>

        </div>
    </div>
    <style>
        .gallery-box {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .gallery {
            position: relative;
            width: min(85vmin, 550px);
        }

        .gallery img {
            width: 100%;
            height: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
        }

        .gallery-hero {
            aspect-ratio: 3/2;
        }

        .fadeIn {
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0.6;
            }

            90% {
                opacity: 1;
            }
        }

        .btns {
            list-style-type: none;
            display: flex;
            gap: 0.25rem;
        }

        .btns li {
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .btns li:hover {
            opacity: 0.8;
        }
    </style>
    <div class="gallery-box">
        <div class='gallery'>
            <div class='gallery-hero'>
                <img src='https://picsum.photos/id/22/800/500'>
            </div>
            <ul class='btns'>
                <li class="image-list"><img src='https://picsum.photos/id/22/800/500'></li>
                <li class="image-list"><img src='https://picsum.photos/id/38/800/500'></li>
                <li class="image-list"><img src='https://picsum.photos/id/101/800/500'></li>
                <li class="image-list"><img src='https://picsum.photos/id/182/800/500'></li>
                <li class="image-list"><img src='https://picsum.photos/id/494/800/500'></li>
            </ul>
        </div>
    </div>
    <script>
        const image = document.querySelector('.gallery-hero img');

        const reset = () => image.classList.remove('fadeIn');

        function activate(e) {
            if (!e.target.matches('.btns img')) return;
            image.src = e.target.src;
            image.classList.add('fadeIn');
        }

        document.addEventListener('click', activate, false);
        document.addEventListener('animationend', reset, false);
    </script>
</main>
<?php
include 'footer.php';
?>
<!--=============== JQUERY CDN ===============-->