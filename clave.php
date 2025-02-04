
<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.0.2 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
	 
  </head>
  <body style="background-color: gray;">
	  
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <div style="border: 2px solid black;width:400px; height:250px;margin-left:300px;text-align:center; background-color:chocolate;margin-top:150px;border-radius: 10px;">
    <div class="fadeIn first">
	 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">
  <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
</svg>
	 
    </div>


	<form name="login" style="align-content:center">
       
            <tr>
                <th scope="row"><h2>Usuario</h2></th>
                <td>
                    <span class="cnt">
                        <input name="usuario" type="text" class="Input" value="" size="20" />
                    </span>
                </td>
            </tr>
            


			
			<tr>
                <th scope="row"><h2>Clave</h2></th>
                <td>
                    <span class="cnt">
                        <input name="password" type="text" class="Input" value="" size="20" /> <br><br>
                    </span>
                </td>
            </tr>
            





                    <span class="cnt">
                        <input value="Entrar" target="_parent" onclick="Login()" type="button" class="btn btn-primary" />
                    </span>
                </td>
            </tr>







            <tr>
                <th scope="row"><input type="reset" name="Borrar" id="Borrar" value="Reset"  class="btn btn-primary" /></th>
            </tr>
        </table>
    </form>
  </div>
</div>
</div>
<script language="JavaScript">
        function Login() {
           
            var usuario = document.login.usuario.value;
            var password = document.login.password.value;


			
            if (usuario == "profesor" && password == "1234") {
                window.location = "index2.php";
         
        }else if (usuario == "administrador" && password == "5678") {
                window.location = "index2.php";
         
        }else if (usuario == "secretaria" && password == "0123") {
                window.location = "index2.php";
         
        }else{
            alert("clave incorrecta");
        }

    }

</script>














    </body>
</html>








        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>



<!--!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
       
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body style="background-color: gray;">
        <div style="border: 2px solid black;width:400px; height:250px;margin-left:300px;text-align:center; background-color:chocolate;margin-top:150px;border-radius: 10px;">

         <form name="login">

            <tr>
               <th scope="row"><h3>Usuario</h3></th>
               <td>
                  <span class="cnt">

                      <input name="" type="text" class="Input" value="" size="20" style="border-radius: 10px;">
                  </span>

               </td>

            </tr>

            <tr>
                <th scope="row"><h3>Clave</h3></th>
                <td>
                    <span class="cnt">
                        <input type="text" name="" value="" size="20" style="border-radius: 10px;">
                    </span>
                </td>

            </tr>

           <br><br>
            <span class="cnt">

              <input type="button" value="Entrar" target="_parent" onclick="Login()" class="btn btn-primary">

            </span>
        
            <span class="cnt">

              <input type="button" value="Borrar" target="_parent" class="btn btn-danger">

            </span>








         </form>

        </div>

        <script language="javaScript">
            function Login(){

             var usuario = document.login.usuario.value;
             var password = document.login.password.value;


             if(usuario == "carlos" && password == "1234")
             window.location = "index2.php"


            }






        </script>











        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
