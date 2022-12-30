
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form </title>
<style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
.container {
  border: 2px solid #000;
  position: relative;
  max-width: 700px;
  width: 100%;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .inputs {
  width: 100%;
  margin-top: 20px;
}
.inputs label {
  color: #333;
}
.form :where(.inputs input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.inputs input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(55, 16, 248);
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(45, 10, 217);
}
.form button:hover {
  background: rgb(44, 12, 206);
}
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}

</style>
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="simple.php" class="form" method="POST">
        <div class="inputs">
          <label>Username</label>
          <input type="text" placeholder="username" name="uname" required />
        </div>

        <div class="inputs">
          <label>Email Address</label>
          <input type="text" placeholder="Email address" name="email" required />
        </div>

        <div class="column">
          <div class="inputs">
            <label>Phone Number</label>
            <input type="number" placeholder="Phone number" name="pno" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender"  value="Male" checked />
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="Female" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" value="Other" />
              <label for="check-other">Other</label>
            </div>
          </div>
        </div>
        <div class="inputs address">
          <label>Address</label>
          <input type="text" placeholder="Street address" name="address" required />
          <div class="column">
            <input type="text" placeholder="City name" name="city" required />
          </div>
          <div class="column">
            <input type="number" placeholder="Postal code" name="pcode" required />
          </div>
        </div>
        <button type="submit" name="submit">submit</button>
      </form>
    </section>
  </body>
</html>