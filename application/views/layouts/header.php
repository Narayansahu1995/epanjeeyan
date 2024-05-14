<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Collector Guideline Rates Reports</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets2/img/favicon.png" rel="icon">
    <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets2/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets2/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets2/css/style.css" rel="stylesheet">

    <style>
    /* @media print{
      .datatable{
        display: none;
      }
    } */
    </style>
    <script type="text/javascript">
    // Function to refresh the page
    function refreshPage() {
        window.location.reload(true);
    }

    // Event listener to detect when the tab becomes visible
    document.addEventListener("visibilitychange", function() {
        if (!document.hidden) {
            refreshPage(); // Refresh the page when the tab becomes visible
        }
    });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function setupBeforeUnloadConfirmation() {
        window.addEventListener('beforeunload', function(event) {
            // Check if the event is triggered by closing the tab
            if (event && event.type === 'beforeunload' && event.target === window && event.returnValue ===
                null) {
                // Check for unsaved changes
                if (thereAreUnsavedChanges()) {
                    var confirmationMessage = 'It looks like you have been editing something. ' +
                        'If you leave before saving, your changes will be lost.';
                    event.returnValue = confirmationMessage;

                    // Trigger the AJAX call to save changes before leaving
                    saveChanges();
                    return confirmationMessage;
                }
            }
        });
    }

    function thereAreUnsavedChanges() {

        return true;
    }

    function saveChanges() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('HomeController/execute_query'); ?>",
            data: {
                /* data if needed */
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    window.onload = setupBeforeUnloadConfirmation;
    </script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/home" class="logo d-flex align-items-center">
                <!-- <img src="assets2/img/logo.png" alt=""> -->
                <span class="d-none d-lg-block" style="font-size: 21px;">Collector Guideline Rates</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->



                <li class="nav-item dropdown pe-3">



                    <button class="btn btn-secondary">

                        <a class="dropdown-item d-flex align-items-center" href="logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>

                    </button>

                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->


    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">



            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <!-- <a href="upload">
              <i class="bi bi-circle"></i><span>Upload Data</span>
            </a> -->
                    </li>
                    <li>
                        <a href="forms-search">
                            <i class="bi bi-circle"></i><span>Search</span>
                        </a>
                    </li>

                </ul>
            </li>


        </ul>

    </aside><!-- End Sidebar-->