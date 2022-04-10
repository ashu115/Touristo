<?php
// session_start();
include "php/connection.php";
if(isset($_SESSION['uname'])){
$query = " SELECT * FROM contactus WHERE reply != '' AND status = 'unseen' AND email = '$_SESSION[email]'";
$bhag = mysqli_query($conn, $query);
$count = mysqli_num_rows($bhag);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    <link rel="stylesheet" href="./css/home_nav.css">
    <script src="./js/jquery.min.js"></script>
</head>

<body>
    <section class="page1">
        <!--nav bar code starts here-->
        <div class="nav-container">
            <nav class="navbar">
                <!-- Burger menu -->
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <!--nav bar code starts here-->
                <a href="main.php">
                    <svg class="logo-svg" width="202" height="75" viewBox="0 0 202 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="logo">
                            <path id="logo-text" class="logo-text" d="M34.4688 14.125C33.8021 15.125 33.0104 16.0625 32.0938 16.9375C31.1771 17.8125 30.1667 18.5833 29.0625 19.25C27.9792 19.9167 26.8333 20.4479 25.625 20.8438C24.4167 21.2188 23.2083 21.4062 22 21.4062L21.2812 21.4688C20.4896 22.4688 19.8854 23.4375 19.4688 24.375C19.0521 25.3125 18.8438 26.4167 18.8438 27.6875V47.6562C18.8438 50.4271 18.25 52.8958 17.0625 55.0625C15.8958 57.2083 14.1667 59.0625 11.875 60.625L10.8438 59.4375C11.1979 59.0417 11.4792 58.5938 11.6875 58.0938C11.8958 57.5729 12.0521 57.0417 12.1562 56.5C12.2604 55.9583 12.3229 55.4167 12.3438 54.875C12.3854 54.3125 12.4062 53.7812 12.4062 53.2812V31.3125C12.4062 30.3333 12.6042 29.3854 13 28.4688C13.4167 27.5312 13.9375 26.6458 14.5625 25.8125C15.1875 24.9792 15.875 24.1979 16.625 23.4688C17.3958 22.7396 18.1354 22.0729 18.8438 21.4688L8.5 21.4062C7.70833 21.4062 7 21.4896 6.375 21.6562C5.77083 21.8021 5.20833 22.0208 4.6875 22.3125C4.16667 22.6042 3.66667 22.9688 3.1875 23.4062C2.70833 23.8438 2.21875 24.3542 1.71875 24.9375L0.8125 23.9688C1.5 23.0312 2.27083 22.0417 3.125 21C4 19.9583 4.9375 19.0104 5.9375 18.1562C6.95833 17.3021 8.04167 16.5938 9.1875 16.0312C10.3542 15.4688 11.5729 15.1875 12.8438 15.1875H26.3438C26.8854 15.1875 27.4896 15.1562 28.1562 15.0938C28.8438 15.0312 29.5312 14.9271 30.2188 14.7812C30.9062 14.6354 31.5521 14.4479 32.1562 14.2188C32.7812 13.9688 33.3021 13.6562 33.7188 13.2812L34.4688 14.125ZM98.5312 55.7188C98.2188 56.3229 97.8229 56.9062 97.3438 57.4688C96.8854 58.0312 96.3542 58.5312 95.75 58.9688C95.1667 59.3854 94.5417 59.7292 93.875 60C93.2083 60.25 92.5208 60.375 91.8125 60.375C90.6667 60.375 89.6562 60.1562 88.7812 59.7188C87.9062 59.2812 87.1771 58.6979 86.5938 57.9688C86.0104 57.2188 85.5729 56.3646 85.2812 55.4062C84.9896 54.4479 84.8438 53.4375 84.8438 52.375V48.6875C84.4271 50.2292 83.875 51.7188 83.1875 53.1562C82.5 54.5729 81.6458 55.8438 80.625 56.9688C79.6042 58.0729 78.4062 58.9583 77.0312 59.625C75.6771 60.2917 74.125 60.625 72.375 60.625C71.0417 60.625 69.8958 60.3854 68.9375 59.9062C67.9792 59.4062 67.1875 58.7396 66.5625 57.9062C65.9375 57.0729 65.4792 56.1146 65.1875 55.0312C64.8958 53.9271 64.75 52.7708 64.75 51.5625V17.0625L71.2188 14.75V49.25C71.2188 50 71.2292 50.8333 71.25 51.75C71.2708 52.6667 71.3958 53.5208 71.625 54.3125C71.8542 55.1042 72.25 55.7708 72.8125 56.3125C73.375 56.8542 74.1875 57.125 75.25 57.125C76.4375 57.125 77.4896 56.7708 78.4062 56.0625C79.3438 55.3333 80.1667 54.3958 80.875 53.25C81.6042 52.0833 82.2188 50.7708 82.7188 49.3125C83.2188 47.8542 83.625 46.4062 83.9375 44.9688C84.25 43.5104 84.4792 42.125 84.625 40.8125C84.7708 39.4792 84.8438 38.3646 84.8438 37.4688V17.0625L91.3125 14.75V53.4062C91.3125 53.8229 91.3542 54.2396 91.4375 54.6562C91.5208 55.0729 91.6667 55.4479 91.875 55.7812C92.0833 56.0938 92.3542 56.3542 92.6875 56.5625C93.0208 56.7708 93.4375 56.875 93.9375 56.875C94.6458 56.875 95.3125 56.6667 95.9375 56.25C96.5833 55.8333 97.1146 55.3542 97.5312 54.8125L98.5312 55.7188ZM117.594 56.5938C117.219 57.1771 116.76 57.7083 116.219 58.1875C115.677 58.6458 115.083 59.0417 114.438 59.375C113.792 59.7083 113.115 59.9688 112.406 60.1562C111.698 60.3438 111 60.4375 110.312 60.4375C109.396 60.4375 108.604 60.2708 107.938 59.9375C107.292 59.5833 106.76 59.125 106.344 58.5625C105.927 58 105.615 57.3438 105.406 56.5938C105.219 55.8438 105.125 55.0625 105.125 54.25C105.125 53.1875 105.281 52.0521 105.594 50.8438C105.927 49.6146 106.365 48.4062 106.906 47.2188C107.469 46.0312 108.104 44.9271 108.812 43.9062C109.521 42.8854 110.271 42.0417 111.062 41.375C110.333 41.8542 109.531 42.2292 108.656 42.5C107.802 42.7708 106.927 42.9062 106.031 42.9062C105.385 42.9062 104.823 42.8542 104.344 42.75C103.865 42.6458 103.333 42.4479 102.75 42.1562L99.5 48.9375L98.1562 48.4062L101.531 41.5C101.177 41.25 100.792 40.9375 100.375 40.5625C99.9792 40.1667 99.6875 39.7812 99.5 39.4062L103.844 34.5312C104.031 35.0938 104.292 35.6667 104.625 36.25C104.958 36.8125 105.344 37.3229 105.781 37.7812C106.24 38.2188 106.74 38.5833 107.281 38.875C107.844 39.1667 108.448 39.3125 109.094 39.3125C110.198 39.3125 111.271 39.1146 112.312 38.7188C113.354 38.3021 114.323 37.8021 115.219 37.2188L116.062 38.0625C115.271 38.7917 114.469 39.6042 113.656 40.5C112.865 41.375 112.146 42.3125 111.5 43.3125C110.854 44.3125 110.333 45.3646 109.938 46.4688C109.542 47.5729 109.344 48.6875 109.344 49.8125C109.344 50.4583 109.427 51.1875 109.594 52C109.781 52.7917 110.062 53.5521 110.438 54.2812C110.812 54.9896 111.281 55.5938 111.844 56.0938C112.406 56.5729 113.083 56.8125 113.875 56.8125C114.417 56.8125 114.938 56.7188 115.438 56.5312C115.958 56.3229 116.427 56.0729 116.844 55.7812L117.594 56.5938ZM128.406 19.2188L126.75 30.625L123.688 31.5938L121.812 21.4688L128.406 19.2188ZM132.719 56.3438C132.24 57.3646 131.677 58.1458 131.031 58.6875C130.406 59.2292 129.802 59.625 129.219 59.875C128.531 60.1667 127.833 60.3333 127.125 60.375C126.208 60.375 125.448 60.2292 124.844 59.9375C124.24 59.6458 123.76 59.2604 123.406 58.7812C123.052 58.3021 122.802 57.7604 122.656 57.1562C122.531 56.5521 122.469 55.9375 122.469 55.3125V37.7812L128.219 35.8125V55.4688C128.219 55.9688 128.333 56.3646 128.562 56.6562C128.792 56.9479 129.083 57.1042 129.438 57.125C129.812 57.125 130.208 56.9896 130.625 56.7188C131.062 56.4479 131.479 56.0104 131.875 55.4062L132.719 56.3438ZM150.406 51.375C150.406 52.6667 150.167 53.875 149.688 55C149.208 56.125 148.552 57.1042 147.719 57.9375C146.906 58.7708 145.927 59.4271 144.781 59.9062C143.656 60.3854 142.438 60.625 141.125 60.625C140.562 60.625 139.948 60.5729 139.281 60.4688C138.635 60.3646 137.99 60.2083 137.344 60C136.698 59.7917 136.083 59.5312 135.5 59.2188C134.938 58.9062 134.469 58.5312 134.094 58.0938L137.781 53.2812C138.031 53.6771 138.333 54.1146 138.688 54.5938C139.062 55.0521 139.469 55.4792 139.906 55.875C140.365 56.2708 140.844 56.6042 141.344 56.875C141.865 57.125 142.385 57.25 142.906 57.25C143.51 57.25 144.073 57.1458 144.594 56.9375C145.135 56.7292 145.604 56.4375 146 56.0625C146.396 55.6667 146.708 55.2083 146.938 54.6875C147.167 54.1667 147.281 53.5938 147.281 52.9688C147.281 52.1354 146.99 51.375 146.406 50.6875C145.844 49.9792 145.167 49.3021 144.375 48.6562C143.604 47.9896 142.792 47.3125 141.938 46.625C141.104 45.9167 140.427 45.1458 139.906 44.3125L136.656 49.0625L135.438 48.1562L139.188 42.9688C138.896 42.3646 138.667 41.7292 138.5 41.0625C138.333 40.3958 138.25 39.7292 138.25 39.0625C138.25 38.5 138.344 37.9062 138.531 37.2812C138.719 36.6562 138.99 36.0833 139.344 35.5625C139.698 35.0417 140.125 34.6146 140.625 34.2812C141.146 33.9271 141.74 33.75 142.406 33.75C143.052 33.75 143.594 33.9479 144.031 34.3438C144.49 34.7396 144.719 35.2917 144.719 36C144.719 36.375 144.656 36.75 144.531 37.125C144.406 37.5 144.25 37.875 144.062 38.25C143.875 38.625 143.667 38.9896 143.438 39.3438C143.208 39.6771 142.99 39.9896 142.781 40.2812C143.281 40.9896 143.823 41.6042 144.406 42.125C144.99 42.6458 145.562 43.1354 146.125 43.5938C146.688 44.0521 147.229 44.5104 147.75 44.9688C148.271 45.4271 148.719 45.9479 149.094 46.5312C149.49 47.1146 149.802 47.7917 150.031 48.5625C150.281 49.3333 150.406 50.2708 150.406 51.375ZM143.312 36.5625C143.312 36.2708 143.208 36.0521 143 35.9062C142.812 35.7604 142.594 35.6875 142.344 35.6875C141.99 35.6875 141.74 35.8125 141.594 36.0625C141.448 36.2917 141.375 36.5521 141.375 36.8438C141.375 37.2604 141.438 37.6667 141.562 38.0625C141.708 38.4583 141.885 38.8333 142.094 39.1875C142.177 39.0417 142.281 38.8542 142.406 38.625C142.552 38.3958 142.688 38.1562 142.812 37.9062C142.958 37.6354 143.073 37.3854 143.156 37.1562C143.26 36.9062 143.312 36.7083 143.312 36.5625ZM166.469 56.3438C165.99 57.3646 165.438 58.1458 164.812 58.6875C164.188 59.2292 163.573 59.625 162.969 59.875C162.281 60.1667 161.573 60.3333 160.844 60.375C159.906 60.375 159.135 60.2292 158.531 59.9375C157.948 59.6458 157.479 59.2604 157.125 58.7812C156.792 58.3021 156.552 57.7604 156.406 57.1562C156.281 56.5521 156.219 55.9375 156.219 55.3125V38.9375H152.906L154.25 35.8125H156.219V24.75L161.938 22.75V35.8125H167.875L166.594 38.9375H161.938V55.4688C161.938 55.9688 162.052 56.3646 162.281 56.6562C162.51 56.9479 162.802 57.1042 163.156 57.125C163.51 57.125 163.906 56.9896 164.344 56.7188C164.781 56.4479 165.208 56.0104 165.625 55.4062L166.469 56.3438Z" fill="black" />
                            <g class="location">
                                <path class="Vector" d="M136 18.9844C136 23.9463 125.5 35 125.5 35C125.5 35 115 23.9463 115 18.9844C115 16.6016 116.106 14.3164 118.075 12.6315C120.045 10.9466 122.715 10 125.5 10C128.285 10 130.955 10.9466 132.925 12.6315C134.894 14.3164 136 16.6016 136 18.9844Z" fill="black" />
                                <path class="Vector_2" d="M130.3 18.5937C130.3 19.406 130.019 20.2001 129.491 20.8755C128.964 21.5509 128.214 22.0774 127.337 22.3882C126.46 22.6991 125.495 22.7804 124.564 22.6219C123.633 22.4635 122.777 22.0723 122.106 21.4979C121.435 20.9235 120.978 20.1917 120.792 19.395C120.607 18.5983 120.702 17.7725 121.066 17.022C121.429 16.2715 122.044 15.6301 122.833 15.1788C123.623 14.7275 124.551 14.4866 125.5 14.4866C126.131 14.4863 126.755 14.5924 127.337 14.7987C127.92 15.005 128.449 15.3075 128.895 15.689C129.341 16.0704 129.694 16.5233 129.935 17.0217C130.176 17.5201 130.3 18.0543 130.3 18.5937Z" fill="white" />
                            </g>
                            <g id="fsto">
                                <g clip-path="url(#clip0_150_116)">
                                    <path id="Vector_3" d="M50.0245 41.1364C51.8274 41.1364 53.2889 39.7844 53.2889 38.1166C53.2889 36.4489 51.8274 35.0969 50.0245 35.0969C48.2216 35.0969 46.7601 36.4489 46.7601 38.1166C46.7601 39.7844 48.2216 41.1364 50.0245 41.1364Z" fill="#FF6584" />
                                    <path id="Vector_4" d="M58.979 40.3681C58.9862 40.3669 58.9916 40.3622 59 40.3634C58.9963 40.3504 58.9915 40.3376 58.9857 40.3252C58.9753 40.3383 58.9647 40.3517 58.9554 40.3634L58.979 40.3681Z" fill="white" />
                                    <path id="Vector_5" d="M37.0839 45.2637C37.103 45.9225 37.2223 46.5755 37.4383 47.2036C37.4432 47.2181 37.4484 47.2325 37.4536 47.2471H38.7761C38.7747 47.234 38.7733 47.2194 38.7719 47.2036C38.6837 46.2658 38.1753 40.5583 38.7832 39.5823C38.73 39.6615 36.9814 42.284 37.0839 45.2637Z" fill="#E6E6E6" />
                                    <path id="Vector_6" d="M37.1832 47.2037C37.1942 47.2183 37.2057 47.2329 37.2175 47.2472H38.2096C38.2021 47.2348 38.1934 47.2203 38.1833 47.2037C38.0194 46.9301 37.5343 46.112 37.0839 45.2638C36.6 44.3524 36.156 43.4064 36.1934 43.064C36.1819 43.1412 35.847 45.4953 37.1832 47.2037Z" fill="#E6E6E6" />
                                    <path id="Vector_7" d="M47.4927 47.3606C47.4761 47.935 47.3721 48.5043 47.1838 49.0518C47.1795 49.0645 47.1749 49.0771 47.1704 49.0898H46.0174C46.0187 49.0784 46.0199 49.0657 46.0211 49.0518C46.098 48.2343 46.5412 43.2584 46.0113 42.4075C46.0576 42.4765 47.5821 44.7628 47.4927 47.3606Z" fill="#E6E6E6" />
                                    <path id="Vector_8" d="M47.4062 49.0517C47.3966 49.0644 47.3866 49.0771 47.3763 49.0897H46.5114C46.5179 49.0789 46.5255 49.0661 46.5343 49.0517C46.6772 48.8132 47.1001 48.0999 47.4927 47.3605C47.9147 46.5659 48.3017 45.7411 48.2691 45.4426C48.2792 45.5099 48.5711 47.5623 47.4062 49.0517Z" fill="#E6E6E6" />
                                    <path id="Vector_9" d="M34.3097 30.451L34.8474 30.0532C34.4297 30.0105 34.258 30.2213 34.1878 30.3881C33.8615 30.2627 33.5062 30.427 33.5062 30.427L34.582 30.7883C34.5278 30.6542 34.4333 30.5372 34.3097 30.451Z" fill="#3F3D56" />
                                    <path id="Vector_10" d="M50.5044 28.4034L51.0421 28.0056C50.6244 27.9629 50.4527 28.1737 50.3825 28.3405C50.0562 28.2151 49.7009 28.3794 49.7009 28.3794L50.7767 28.7407C50.7225 28.6066 50.628 28.4896 50.5044 28.4034Z" fill="#3F3D56" />
                                    <path id="Vector_11" d="M58.4155 44.1348C58.4155 44.4644 58.4031 44.7913 58.3782 45.1156C58.1867 47.6736 57.2279 50.1315 55.6094 52.2132C55.3979 52.4862 55.1759 52.7516 54.9432 53.0093C54.3404 53.6781 53.6711 54.2931 52.9441 54.8463L49.7574 53.1165L47.8521 49.0029C47.8521 49.0029 50.6949 43.6784 58.4104 43.775C58.4136 43.8945 58.4153 44.0144 58.4155 44.1348Z" fill="#3F3D56" />
                                    <path id="Vector_12" d="M58.3782 45.1155C58.2316 47.027 57.6583 48.8897 56.6944 50.5859C55.7306 52.2822 54.3971 53.7752 52.7781 54.9708L49.8176 53.364L48.1279 49.7157C48.1279 49.7157 50.8659 44.5877 58.3782 45.1155Z" fill="#6C63FF" />
                                    <path id="Vector_13" d="M55.6094 52.2133C55.3979 52.4864 55.1758 52.7517 54.9432 53.0095C53.3843 54.7421 51.3924 56.0971 49.1399 56.9572C48.6838 57.1312 48.2169 57.2846 47.7394 57.4174C44.2911 58.2657 40.6378 58.0511 37.3332 56.8062C34.065 55.4569 31.4239 53.0738 29.8843 50.085C29.6774 49.6827 29.4914 49.2701 29.3262 48.8474C32.2076 46.8948 37.8854 44.0988 44.0736 46.8157C45.7853 47.5672 47.3138 48.2522 48.6589 48.8708C52.0723 50.4359 54.3441 51.5643 55.6094 52.2133Z" fill="#3F3D56" />
                                    <path id="Vector_14" d="M54.9432 53.0093C53.3317 54.7958 51.2604 56.1788 48.9199 57.0309C46.5794 57.8831 44.0448 58.177 41.5493 57.8858C39.0538 57.5946 36.6775 56.7275 34.6391 55.3643C32.6007 54.0011 30.9656 52.1856 29.8843 50.0849C32.2908 48.3245 37.8413 45.161 43.9324 47.835C45.4989 48.5227 46.8974 49.1496 48.1279 49.7157C51.7151 51.3604 53.9248 52.4781 54.9432 53.0093Z" fill="#6C63FF" />
                                    <path id="Vector_15" d="M50.6957 56.2634C50.1918 56.5218 49.6723 56.7534 49.1398 56.9571C47.3278 57.6478 45.3865 58.0022 43.4266 57.9999C41.1075 57.9991 38.8201 57.5009 36.7442 56.5445C34.6683 55.5881 32.8603 54.1996 31.4623 52.4879C35.0421 52.1387 44.9375 51.6679 50.6957 56.2634Z" fill="#3F3D56" />
                                    <path id="Vector_16" d="M49.1399 56.9572C46.3301 58.0259 43.2357 58.2805 40.266 57.6872C37.2964 57.0939 34.5914 55.6808 32.5088 53.6346C33.8109 53.4577 44.0336 52.2426 49.1399 56.9572Z" fill="#6C63FF" />
                                    <path id="Vector_17" d="M55.9013 36.4462V36.4466C45.1986 29.1265 32.9363 34.2788 32.8416 34.3183V34.3179C34.2315 33.0324 35.8818 32.0131 37.6982 31.3185C39.5145 30.6238 41.4612 30.2675 43.4266 30.2698C48.63 30.2698 53.2139 32.7226 55.9013 36.4462Z" fill="#E6E6E6" />
                                    <path id="Vector_18" d="M33.7 44.4037C35.5106 44.1017 36.4384 41.0866 35.7723 37.6693C35.1063 34.252 33.0986 31.7265 31.288 32.0284C29.4774 32.3304 28.5497 35.3455 29.2157 38.7628C29.8818 42.1801 31.8895 44.7056 33.7 44.4037Z" fill="#3F3D56" />
                                    <path id="Vector_19" d="M34.1654 48.3946C34.058 40.8884 31.3431 33.8444 31.3157 33.7742L31.0681 33.8568C31.0953 33.9267 33.7954 40.9338 33.9022 48.3979L34.1654 48.3946Z" fill="#6C63FF" />
                                    <path id="Vector_20" d="M29.3485 37.3669L29.2675 37.5986L32.5178 38.571L32.5988 38.3393L29.3485 37.3669Z" fill="#6C63FF" />
                                    <path id="Vector_21" d="M35.4627 37.1059L32.7846 39.0679L32.9481 39.2588L35.6261 37.2968L35.4627 37.1059Z" fill="#6C63FF" />
                                    <path id="Vector_22" d="M42.4059 43.3214C44.3967 43.3214 46.0105 40.2754 46.0105 36.5179C46.0105 32.7604 44.3967 29.7144 42.4059 29.7144C40.4151 29.7144 38.8013 32.7604 38.8013 36.5179C38.8013 40.2754 40.4151 43.3214 42.4059 43.3214Z" fill="#3F3D56" />
                                    <path id="Vector_23" d="M42.073 47.6541C43.5167 39.6416 42.0876 31.658 42.0729 31.5784L41.7921 31.6224C41.8067 31.7016 43.2276 39.6433 41.7921 47.6109L42.073 47.6541Z" fill="#6C63FF" />
                                    <path id="Vector_24" d="M39.2323 35.055L39.098 35.2874L42.3575 36.9001L42.4919 36.6678L39.2323 35.055Z" fill="#6C63FF" />
                                    <path id="Vector_25" d="M45.7977 35.8629L42.5385 37.4766L42.6729 37.7089L45.9321 36.0952L45.7977 35.8629Z" fill="#6C63FF" />
                                    <path id="Vector_26" d="M58.0632 41.133C56.7407 40.4461 55.3589 39.8617 53.9321 39.3858C46.0428 36.7451 38.2197 37.7628 35.1575 41.5421C37.5406 36.9122 46.0437 35.4564 54.6246 38.3285C55.6233 38.6625 56.6006 39.0487 57.552 39.4853C57.7592 40.0242 57.93 40.5745 58.0632 41.133Z" fill="#E6E6E6" />
                                    <path id="Vector_27" d="M47.4082 33.6824L47.9459 33.2846C47.5282 33.242 47.3566 33.4527 47.2863 33.6195C46.96 33.4942 46.6047 33.6584 46.6047 33.6584L47.6805 34.0197C47.6263 33.8856 47.5318 33.7686 47.4082 33.6824Z" fill="#3F3D56" />
                                </g>
                                <rect class="strok" x="28.5" y="27.5" width="31" height="31" rx="15.5" stroke="black" />
                            </g>
                            <g class="sndo">
                                <path id="XMLID_421_" d="M199.003 33.1208C199.003 31.6892 197.838 30.5244 196.406 30.5244C194.974 30.5244 193.81 31.6892 193.81 33.1208C193.81 34.5524 194.974 35.7172 196.406 35.7172C197.838 35.7172 199.003 34.5524 199.003 33.1208ZM195.179 33.1208C195.179 32.4444 195.73 31.8942 196.406 31.8942C197.082 31.8942 197.633 32.4444 197.633 33.1208C197.633 33.7971 197.082 34.3474 196.406 34.3474C195.73 34.3474 195.179 33.7971 195.179 33.1208ZM194.542 42.2025C194.812 42.7685 195.219 43.6238 196.406 43.6238C197.592 43.6238 198 42.7687 198.27 42.2029C198.305 42.1296 198.983 40.7908 198.983 40.7908C200.443 37.9221 202 34.7269 202 33.1208C202 30.0363 199.49 27.5269 196.406 27.5269C193.321 27.5269 190.812 30.0363 190.812 33.1208C190.812 34.7272 192.369 37.9222 193.829 40.7908C193.829 40.7908 194.507 42.1293 194.542 42.2025ZM196.406 28.8966C198.735 28.8966 200.63 30.7915 200.63 33.1208C200.63 34.5331 198.693 38.3401 197.762 40.1697C197.762 40.1697 197.073 41.5309 197.034 41.6132C196.76 42.1881 196.695 42.254 196.406 42.254C196.117 42.254 196.053 42.1881 195.778 41.613C195.739 41.5308 195.05 40.1696 195.05 40.1696C194.119 38.3402 192.182 34.5333 192.182 33.1208C192.182 30.7915 194.077 28.8966 196.406 28.8966ZM199.139 43.376C198.761 43.376 198.455 43.6826 198.455 44.0609C198.455 45.1757 198.324 46.2603 198.077 47.3008C195.404 47.8753 192.65 48.2768 189.842 48.5024C189.95 47.0715 190.006 45.5813 190.006 44.061C190.006 42.746 189.964 41.4541 189.883 40.203C190.099 40.1834 190.315 40.1626 190.53 40.1406C190.906 40.1022 191.18 39.766 191.141 39.3897C191.103 39.0135 190.766 38.7389 190.39 38.778C190.187 38.7988 189.983 38.8185 189.778 38.8372C189.488 35.6071 188.931 32.7185 188.163 30.5252C188.433 30.5997 188.7 30.6824 188.965 30.7733C189.323 30.8956 189.713 30.7051 189.835 30.3473C189.958 29.9894 189.767 29.6 189.409 29.4774C187.805 28.9276 186.123 28.6488 184.412 28.6488C183.481 28.6488 182.568 28.7319 181.682 28.8911C181.662 28.8938 181.642 28.8974 181.622 28.9019C176.557 29.8315 172.35 33.2463 170.316 37.8302C170.295 37.8682 170.277 37.9086 170.263 37.9513C169.451 39.8254 169 41.8916 169 44.0609C169 45.4292 169.179 46.7566 169.516 48.0206C169.521 48.0447 169.527 48.0683 169.535 48.0916C171.073 53.7632 175.776 58.1468 181.622 59.22C181.642 59.2245 181.662 59.2281 181.682 59.2309C182.568 59.39 183.481 59.473 184.412 59.473C185.344 59.473 186.256 59.3899 187.143 59.2307C187.163 59.228 187.182 59.2245 187.201 59.22C193.048 58.1468 197.752 53.7623 199.29 48.09C199.297 48.0678 199.303 48.0451 199.308 48.0221C199.645 46.7578 199.824 45.4297 199.824 44.0609C199.824 43.6826 199.518 43.376 199.139 43.376ZM188.636 44.0609C188.636 45.6201 188.577 47.144 188.463 48.5987C187.123 48.6784 185.771 48.7184 184.412 48.7184C183.053 48.7184 181.702 48.6784 180.362 48.5987C180.247 47.144 180.188 45.62 180.188 44.0609C180.188 42.7816 180.228 41.5258 180.305 40.3128C181.655 40.4032 183.024 40.4485 184.412 40.4485C185.787 40.4485 187.162 40.4023 188.519 40.3108C188.596 41.5245 188.636 42.7808 188.636 44.0609ZM182.255 30.184C182.958 30.0751 183.679 30.0185 184.412 30.0185C185.138 30.0185 185.859 30.0736 186.569 30.183C187.457 32.328 188.098 35.4145 188.414 38.9451C187.092 39.0339 185.753 39.0788 184.412 39.0788C183.06 39.0788 181.724 39.0347 180.41 38.947C180.726 35.4163 181.366 32.3294 182.255 30.184ZM180.66 30.5275C179.893 32.721 179.336 35.6101 179.046 38.8396C176.578 38.6155 174.188 38.2345 171.895 37.6989C173.666 34.2295 176.838 31.5885 180.66 30.5275ZM179.605 53.4605C177.848 52.5582 176.375 51.1778 175.36 49.4919C176.596 49.6576 177.845 49.789 179.104 49.8858C179.231 51.1412 179.399 52.3396 179.605 53.4605ZM170.37 44.0609C170.37 42.2669 170.708 40.55 171.324 38.9714C173.763 39.5551 176.31 39.9674 178.941 40.2055C178.86 41.4555 178.818 42.7471 178.818 44.061C178.818 45.5812 178.874 47.0716 178.982 48.5024C177.511 48.3842 176.055 48.2178 174.617 48.0034C174.125 46.7847 173.854 45.3806 173.854 44.061C173.854 43.6827 173.547 43.3761 173.169 43.3761C172.79 43.3761 172.484 43.6827 172.484 44.061C172.484 45.3488 172.689 46.5899 173.068 47.7528C172.288 47.6164 171.514 47.4658 170.747 47.3009C170.5 46.2603 170.37 45.1757 170.37 44.0609ZM171.19 48.7924C172.01 48.9583 172.836 49.1082 173.669 49.2424C174.956 51.9003 177.2 54.0109 179.951 55.1241C180.162 56.0189 180.398 56.8468 180.66 57.5942C176.259 56.3725 172.72 53.0568 171.19 48.7924ZM186.569 57.9378C185.866 58.0467 185.146 58.1032 184.412 58.1032C183.679 58.1032 182.958 58.0467 182.255 57.9378C181.973 57.2568 181.716 56.4811 181.486 55.6263C182.423 55.8635 183.403 55.9893 184.412 55.9893C184.79 55.9893 185.097 55.6827 185.097 55.3044C185.097 54.9262 184.79 54.6196 184.412 54.6196C183.264 54.6196 182.158 54.4353 181.122 54.0947C180.857 52.8354 180.644 51.4503 180.488 49.9782C183.086 50.1247 185.738 50.1247 188.336 49.9782C187.999 53.1728 187.39 55.9568 186.569 57.9378ZM188.164 57.5943C188.883 55.5383 189.417 52.8717 189.72 49.8859C192.413 49.6789 195.058 49.3136 197.634 48.7925C196.104 53.0568 192.565 56.3725 188.164 57.5943Z" fill="black" />
                            </g>
                            <g class="plane">
                                <path id="Vector_28" d="M168.052 20.0008L168.078 20.0072C168.078 20.0072 167.875 19.3759 171.95 20.1746L173.371 18.9069L173.203 18.8649C172.951 18.8022 172.798 18.5473 172.861 18.2956C172.923 18.0439 173.178 17.8908 173.43 17.9535L174.244 18.1566L174.916 17.598L174.854 17.5824C174.602 17.5197 174.449 17.2648 174.511 17.0131C174.574 16.7615 174.829 16.6083 175.081 16.6711L175.845 16.8615C176.619 16.2692 177.315 15.8024 177.757 15.6442C177.757 15.6442 178.554 15.843 178.441 16.2988C178.441 16.2988 175.741 19.2333 174.66 20.7796C178.771 21.7686 178.701 22.0508 178.701 22.0508C178.701 22.0508 180.038 20.5692 180.949 20.7964L179.698 22.9045L179.672 22.8981L179.788 25.347C178.876 25.1198 178.391 23.1837 178.391 23.1837C178.391 23.1837 178.321 23.4659 174.226 22.409C174.455 24.282 175.461 28.1404 175.461 28.1404C175.347 28.5961 174.55 28.3972 174.55 28.3972C174.234 28.0501 173.839 27.3113 173.433 26.4247L172.669 26.2342C172.417 26.1715 172.264 25.9166 172.327 25.6649C172.39 25.4133 172.645 25.2601 172.896 25.3228L172.959 25.3384L172.628 24.5299L171.814 24.3269C171.562 24.2641 171.409 24.0092 171.472 23.7576C171.534 23.5059 171.789 23.3527 172.041 23.4155L172.209 23.4575L171.549 21.6709C167.577 20.4633 168.052 20.0008 168.052 20.0008Z" fill="black" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_150_116">
                                <rect x="29" y="28" width="30" height="30" rx="15" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <ul class="list-container">
                <?php
                    if(isset($_SESSION['uname'])){?>
                    <li class="nav-option"><a class="li-link noti">Notification(<?php echo $count; ?>)</a></li>
                    <?php }else{ ?>
                    <li class="nav-option"><a class="li-link noti">Notification(0)</a></li>
                    <?php } ?>
                    <li class="nav-option"><a class="li-link" href="wishlist.php">Wishlist</a></li>
                    <li class="nav-option"><a class="li-link" href="aboutus.php">About Us</a></li>
                </ul>
                <?php
                if (isset($_SESSION['uname'])) {
                    $profileAddress = './profiles/' . $_SESSION['uid'] . "." . "jpg";
                    $fileExist = file_exists("$profileAddress");
                    if ($fileExist === true) {
                        echo "<img src=$profileAddress class=profile>";
                    } else {
                        echo "<img src=./css/images/profile.png class=profile>";
                    }
                } else {
                    echo "<img src=./css/images/profile.png class=profile>";
                }
                ?>
            </nav>
        </div>
        <div class="notification-div">
            <img src="./css/images/svg/close.svg" class="close" width="30px" height="30px" alt="close">
        </div>
        <div class="profile-container">
            <img src="./css/images/svg/close.svg" class="close" width="30px" height="30px" alt="close">
            <?php
            if (isset($_SESSION['uname'])) {
                $profileAddress = './profiles/' . $_SESSION['uid'] . "." . "jpg";
                $fileExist = file_exists("$profileAddress");
                if ($fileExist === true) {
                    echo "<img src=$profileAddress class=profile>";
                } else {
                    echo "<img src=./css/images/profile.png class=profile>";
                }
            ?>
                <center>
                    <?php if (isset($_SESSION['uname'])) {
                        echo $_SESSION['uname'];
                    } ?>
                </center>
                <?php if (isset($_SESSION['uid'])) {
                    echo "UserID : $_SESSION[uid]";
                } ?>
                <a href="changeprofile.php" class="change-link">Change Profile image</a>
                <a href="updateprofile.php" class="button">Update profile</a>
                <a href="changepass.php" class="button">Change Password</a>
                <a href="mytrips.php" class="button">My Trips</a>
                <a href="contactus.php" class="button">Contact Us</a>
                <a href="logout.php" class="button">Logout</a>

            <?php
            } else {
            ?>
                <p>You are not logged in please login!</p>
                <a href="login.php" class="button">Login</a>
            <?php
            }
            ?>

        </div>
</body>
<script>
    $(".profile").click(function() {
        $(".profile-container").fadeIn("slow").css("display", "flex");
        $(".close").click(function() {
            $(".profile-container").fadeOut("slow");
        });
    });
    $(".noti").click(function() {
        $(".notification-div").fadeIn("slow").css("display", "flex");
        $(".close").click(function() {
            $(".notification-div").fadeOut("slow");
        });
    });
</script>
<script src="./js/gsap.min.js"></script>
<!--linked the gsap javascript file-->
<script src="./js/ScrollTrigger.min.js"></script>
<!--linked the scrollTrigger javascript file-->
<script src="js/home_nav.js"></script>


</html>