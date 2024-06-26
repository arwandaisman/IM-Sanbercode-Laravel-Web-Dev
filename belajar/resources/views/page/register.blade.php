<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
  </head>
  <body>
  <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
      @csrf
      <label>Frist Name:</label><br />
      <input type="text" name="frist" /><br /><br />
      <label>Last Name:</label><br />
      <input type="text" name="last" /><br /><br />
      <label>Gender:</label><br />
      <input type="radio" name="gender" />Male<br /><br />
      <input type="radio" name="gender" />Female<br /><br />
      <input type="radio" name="gender" />Other<br /><br />
      <label>Nationality:</label><br />
      <select name="nationality">
        <option value="indonesia">Indonesia</option>
        <option value="singapura">Singapura</option>
        <option value="malaysia">Malaysia</option>
        <option value="australia">Australia</option>
      </select>
      <br /><br />
      <label>Language Spoken:</label><br />
      <input type="checkbox" name="language" /> Bahasa Indonesia<br />
      <input type="checkbox" name="language" /> English<br />
      <input type="checkbox" name="language" /> Other<br />
      <br />
      <label>Bio:</label><br />
      <textarea name="biografi" rows="10" cols="30"></textarea>
      <br /><br />
      <input type="submit" />
    </form>

  </body>
</html>
