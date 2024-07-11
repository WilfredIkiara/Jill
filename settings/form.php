<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>
<body>
  <h1>PhP SMS</h1>

  <form method="post" action="send.php">
    <label for="number">Number</label>
    <input type="text" name="number" id="number">

    <label for="message">Message</label>
    <textarea name="message" id="message"></textarea>

    <fieldset>
      <legend>Provider</legend>
      <label>
        <input type="radio" name="provider" value ="infobid" checked /> Infobid
      </label>
      <br/>
      <label>
        <input type="radio" name = "provider" value="twilio">Twilio
      </label>
    </fieldset>
    <button>Send</button>
  </form>

</body>
</html>