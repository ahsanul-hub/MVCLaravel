<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <main>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method="POST">
            @csrf
            <label for="first-name">First Name:</label><br><br>
            <input type="text" name='firstname'><br><br>
            <label for="last-name">Last Name:</label><br><br>
            <input type="text" name='lastname'><br><br>
            <label for="gender">Gender:</label><br><br>
            <input type="radio" name="jk" value="male"/> Male <br>
            <input type="radio" name="jk" value="female"/> Female <br>
            <input type="radio" name="jk" value="other"/> Other <br> <br>

            <label for="nationality">Nationality:</label><br><br>
            <select>
                <option value="indonesian">Indonesian</option>
                <option value="other">Other</option>
            </select>
            <br><br>
            <label for="language">Language Spoken:</label><br><br>
            <input type="checkbox">Bahasa Indonesia <br>
            <input type="checkbox">English  <br>
            <input type="checkbox">Other <br>
            <br><br>
            <label for="bio">Bio:</label><br><br>
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Sign Up">
        </form>
    </main>
    
</body>
</html>