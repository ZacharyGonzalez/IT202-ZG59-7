
<!DOCTYPE html>
<html>
<body style="background-color:dimgrey;">
    <H1>
        My Test Website
    </H1>

<script>
    console.log("console output")
    function thisaction(){
        var search=document.getElementById("search")
        console.log(search)
        alert(search)
    }
</script>
<input type="button" value="Click Me" onClick="thisaction()"/>

    
    <form method="GET">
        Search: <input type="text" name="search"/>
        <br />
        <input type="submit">
    </form>

    <form method="POST">
        Username: <input type="text" name="user"/>
        <br />
        Password: <input type="password" name="pass"/>
        <br />
        <input type="submit">
    </form>

    <?php
    if (    isset($_GET['user'])  ){
        echo 'username is ' .$_GET['user'];
        }
    ?>
    <br/>

       <?php
    if (    isset($_POST['pass'])  ){
        echo 'pass is ' .$_POST['pass'];
        }
    ?>
    <br/>

    <?php
    if (    isset($_GET['search'])  ){
        echo 'search is ' .$_GET['search'];
        }
    ?>
    <br/>
</body>
</html>
    

