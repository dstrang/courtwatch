<?php
require('includes/header.php');
?>

    <div id="container">
        
    </div>

    <script type="text/template" id="profile-template">
        <p>userID: <%= username %></p>
        <p id="profilePhone">phone: <span><%= phone %></span><input type="text" name="phone" class="hidden" value="<%= phone %>" /></p>
        <p id="profileEmail">email: <span><%= email %></span><input type="text" name="email" class="hidden" value="<%= email %>" /></p>
        <button id="profileEdit" class="btn">Edit</button>
    </script>

<?php
require('includes/scripts.php');
?>

	<script type="text/javascript" src="js/views/profile.js"></script>

  </body>
</html>