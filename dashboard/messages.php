<?php include "includes/dashboard_header.php";?>
    <div id="wrapper">
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