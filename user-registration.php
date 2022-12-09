<style>
    form{
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    form label{
        display: block;
        margin-bottom: 5px;
    }
    form input{
        display: block;
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
</style>


<form action="" method="post" >
    <label for="userName">User Name</label>
    <input type="text" name="userName"  placeholder="userName" value="" required="true"><br>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="email"  value="" required="true"><br>
    <label for="gender">Gender</label>
    <input type="text" name="gender" placeholder="gender" required="true"><br>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="password"  value="" required="true"><br>
    <label for="confirm_password">Confirm Password</label>
    <input type="password" name="confirm_password" placeholder="confirm-password"  value="" required="true"><br>

    <input type="submit" name="submit" value="Register">

</form>