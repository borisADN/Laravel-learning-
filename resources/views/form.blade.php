<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" >
        <fieldset >
            <legend>Form </legend>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required> <br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Submit"> 
            Lorem ipsum dolor sit amet consectetur adipisicing.
        </fieldset>
        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">Select a country</option>
            <option value="US">United States</option>   
            <option value="UK">United Kingdom</option>
            <option value="CA">Canada</option>
            <option value="MX">Mexico</option>
        </select>

<input type="text" name="names" id="" list="names">
        <datalist id="names">
            <option value="John Doe"> John Doe</option >
            <option value="Jane Doe"> Jane Doe</option>

            <option value="Alice Doe"> Alice Doe</option>
            <option value="Bob Smith"> Bob Smith</option>
        </datalist>
    </form>
</body>
</html>