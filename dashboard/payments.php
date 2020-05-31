<?php include "includes/dashboard_header.php";?>
    <div id="wrapper">
<?php include "includes/dashboard_navigation.php";?>
            <div class="container-fluid profile">
                <div class="profile-container">
                    <div class="header-div">
                        <h4 class="header"><strong>Payments</strong></h4>
                    </div>
                    <div class="container-fluid">
                        <h6 class="text-right"><strong>Account Balance: $1900.80 &nbsp; &nbsp;</strong></h6>
                        <div id="payment-card">
                            <div>
                                <div class="table-responsive">
                                    <table class="table payment-header">
                                        <tbody>
                                            <tr>
                                                <td id="payment-nav">
                                                    <a href="#">
                                                        <div>
                                                            <h6 class="text-center"><strong>Available Funds</strong></h6>
                                                            <h6><br></h6>
                                                            <h4 class="text-center"><strong>$300.00</strong></h4>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center payment-nav-item" id="payment-nav-item">
                                                    <a href="#">
                                                        <div class="payment-nav-inactive">
                                                            <h6><strong>Pending Work</strong></h6>
                                                            <h6><br></h6>
                                                            <h4><strong>$800.00</strong></h4>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center" id="payment-nav-item">
                                                    <a id="payment-nav-inactive" href="#">
                                                        <div class="payment-nav-inactive">
                                                            <h6><strong>In Review</strong></h6>
                                                            <h6><br></h6>
                                                            <h4><strong>$700.00</strong></h4>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center" id="payment-nav-item">
                                                    <a id="payment-nav-inactive" href="#">
                                                        <div class="payment-nav-inactive">
                                                            <h6><strong>Work In Progress</strong></h6>
                                                            <h6><br></h6>
                                                            <h4><strong>$900.00</strong></h4>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive payment-table">
                                    <table class="table">
                                        <tbody class="payment-table">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Title</th>
                                                                        <th class="text-center">Client Details</th>
                                                                        <th class="text-center">Location</th>
                                                                        <th class="text-center">Salary</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="table-row">
                                                                        <td class="text-center">Business</td>
                                                                        <td class="text-center">
                                                                            <div>
                                                                                <h6><strong>Godsway Nyatuame</strong></h6>
                                                                                <h6><strong>Category: </strong>Finance</h6>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">Takoradi</td>
                                                                        <td class="text-center">$5-$50</td>
                                                                        <td class="text-center">
                                                                            <div><a href="#"><i class="icon ion-android-delete trash"></i></a></div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><button class="btn btn-success btn-sm" id="payment-btn" type="button">Payment</button>
                                                    <a href="#">
                                                        <h6>Transaction History</h6>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php include "includes/dashboard_footer.php";?>