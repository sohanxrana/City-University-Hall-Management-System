<?php
 session_start();
 ?>             
                <!---------------------------------------------- Header Profile Menu Section Start --------------------------------------------->
                <?php if (isset($_SESSION['user_id'])): ?>
			    <div id="welcomeMessage" class="welcome-message">
			      Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
			    </div>
			    <?php endif; ?>

			    <div class="header">
			    <?php if (isset($_SESSION['user_id'])): ?>
			        <!-- Profile icon and dropdown for logged-in users -->
			        <div class="profile-container">
			            <div class="profile-icon" onclick="toggleDropdown()">👤</div>
			            <div id="dropdownMenu" class="dropdown-menu">
			                <a href="../view/Student/dashboard.php"><span class="icon">🏠</span>Dashboard</a>
			                <a href="view/notifications.php"><span class="icon">🔔</span>Notifications</a>
			                <a href="view/profile.php"><span class="icon">👤</span>Profile</a>
			                <a href="view/profile_settings.php"><span class="icon">⚙️</span>Settings</a>
			                <a href="../controller/auth/logout.php"><span class="icon">🚪</span>Logout</a>
			            </div>
			        </div>
			        <?php else: ?>
			        <!-- Login/Signup link for guests -->
			        <div class="combined-button">
			          <a href="../view/auth/signup.html" class="signup-btn" target="_blank"
			             title="Sign Up to Book Your Seat" aria-label="Sign Up to Book Your Seat">Sign Up</a>
			          <a href="../view/auth/login.html" class="login-btn" target="_blank"
			             title="Login to access your portal" aria-label="Login to access your portal">Login</a>
			        </div>
			        <?php endif; ?>
			    </div>
                <!---------------------------------------------- Header Profile Menu Section End --------------------------------------------->

</body>

</html>
