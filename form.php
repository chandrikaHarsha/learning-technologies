<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
    <style>
      body {
        background: #ddd;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
          sans-serif;
        margin-bottom: 100px;
      }

      .formContainer {
        margin: auto;
        width: 1200px;
        display: flex;
        justify-content: space-evenly;
        box-shadow: 0 5px 10px grey;
        padding: 80px 250px;
        box-sizing: border-box;
        border-radius: 10px;
        background-color: #cc460895;
        color: #fff;
      }
      .input {
        width: 600px;
        height: 40px;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
      }
      label {
        font-size: 18px;
        font-weight: 500;
        margin-right: 30px;
      }
      .textArea {
        width: 50%;
        height: 100px;
      }
      select {
        width: 250px;
        height: 40px !important;
        text-align: justify;
        font-size: 16px;
        color: #555;
        padding: 10px;
        border: none;
      }
      .submit {
        width: 150px;
        height: 40px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 10px;
        background-color: #fff;
        color: #e84601;
        border: none;
        margin-top: 50px;
        padding: 5px 0px;
        box-sizing: border-box;
        margin-left: 250px;
        cursor: pointer;
        box-shadow: 0 10px 10px #eeeeee60;
      }
      input[type="file"]::file-selector-button {
        width: 150px;
        color: #e84601;
        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <h1 style="text-align: center; margin-top: 50px; color: #555">
      Enquiry Form
    </h1>
    <div class="formContainer">
      <form method="post">
        <label for="uName">Name</label>&nbsp;&nbsp;
        <input
          type="text"
          placeholder="Enter your name"
          name="uName"
          class="input"
          required
        /><br /><br />
        <label for="uEmail">Email</label>&nbsp;&nbsp;
        <input
          type="email"
          placeholder="Enter your email"
          name="uEmail"
          class="input"
          required
        /><br /><br />

        <label for="uContact">Contact Number</label>&nbsp;&nbsp;
        <input
          type="tel"
          placeholder="Enter your contact"
          name="uContact"
          class="input"
          required
        /><br /><br />

        <label for="uPassword">Password</label>&nbsp;&nbsp;
        <input
          type="password"
          placeholder="Enter password"
          name="uPassword"
          class="input"
          required
        /><br /><br />
        <br /><br />

        <label for="uGender">Gender</label>&nbsp;&nbsp;
        <input type="radio" name="uGender" value="M" required />
        Male
        <input type="radio" name="uGender" value="F" required />
        Female
        <br /><br />
        <label for="uSkills">Skills</label>
        <input type="checkbox" name="uSkill1" />HTML
        <input type="checkbox" name="uSkill1" />CSS
        <input type="checkbox" name="uSkill1" />PHP
        <input type="checkbox" name="uSkill1" />MySQL
        <input type="checkbox" name="uSkill1" />JS
        <input type="checkbox" name="uSkill1" />Database
        <br />
        <br />
        <label for="uAddress">Address</label>&nbsp;&nbsp;
        <input
          type="text"
          placeholder="Enter Address"
          name="uAddress"
          class="input"
        /><br /><br />
        <label for="uEnquiry">Enquiry</label>&nbsp;&nbsp;
        <textarea
          placeholder="Your Enquiry"
          name="uEnquiry"
          class="textArea"
        ></textarea>
        <br /><br />
        <label for="uImage">Upload Image</label>
        <input type="file" name="uImage" />
        <br /><br />
        <label for="qualification">Qualification</label
        >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="qualification">
          <option value="q1">Qualification</option>
          <option value="q2">10 <sup>th</sup></option>
          <option value="q3">12<sup>th</sup></option>
          <option value="q4">UG</option>
          <option value="q5">PG</option>
          <option value="q6">Diploma</option>
        </select>
        <br /><br />
        <input type="submit" value="Submit" class="submit" />
      </form>
    </div>
  </body>
</html>
