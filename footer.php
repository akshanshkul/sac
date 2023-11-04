<style>
    /* footer css */
    .footer {
        background: var(--green);
        padding: 10px;
    }

    .box-container {
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: (minmax(160px, 1fr)) [auto-fit];
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 12px;
    }

    .footer .box-container .box p {
        font-size: 16px;
        line-height: 2;
        padding: 2px 0;
    }

    p {
        margin-top: 0;
        margin-bottom: 5px;
    }

    .footer .box-container .box .share {
        margin-top: 2px;
    }

    .footer .box-container .box .share a {
        height: 50px;
        width: 50px;
        line-height: 50px;
        font-size: 24px;
        background-color: var(--white);
        color: var(--sub-main-color);
        margin-right: 5px;
        text-align: center;
        text-decoration: none;
        border: none;
        border-radius: 5px;
    }

    .footer .box-container .box .share a:hover {
        font-size: 32px;
        color: var(--sub-main-color);
        margin-right: 5px;
        text-align: center;
        text-decoration: none;
        border: none;
        border-radius: 50px;
        box-shadow: 0 2px 2px 2px var(--white);
    }

    .footer .box-container .box .box-text {
        font-size: 24px;
        text-transform: capitalize;
        color: white;
        padding: 5px 0;
        font-weight: 300;
    }

    .footer .box-container .box .link {
        width: fit-content;

        font-size: 14px;
        line-height: 2;
        color: white;
        padding: 4px 0;
        display: block;
        text-decoration: none;
        text-transform: capitalize;
    }

    .footer .box-container .box .link:hover {
        border-bottom: 2px solid white;
    }

    .footer .box-container .box .email {
        width: 90%;

        padding: 10px 8px;
        font-size: 20px;
        border: none;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    textarea:focus,
    input:focus {
        outline: none;
    }

    .footer .box-container .box .email:active {
        outline: none;
    }

    .btn-newsletter {
        display: inline-block;
        margin-top: 5px;
        padding: 10px 8px;
        font-size: 16px;
        background: #f0fdfa;
        color: var(--sub-main-color);
        cursor: pointer;
        text-transform: capitalize;
        border: none;
        border-radius: 10px;
    }

    .btn-newsletter:hover {
        transform: scale(1.2);
        color: var(--green);
    }

    .footer .credit {
        text-align: center;
        margin-top: 24px;
        padding-top: 15px;
        padding-bottom: 15px;
        font-size: 16px;
        text-transform: capitalize;
        border-top: 1px solid var(--white);
    }

    .footer .credit a {
        text-transform: capitalize;
        color: white;
        text-decoration: none;

    }

    .team-section h1 {
        margin: 30px 0px;
        text-align: center;

    }

    .fa-users:before {
        content: "\f0c0";
        color: #ffa400;
        margin: 5px;
    }

    .team-section {
        margin: 40px;
    }

    .past-event-info i {
        color: var(--green);
        margin-right: 5px;
    }
</style>
<section class="footer" style="position: relative;
    bottom: 0;">
    <div class="box-container">
        <div class="box">
            <img src="assets/logo/sac/sac_logo-bg.png" height="65px">
            <p>
                Move through the door of success.
            </p>
            <div class="share">
                <a href="akshansh" class="fab fa-facebook-f"></a>
                <!-- <a href="juk" class="fab fa-twitter"></a> -->
                <a href="ku" class="fab fa-instagram"></a>
                <a href="ki" class="fab fa-linkedin"></a>

            </div>
        </div>
        <div class="box">
            <h3 class="box-text">quick links</h3>
            <a href="index.php" class="link">home</a>
            <a href="about.php" class="link">about</a>
            <a href="course.php" class="link">courses</a>
            <a href="contact.php" class="link">contact</a>
        </div>
        <div class="box">
            <h3 class="box-text">useful links</h3>
            <a href="https://www.signingtech.in/" class="link">help center</a>
            <a href="adminLogin.php" class="link">admin login</a>
            <a href="feedback.php" class="link">send feedback</a>
            <a href="privacy-pilicy.php" class="link">private policy</a>
        </div>
        <style>
            svg {
                width: 50px;
                float: left;
                margin-right: 50px;
            }
        </style>
        <div class="box">
            <h3 class="box-text">newsletter</h3>
            <p>subscribe for latest upadates</p>
            <form id="newsletterForm" method="post">
                <input type="email" name="email" placeholder="enter your email" id="news_email" class="email"
                    required=""><br>
                <input type="submit" value="subscribe" class="btn-newsletter">
            </form>
        </div>
    </div>
    <div class="credit">
        created by <span><a href="https://www.signingtech.in/" class="link">Signing Tech Services</a> </span> | all
        rights reserved!
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="assets/js/main.js"></script>

<!--=============== STATIC FILES SWIPPER JS  ===============-->

<script src="static/swiper/package/swiper-bundle.min.js"></script>
<script src="static/js/swiper.js"></script>
<script src="static/js/index.js"></script>
</body>

</html>