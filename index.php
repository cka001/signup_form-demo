<!DOCTYPE html>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MHDBL2WP5S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MHDBL2WP5S');
</script>
<title>SignUp Form</title>
<style>
    input[type="email"]:valid{
        outline: 2px solid green;
    }
    input[type="email"]:invalid{
        outline: 2px solid red;
    }

    label {
		display:block;
		
	}
			
            input {
                width: auto;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
			
		input[type=text]:focus {
		background-color:  #f1e3dd;
			}

			input[type=password]:focus {
				background-color: #f1e3dd;
			}
			
            input[type=submit],input[type=reset] {
                width: 40%;
                background-color:#c94c4c;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                opacity: 0.8;
            }

            article {
                border-radius: 10px;
                background-color: #f7cac9;
                padding: 25px;
		margin:50px 400px;
            }
            

</style>
<script>
    function getValue() {

    var p = document.myform2.psw.value;
    var rp = document.myform2.rpsw.value;

    if (p != rp )
    {
    alert("Paswords do not match"); 
    return false;
    }
    }

</script>

</head>
<body style="background-color:#eea29a">
<u><h1 style="text-align:center; color:black;margin-bottom:-25px">SignUp</h1></u>
<article>
    <form name="myform2" onsubmit="return getValue()" action="postgres-connect.php" method="get">
<div style="text-align:center">
     <label for="name">Enter Full Name:</label>
     <input type="text" id="name" name="name" required>

     <label for="name">Enter  Username:</label>
     <input type="text" id="name" name="uname" required>  

     <label for="myemail">Enter Email Address:</label>
     <input type="email" id="myemail" name="email" required><br> 

	<label for="mydate">Select Date of Birth:</label>
        <input type="date" id="mydate" name="date"><br>

    <label for="psw">Enter Password:</label>
        <input type="password" name="psw" minlength="6" required><br>

	<label for="rpsw">Confirm Password:</label>
        <input type="password" name="rpsw" minlength="6" required><br>

        <input type="submit" value="SignUp"/>
		</div>
    </form>
</article>

<script>
var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;       
document.getElementById("mydate").value = today;

</script>
</body>
</html> 



