<html> <head>
    <title>Find a Student</title>
    </head> <body>
<div class="container"> <div class="row">
        <fieldset>
            <legend>Find a student by ID</legend>
            <form class="form-search form-inline" method=GET>
                <input placeholder="Type a student ID" type=text name="ID" id="id">
                <input type=submit value="Search" id="findsubmit">
            </form>
        </fieldset>
        
          </fieldset>
    </div>
    <div class="row" id="result">   </div>
</div>
<script language="javascript">
    $('#findsubmit').click(function() {
        $.get("/ecwm604/index.php/test_controller/lookupById",{id : $('#id').val() },function(data) {
            var bits = data.split(':');
            // the student's name should be the first element!
            $('#result').html('The student\'s name is ' +  bits[0] + " " + bits[1]);
        });
        return false;
    });
</script>
</body> </html>