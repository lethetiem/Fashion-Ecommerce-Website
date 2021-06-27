
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <title>Login to admin page</title>      
</head>
<body>
    <div class="login">
        <div class="login-triangle"></div>
        
        <h2 class="login-header">HEARTUALL</h2>

        <form id="login-admin"method="POST" action="/SaleOnlineWebDeveloper/admincp/ajax.php" class="login-container">
            <p><input type="text" placeholder="Admin" id="username" name="username"></p>
            <p><input type="password" placeholder="Password" id="password" name="password"></p>
            <p><input type="submit" id="dangnhap" value="Log in"></p>
            
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#login-admin").submit(function(event){
            event.preventDefault();
            var username = $("#username").val();
            var password = $("#password").val();
            if(username == "" || password == ""){
                alert('Please fill in the blanks');
            }
            else{
                
                $.ajax({
                type: "POST",
                url:'/SaleOnlineWebDeveloper/admincp/ajax.php' ,
                data:  $( this ).serializeArray(),
                success: function(msg){
                alert(msg);
            },    
            });
            }
        });
    });
    </script>
</body>
</html>