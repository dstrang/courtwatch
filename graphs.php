<?php
require('includes/header.php');
?>
        <div id="container">
            <div class="col-md-6">
                <div id="graphList">
                    <button id="judgeGenderBreakdown" class="btn btn-lg btn-primary btn-block graphButton">Judge Gender Breakdown</button>
                    <button id="judgeGenderBreakdown" class="btn btn-lg btn-primary btn-block graphButton">Petitioner Gender Breakdown</button>
                    <button id="judgeGenderBreakdown" class="btn btn-lg btn-primary btn-block graphButton">Respondent Gender Breakdown</button>
                    <button id="judgeGenderBreakdown" class="btn btn-lg btn-primary btn-block graphButton">Litigated Issues Breakdown</button>
                    <button id="judgeGenderBreakdown" class="btn btn-lg btn-primary btn-block graphButton">Domestic Violence Allegations</button>

                </div>
            </div>
            <div class="col-md-6">
                <div id="graph" style="height:400px;width:500px; "></div>
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

	<script type="text/javascript" src="js/views/graphs.js"></script>
    <script type="text/javascript" src="js/jquery.jqplot.min.js"></script>
    <script type="text/javascript" src="js/jqplot.pieRenderer.min.js"></script>

  </body>
</html>