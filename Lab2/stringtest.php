<html>
    <head>
        <title>
            Registration Form
        </title>
    </head>
    <body>
        <form name="FormName" action="/test.php" method="POST">
            Registration Form
            <div>
                Username:
                <input type="text" name="username" value="" />
            </div>
            <div>
                Password:
                <input size="15" maxlength="20" type="password" name="password" value="" />
            </div>
            <div>
                Full name:
                <input type="text" name="username" value="" />
            </div>
            <div>
                Gender: 
                <span>Male: <input type="radio" name="gender" value="male" checked="checked" /></span>
                <span>Female: <input type="radio" name="gender" value="female" /></span>
            </div>
            <div>
                Country: 
                <select name="Country" size="1">
                    <option>Vietnam</option>
                    <option>USA</option>
                    <option>Laos</option>
                </select>
            </div>
            <div>
                <input type="submit" name="" value="Click To Submit" />
                <input type="reset" name="" value="Erase and Restart" />
            </div>
        </form>
    </body>
</html>
