<?php
include 'header.php';
?>
<main class="team">
    <div class="content">
        <?php
        include 'left-block.php';
        ?>
        <style>
            .profile-card {
                min-width: 200px;
                max-width: 400px;
                min-height: 200px;
                max-height: 400px;
                background-color: green;
                border-radius: 5px;
                padding: 10px;
                display: flex;
                justify-content: space-around;
                align-self: center;
                align-content: center;
                align-items: center;
                flex-direction: row;
                flex-wrap: nowrap;
            }

            .profile-pic {
                width: 130px;
                height: 130px;
                border-radius: 50%;
                background-color: white;
            }

            .profile-pic img {
                width: 130px;
                height: 130px;
                border-radius: 50%;

            }

            .information .name {
                color: white;
                font-size: 18px;
                font-weight: bold;
            }

            .information
            .position,
            .mobile,
            .email {
                color: white;
                font-size: 14px;
            }
            .information .email{
                font-style: italic;
            }
        </style>
        <div class="right">
            <div class="card">
                <div class="heading">Office of the Dean Student Welfare</div>
                <div class="card-contant">
                    <div class="profile-card">
                        <div class="profile-pic"><img src="assets\logo\sac\sac_logo.jpg" alt=""></div>
                        <div class="information">
                            <div class="name">Akshansh</div>
                            <div class="position">Akshansh</div>
                            <div class="mobile">7458963210</div>
                            <div class="email">akshansh@kajsaksjaajsgla.ac.in</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
include 'footer.php'; ?>