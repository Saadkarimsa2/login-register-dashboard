<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <?php if ($_SESSION): ?>
                <h5>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?></h5>
            <?php else: ?>
                <h5>Hello, Guest</h5>
            <?php endif; ?>
        
            <ul class="metismenu" id="menu">
                <li class="nav-label first">Main Menu</li>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'mm-active' : ''; ?>">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contact-list.php') ? 'mm-active' : ''; ?>">
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Contact</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="contact-list.php">Contact List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
