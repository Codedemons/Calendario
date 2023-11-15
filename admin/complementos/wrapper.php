<div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Admin Gelipop
                </a>
            </div>

            <ul class="nav">
                <li <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="active"' : ''; ?>>
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Principal</p>
                    </a>
                </li>
                <li <?php echo (basename($_SERVER['PHP_SELF']) == 'user.php') ? 'class="active"' : ''; ?>>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>Productos</p>
                    </a>
                </li>
                <li <?php echo (basename($_SERVER['PHP_SELF']) == 'table.php') ? 'class="active"' : ''; ?>>
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>