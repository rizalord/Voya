<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- MY CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/css/header_navbar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/leftbar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/search.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/pagination.css") ?>">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <title>Voya</title>
</head>

<body>
    <div class="navbar">
        <img src="<?= base_url("assets/img/logo/voyaLogoCrop.png") ?>">

        <div class="searchBar">
            <form action="<?= base_url('search'); ?>" method="GET">
                <input class="searchField" type="search" placeholder="Search" autocomplete="off" name="q">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <button type="submit" class="btnSearch"><i class="fas fa-search"></i></button>
        <div class="user">
            <img src="<?= base_url('assets/img/logo/defaultUser.jpg') ?>">
        </div>


        <div class="userNav">
            <div class="imageProfile">
                <img class="imgUser" src="<?= base_url('assets/img/logo/defaultUser.jpg') ?>">
                <div class="nameUser">
                    <p class="userNamee text-truncate">Ahmad Khamdani</p>
                </div>
            </div>

            <hr class="lineBreak">

            <ul class="content">
                <li>
                    <a href="<?= base_url('user'); ?>">
                        <div class="left">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="right">
                            <p>Profile</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('user/videos'); ?>">
                        <div class="left">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="right">
                            <p>My Videos</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('user/bookmark'); ?>">
                        <div class="left">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="right">
                            <p>Bookmark</p>
                        </div>
                        <div class="clear"></div>
                    </a>
                </li>



                <hr class="lineBreak">

                <li>
                    <a href="<?= base_url('user/followed'); ?>">
                        <div class="left">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <div class="right">
                            <p>Followed</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('user/follower'); ?>">
                        <div class="left">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="right">
                            <p>Followers</p>
                        </div>
                        <div class="clear"></div>
                    </a>
                </li>

                <hr class="lineBreak">

                <li>
                    <a href="<?= base_url('user/setting'); ?>">
                        <div class="left">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="right">
                            <p>Settings</p>
                        </div>

                    </a>
                </li>
                <li style="cursor : pointer">
                    <a onclick="displayerO();">
                        <div class="left">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <div class="right">
                            <p>Feedback</p>
                        </div>
                    </a>
                    <div class="clear"></div>
                </li>

                <hr class="lineBreak">

                <li>
                    <a href="<?= base_url('user/logout'); ?>">
                        <div class="left">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                        <div class="right">
                            <p>Logout</p>
                        </div>
                    </a>
                </li>

            </ul>

        </div>
    </div>

    <div class="shadow feedbackModal">
        <div class="headerModal">
            Send Feedback
        </div>
        <div class="textFeed">
            <textarea name="" id="" placeholder="enter your feedback" required></textarea>
            <p class="pl-2 text-success d-none">Thank you for your feedback!</p>
        </div>
        <div class="sendModal">
            <?php $fe = base_url('user/feedback'); ?>
            <button type="submit" class="sended" onclick="send('<?= $fe; ?>');">Send</button>
            <button type="button" class="canceled">Cancel</button>
        </div>
    </div>