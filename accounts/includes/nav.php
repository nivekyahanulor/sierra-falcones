<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierra Falconès</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/images/favicon.png" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="assets/vendors/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/vendors/summernote/summernote-lite.min.css">
    <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    <link href="assets/css/fullcalendar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
</head>

</html>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div style="margin-left: -15px;"><img src="assets/images/favicon.png" style="width: 50px; height:50px;"></div>
                        <div class="text-h" style="margin-right: -10px;">
                            <a href="advocacy.php" style="font-size: 18px;color:#cca934;">Humanitarian Order of <br></a>
                            <a href="advocacy.php" style="font-size: 20px;color:#cca934; letter-spacing: 2.3px;">Sierra Falconès</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <?php
                    error_reporting(0);

                    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                    $uri_segments = explode('/', $uri_path);

                    $page =  $uri_segments[3];

                    if ($page == 'advocacy.php' || $page == 'schedule.php' || $page == 'presentation.php') {
                        $advocacy = 'active';
                    } else if ($page == 'partnership.php' || $page == 'moa.php' || $page == 'partnerslist.php') {
                        $partnership = 'active';
                    } else if ($page == 'assigned-resources.php' || $page == 'released-resources.php' || $page == 'committee-report.php' || $page == 'contact.php') {
                        $reports = 'active';
                    } else if ($page == 'resources.php' || $page == 'resources-reports.php') {
                        $resources = 'active';
                    } else if ($page == 'program-committee.php') {
                        $program = 'active';
                    } else if ($page == 'activities.php') {
                        $activities = 'active';
                    } else if ($page == 'user.php') {
                        $user = 'active';
                    } else if ($page == 'profile-settings.php') {
                        $pros = 'active';
                    } else if ($page == 'chapter.php' || $page == 'member-list.php') {
                        $chapter = 'active';
                    } else if ($page == 'whatwedo.php' || $page == 'theorganization.php' || $page == 'settings-advocacy.php' || $page == 'contact.php') {
                        $settings = 'active';
                    }


                    ?>
                    <ul class="menu">

                        <?php if ($_SESSION['role'] == 1) { ?>


                            <li class="sidebar-item  has-sub <?php echo $advocacy; ?>">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Advocacy</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="advocacy.php">Advocacy</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="schedule.php">Schedules</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="presentation.php">Presentations</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="sidebar-item  has-sub <?php echo $resources; ?>">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-grid-1x2-fill"></i>
                                    <span>Resources</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="resources.php">Resources</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="resources-reports.php">Reports</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="sidebar-item <?php echo $activities; ?>">
                                <a href="activities.php" class='sidebar-link'>
                                    <i class="bi bi-calendar-range-fill"></i>
                                    <span>Activities</span>
                                </a>
                            </li>

                            <li class="sidebar-item  has-sub <?php echo $reports; ?>">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Reports</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="assigned-resources.php">Assigned Resources</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="released-resources.php">Released Resources</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="committee-report.php">Committee Report</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="certification.php">Certification</a>
                                    </li>

                                </ul>
                            </li>


                            <li class="sidebar-item <?php echo $program; ?>">
                                <a href="program-committee.php" class='sidebar-link'>
                                    <i class="bi bi-file-person-fill"></i>
                                    <span>Program Committee</span>
                                </a>
                            </li>

                            <li class="sidebar-item <?php echo $chapter; ?>">
                                <a href="chapter.php" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-medical-fill"></i>
                                    <span>Chapters</span>
                                </a>
                            </li>



                            <li class="sidebar-item <?php echo $user; ?>">
                                <a href="user.php" class='sidebar-link'>
                                    <i class="bi bi-file-person"></i>
                                    <span>Officers</span>
                                </a>
                            </li>



                            <li class="sidebar-item  has-sub <?php echo $partnership; ?>">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-collection-fill"></i>
                                    <span>Partnerships</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="partnership.php">Invited Sponsors</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="moa.php">M.O.A</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="partnerslist.php">Partnerships</a>
                                    </li>

                                </ul>
                            </li>


                            <li class="sidebar-item  has-sub <?php echo $settings; ?>">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-pen-fill"></i>
                                    <span>Settings</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="whatwedo.php">WHAT WE DO</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="theorganization.php">THE ORGANIZATION</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="settings-advocacy.php">ADVOCACIES</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="contact.php">CONTACT US</a>
                                    </li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="sidebar-item  has-sub  <?php echo $advocacy; ?>">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Advocacy</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="advocacy.php">Advocacy</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="schedule.php">Schedules</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="presentation.php">Presentations</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item <?php echo $activities; ?>">
                                <a href="activities.php" class='sidebar-link'>
                                    <i class="bi bi-calendar-range-fill"></i>
                                    <span>Activities</span>
                                </a>
                            </li>

                            <li class="sidebar-item  has-sub <?php echo $reports; ?>">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Reports</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="resources-reports.php"> Resources Reports</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="program-committee.php">Program Committee</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="committee-report.php">Committee Report</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="certification.php">Certification</a>
                                    </li>

                                </ul>
                            </li>


                            <li class="sidebar-item  <?php echo $chapter; ?> ">
                                <a href="member-list.php" class='sidebar-link'>
                                    <i class="bi bi-file-person"></i>
                                    <span>Members</span>
                                </a>
                            </li>





                        <?php } ?>
                        <li class="sidebar-item  ">
                            <a href="logout.php" class='sidebar-link'>
                                <i class="bi bi-arrow-bar-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    </div>
</body>