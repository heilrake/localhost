<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image</title>
  </head>
  <header>
    <ul style="display: flex; gap: 30px">
      <li><a href="email.php">Email</a></li>
      <li><a href="picture.php">Picture of author</a></li>
      <li><a href="index.php">Home</a></li>
    </ul>
  </header>
  <body>
    <div
      style="
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      "
    >
      <div style="display: flex; flex-direction: column; gap: 20px">
        <img
          src="./avatar.jpg"
          alt="image user"
          style="width: 450px; height: 450px"
        />
      </div>
    </div>
  </body>
</html>
