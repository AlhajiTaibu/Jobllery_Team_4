<?php include "includes/dashboard_header.php";?>
    <div id="wrapper">
         <nav class="navbar navbar-dark fixed-top align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" id="sidebar">
            <div class="container-fluid d-flex flex-column p-0">
                <div class="joblllery-logo"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php"></a></div>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span><strong>Dashboard</strong></span></a><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><strong>Profile</strong></a><a class="nav-link"
                            href="jobs_applied.php"><i class="fas fa-toolbox"></i><span><strong>Jobs Applied</strong></span></a><a class="nav-link" href="shortlisted_jobs.php"><i class="fas fa-clipboard-list"></i><span><strong>Shortlisted Jobs</strong></span></a>
                        <a
                            class="nav-link" href="notification.php"><i class="fas fa-info"></i><span><strong>Notification</strong></span></a><a class="nav-link active" href="messages.php"><i class="fas fa-envelope-open"></i><span><strong>Messages</strong></span></a><a class="nav-link" href="following_employers.php"><i class="fas fa-paper-plane"></i><span><strong>Following Employers</strong></span></a>
                            <a
                                class="nav-link" href="payments.php"><i class="fas fa-money-check-alt"></i><span><strong>Payments</strong><br></span></a>
                    </li>
                    
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
<?php include "includes/dashboard_navigation.php";?>
            <div class="container-fluid profile">
                <div class="profile-container">
                    <div class="header-div">
                        <h4 class="header"><strong>Messages</strong></h4>
                    </div>
                    <div class="container-fluid">
                        <div class="profile-container">
                            <div class="row chat-system">
                                <div class="col-xl-3 offset-xl-0 col-lg-4 col-xl-3" id="message-sidebar">
                                    <form>
                                        <div class="col-sm-12 col-md-12" id="message-search">
                                            <div id="search-box" class="input-group"><input class="form-control form-control" type="text" id="search-input" placeholder="Search contacts..."><span class="input-group-append"><button class="btn btn-outline-secondary" id="search-btn-btn" type="button"><i class="fa fa-search" id="search-icon"></i></button></span></div>
                                        </div>
                                    </form>
                                    <div class="row chat-btn">
                                        <div class="col-xl-Infinity icon">
                                            <a href="#">
                                                <h6 class="chat-text">All</h6>
                                            </a>
                                        </div>
                                        <div class="col-xl-Infinity offset-xl-0 icon" id="text-link">
                                            <a href="#">
                                                <h6 class="text-link">Read</h6>
                                            </a>
                                        </div>
                                        <div class="col icon" id="text-link">
                                            <a href="#">
                                                <h6 class="text-link">Unread</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row chat-btn">
                                        <div class="col">
                                            <div class="row chat-btn" id="chat-panel">
                                                <div class="col-sm-3 col-md-2 col-lg-4 col-xl-4 offset-xl-0 col-lg-3"><img class="border rounded-circle" src="assets/img/avatars/avatar5.jpeg"></div>
                                                <div class="col-lg-12 col-xl-8 offset-lg-0 col-lg-9">
                                                    <a href="#">
                                                        <div>
                                                            <h6 class="chat-text">Lewis Dzacka-6 mins ago</h6>
                                                            <h6 class="chat-text">Amalitech gGmbH</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" id="chat-panel">
                                                <div class="col col-lg-9">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row chat-btn">
                                        <div class="col">
                                            <div class="row chat-btn" id="chat-panel">
                                                <div class="col-sm-3 col-md-2 col-lg-4 col-lg-3"><img class="border rounded-circle" src="assets/img/avatars/avatar5.jpeg"></div>
                                                <div class="col-lg-12 col-xl-7 offset-lg-0 col-lg-9">
                                                    <a href="#">
                                                        <div>
                                                            <h6 class="chat-text">Lewis Dzacka-6 mins ago</h6>
                                                            <h6 class="chat-text">Amalitech gGmbH</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" id="chat-panel">
                                                <div class="col col-lg-9">
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-8 col-xl-9">
                                    <div class="chat-box">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><img class="rounded-circle chat-img" src="assets/img/avatars/avatar5.jpeg"></td>
                                                        <td>&nbsp; &nbsp; &nbsp;</td>
                                                        <td class="chat-header">
                                                            <h6>Lewis Dzacka</h6>
                                                        </td>
                                                        <td class="chat-header">
                                                            <a href="#">
                                                                <h6 class="text-right delete-chat">Delete Chat&nbsp;</h6>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <form class="chat-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="col">
                                                                <div class="form-row">
                                                                    <div class="col col-lg-2" id="chat-body-logo"><img class="rounded-circle" id="chat-body-image" src="assets/img/avatars/avatar5.jpeg"></div>
                                                                    <div class="col col-lg-10" id="chat-body-details">
                                                                        <h6>12/03/2020, 08:00am</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col" id="chat-body-msg"><button class="btn btn-secondary btn-sm" id="chat-body-btn" type="button">Hi there</button></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div class="col">
                                                                <div class="form-row">
                                                                    <div class="col col-lg-10" id="chat-sender">
                                                                        <h6 class="text-right">12/03/2020, 08:01am</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row" id="chat-sender-btn">
                                                                    <div class="col" id="chat-send"><button class="btn btn-secondary btn-sm text-left" id="chat-body-btn" type="button">Hello, how may i help you</button></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-row">
                                            <div class="col" id="send-message">
                                                <div class="input-group"><input class="form-control form-control" type="text" id="send-textbox" placeholder="Write your message..."><span class="input-group-append"><button class="btn btn-success send-btn" type="submit"><i class="icon ion-android-send"></i></button></span></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php include "includes/dashboard_footer.php";?>