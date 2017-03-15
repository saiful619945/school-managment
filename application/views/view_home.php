<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="http://localhost:8888/ci226/public/jquery/jquery-ui.min.css">
        <script src="http://localhost:8888/ci226/public/jquery/external/jquery/jquery.js"></script>
        <script src="http://localhost:8888/ci226/public/jquery/jquery-ui.min.js"></script>
         <script>
         $(function  () {
             $("#tabs").tabs();
             $("#tabs-2").one("click",function () {
                      
             $.get( "http://localhost:8888/ci226/home/getteacher", function( data ) {
                data.map(function  (e) {
                    var id = e["id"];
                    $(".teacher").append(`<option value=${id}>${e["name"]}  </option>`)
                });
            }, "json" );

         });
         });
          
        
         </script>
    </head>
    <body>

        <div id="tabs">
            <ul>
                
                <li><a href="#tabs-1" id="t1">Add student</a></li>
                <li><a href="#tabs-2" id="t2">Class Distribution</a></li>
            </ul>
            
            <div id="tabs-1">
                <form method="post">
                    <label>Name</label><br><br>
                    <input name="name" type="text"/><br><br>
                    <label>Guardian name </label><br><br>
                    <input name="guardianName" type="text"/><br><br>
                    <label>Mobile</label><br><br>
                    <input name="mobile" type="text"/><br><br>
                    <label>Address</label><br><br>
                    <input name="address" type="text"/><br><br>
                    <label>Enroll class</label><br><br>
                    <select name="class">

                        <option value="1">One</option>
                        <option value="2">Two</option>
                        
                    </select>
                    <br><br>
                    <br><br>

                    <input type="submit" value="Submit" name="studentSubmit">
                </form>
            </div>
            <div id="tabs-2">
                <form method="post">
                    <select name="class" id="cl">
                        <option disabled selected value> -- Select an Class -- </option>

                        <option value="class_1">Class one</option>
                        <option value="class_2">Class Two</option>
                        
                    </select>
                    <br><br>
                    <br><br>
                    <div id="clr">
                        <label>English teacher</label>
                        
                        <select name="engTeacher" class="teacher">
                            <option disabled selected value> -- select an option -- </option>

                        </select>
                        <br><br>
                        <br><br>
                        <label>Bengali teacher</label>
                        
                        <select name="benTeacher" class="teacher">
                            <option disabled selected value> -- select an option -- </option>

                        </select>
                        <br><br>
                        <br><br>
                    </div>
                    <br><br>
                    <br><br>

                    <input type="submit" value="Submit" name="rouSubmit">
                </form>
            </div>
            
        </div>
            </body>
</body>
</html>
