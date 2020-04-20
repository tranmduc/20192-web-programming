<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <form action="http://fit.hut.edu.vn/~trangntt/courses/wp" method="POST">
            <h1>Registration Form</h1>
            <label for="email">Email:</label>
            <input type="email" name="email" value="">
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="email" value="">
            <br/>
            <br>
            <label for="name">Name:</label>
            <input type="text" name="name" value="">
            <br>
            <br>
            <label>May we contact you?</label>
            <input type="radio" name="contactPref" value="Yes">
            <label for="Yes">Yes</label>
            <input type="radio" name="contactPref" value="No">
            <label for="No">No</label>
            <br>
            <br>
            <label>Please check all the ways you have traveled:</label>
            <br>
            <input type="checkbox" name="vehicle1" value="Walk">
            <label for="vehicle1">Walk</label>
            <input type="checkbox" name="vehicle2" value="Bicycle">
            <label for="vehicle2">Bicycle</label>
            <input type="checkbox" name="vehicle3" value="Car">
            <label for="vehicle3">Car</label>
            <input type="checkbox" name="vehicle4" value="Plane">
            <label for="vehicle4">Plane</label>
            <br>
            <br>
            <label for="accommodation">Indicate your preference for accommodations:</label>
            <select name="accommodation">
              <option value="fine">A fine hotel</option>
              <option value="cheap">A cheap hotel</option>
            </select>
            <br>
            <br>
            <label for="other">Any other comments?</label>
            <br>
            <textarea name="other" rows="8" cols="80"></textarea>
            <br>
            <br>
            <input type="submit" name="" value="Click to submit">
            <input type="reset" name="" value="Erase and Restart">
        </form>
    </body>
</html>

