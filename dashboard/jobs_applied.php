<?php include "includes/dashboard_header.php";?>
    <div id="wrapper">
<?php include "includes/dashboard_navigation.php";?>
            <div class="container-fluid profile">
                <div class="profile-container">
                    <h4 class="header"><strong>Jobs Applied</strong></h4>
                    <form>
                        <div class="form-row" id="row-style">
                            <div class="col-12 col-md-1 col-md-12 col-sm-9 col-xs-12 col-lg-4" id="forms">
                                <div class="input-group"><input class="form-control input-btn" type="text" placeholder="Search"><span class="input-group-append"><button class="btn btn-outline-success btn-sm" id="search-btn" type="button"><i class="fa fa-search search-icon"></i></button></span></div>
                            </div>
                            <div class="col-3 col-md-3 offset-3 offset-md-0 col-md-3 col-sm-4 col-xs-12 col-lg-4 sort-col" id="forms">
                                <div class="sort"><label class="text-nowrap" for="search">Sort by</label></div>
                            </div>
                            <div class="col-12 col-md-12 col-md-9 col-sm-8 col-lg-4" id="forms">
                                <div><select class="form-control input-btn"><option value="undefined">Newest</option><option value="">Date</option><option value="">Ascending</option><option value="">Descending</option></select></div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive follow-tbody">
                        <table class="table">
                            <tbody>
                                <tr class="logo-background">
                                    <td id="img-div"></td>
                                    <td>
                                        <div class="text-justify job-logo-text">
                                            <h3><strong>Web Development</strong></h3>
                                            <h4>AmaliTech Takoradi</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="close-logo"><a href="#"><i class="icon ion-android-delete trash"></i></a></div>
                                    </td>
                                </tr>
                                <tr class="logo-background">
                                    <td id="img-div">
                                        <div></div>
                                    </td>
                                    <td>
                                        <div class="text-justify job-logo-text">
                                            <h3><strong>Web Development</strong></h3>
                                            <h4>AmaliTech Takoradi</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="close-logo"><a href="#"><i class="icon ion-android-delete trash"></i></a></div>
                                    </td>
                                </tr>
                                <tr class="logo-background">
                                    <td id="img-div">
                                        <div></div>
                                    </td>
                                    <td>
                                        <div class="text-justify job-logo-text">
                                            <h3><strong>Web Development</strong></h3>
                                            <h4>AmaliTech Takoradi</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="close-logo"><a href="#"><i class="icon ion-android-delete trash"></i></a></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     <?php include "includes/dashboard_footer.php";?>