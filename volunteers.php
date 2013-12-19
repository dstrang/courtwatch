<?php
require('includes/header.php');
?>
        <div id="container">
            <div class="col-md-6">
                <div class="row">
                    <form id="newVolunteerForm" class="admin-panel">
                        <h2 class="form-signin-heading">Add Volunteer</h2>
                        <input type="text" id="username" class="form-control" placeholder="User ID">
                        <button class="btn btn-lg btn-primary btn-block">Add</button>
                        <div class="login-error new-error" style="display:none;"></div>
                    </form>
                </div>
                <div class="row">
                    <form id="updatePassword" class="admin-panel">
                        <h2 class="form-signin-heading">Change Password</h2>
                        <input type="password" id="currentPassword" class="form-control" placeholder="Current Password">
                        <input type="password" id="newPassword" class="form-control" placeholder="New Password">
                        <input type="password" id="newPasswordConfirm" class="form-control" placeholder="Retype New Password">
                        <button class="btn btn-lg btn-primary btn-block">Update</button>
                        <div class="login-error pass-error" style="display:none;"></div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="form-signin-heading">Volunteers</h2>
                <div id="volunteerList">
                    <p>No Volunteers</p>
                </div>
            </div>
        </div>

        <script type="text/template" id="admin-volunteers-template">
            <div id="volunteerAccordion">

            </div>
        </script>

        <script type="text/template" id="admin-volunteer-template">
            <h3><%= username %></h3>
            <div>
                <p class="info-left">
                    Name: <%= name %><br />
                    Phone: <%= phone %><br />
                    Email: <%= email %>
                </p>
                <p class="info-right">
                    Admin: <input type="checkbox" value="admin" <% if(role == 'admin'){ %>checked<%}%> />
                    <input type="hidden" value="<%= username %>" />
                </p>
            </div>
        </script>

<?php
require('includes/scripts.php');
?>

	<script type="text/javascript" src="js/views/Volunteers.js"></script>

  </body>
</html>