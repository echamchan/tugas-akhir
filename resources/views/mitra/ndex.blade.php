<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ URL::asset('js/mitstyl.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/mitstyl.css')}}">
<!------ Include the above in your HEAD tag ---------->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/ico" href='images/favicon.png'>
    <title>Dashboard Mitra</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/jquery-3.1.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="js/hitgoalz.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="hamburger">
            <div class="cta">
                <div class="toggle-btn type14"></div>
            </div>
        </div>

        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
    <img src="images/logo.png" alt="logo" style="width:140px;">
  </a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/notification.png" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/sms.png" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/user.png" alt=""></a>
            </li>
        </ul>
    </nav>


    <section class="side-bar-warp">
        <div class="sidebar-menu small-side-bar flowHide">
            <nav class="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/dashboard.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/create-quest.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Creat a Quest</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/manage-quests.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Manage Quests</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/leaderboards.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Leaderboards</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/one-on-one.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">One On Ones</span>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/give-kudos.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Give Kudos</span>
                       </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/settings.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Nation Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/feedback.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Help/Feedback</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span class="sidebar-icon"><img src="images/log-out.png" alt=""></span>
                        <span class="fadeInRight animated nav-link-name name-hide tax-show">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div style="margin-left: 60px; margin-top: 40px;" id="content">
                    <h1>Welcome Admin!</h1>
                </div>
            </div>
        </div>
    </div>

</body>

</html>