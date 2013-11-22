<?php
require('includes/header.php');
?>

    <div id="container">
        
    </div>

    <script type="text/template" id="profile-template">
        <div class="ribbon">
            <p><%= username %></p>
        </div>
        <div class="profile-info">
            <p id="profileName" class="row"><label class="col-md-4">Name:</label><span><%= name %></span><input type="text" name="name" class="hidden" value="<%= name %>" /></p>
            <p id="profilePhone" class="row"><label class="col-md-4">Phone:</label><span><%= phone %></span><input type="text" name="phone" class="hidden" value="<%= phone %>" /></p>
            <p id="profileEmail" class="row"><label class="col-md-4">Email:</label><span><%= email %></span><input type="text" name="email" class="hidden" value="<%= email %>" /></p>
        </div>
        <button id="profileEdit" class="btn">Edit</button>
    </script>

<?php
require('includes/scripts.php');
?>

	<script type="text/javascript" src="js/views/profile.js"></script>

  </body>
</html>