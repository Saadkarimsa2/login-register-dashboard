<?php
session_start();

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    $response = array();

    if (session_destroy()) {
        $response['success'] = true;
        $response['message'] = 'Logged out successfully';
    } else {
        $response['success'] = false;
        $response['message'] = 'Logout failed';
        header('Location: page_login.php');
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}
?>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav header-left">
                    <li class="nav-item mx-2">
                        <a class="nav-link bell dz-theme-mode" href="#">
                            <i id="icon-light" class="fa fa-sun-o"></i>
                            <i id="icon-dark" class="fa fa-moon-o"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link bell dz-fullscreen" href="#">
                            <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                            </svg>
                            <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize">
                                <path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav header-right">
                    <li class="nav-item mx-2">
                        <a href="email-inbox.html" class="nav-link ai-icon">
                            <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span class="ml-2">Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="logout.php" class="nav-link ai-icon">
                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span class="ml-2">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="sub-header">
            <div class="d-flex align-items-center flex-wrap mr-auto">
                <h5 class="dashboard_bar">Dashboard</h5>
            </div>
            <div class="d-flex align-items-center">
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('logout-button').addEventListener('click', function(event) {
    event.preventDefault();
    fetch('header.php?logout=true', {
        method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = 'page_login.php';
        } else {
            alert('Logout failed: ' + data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});
</script>
