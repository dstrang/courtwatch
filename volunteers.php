<?php
require('includes/header.php');
?>
        <div id="container">
            <div class="row">
                <div class="col-md-4">
                    <form id="newVolunteerForm" class="form-signin">
                        <h2 class="form-signin-heading">Add Volunteer</h2>
                        <input type="text" id="username" class="form-control" placeholder="User ID">
                        <button class="btn btn-lg btn-primary btn-block">Add User</button>
                        <div class="login-error" style="display:none;"></div>
                    </form>
                </div>
                <div class="col-md-8">
                    <h2 class="form-signin-heading">Volunteers</h2>
                    <div id="volunteerList">
                        <p>No Volunteers</p>
                    </div>
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