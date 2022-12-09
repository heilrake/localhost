<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>email</title>
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
      <div>
        <h3 class="fcf-h3">Контакти</h3>
        <form
          id="fcf-form-id"
          class="fcf-form-class"
          method="post"
          action="contact-form-process.php"
        >
          <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
              <input
                type="text"
                id="Name"
                name="Name"
                class="fcf-form-control"
                required
              />
            </div>
          </div>

          <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
              <input
                type="email"
                id="Email"
                name="Email"
                class="fcf-form-control"
                required
              />
            </div>
          </div>

          <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
              <textarea
                id="Message"
                name="Message"
                class="fcf-form-control"
                rows="6"
                maxlength="3000"
                required
              ></textarea>
            </div>
          </div>

          <div class="fcf-form-group">
            <button
              type="submit"
              id="fcf-button"
              class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block"
            >
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>