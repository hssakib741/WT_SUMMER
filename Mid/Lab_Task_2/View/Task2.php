<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Bank Management System</title>
  <style>
    body {
      background: #e6f0fa;
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    h1, h3 {
      text-align: center;
      color: #003366;
      margin: 5;
    }
    h3 {
      margin-bottom: 15px;
    }
    form {
      background: white;
      padding: 15px;
      width: 400px;
      border: 1px solid #ccc;
    }
    label {
      display: inline-block;
      width: 140px;
      margin-bottom: 8px;
      font-weight: bold;
      vertical-align: top;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"],
    select,
    textarea {
      width: 240px;
      margin-bottom: 10px;
      padding: 4px;
      box-sizing: border-box;
    }
    textarea {
        
      height: 50px;
      resize: none;
    }
    .gender-options {
      display: inline-block;
      width: 220px;
      margin-bottom: 10px;
    }
    .buttons {
      margin-left: 140px;
    }
    button {
      background: #007bff;
      color: white;
      border: none;
      padding: 7px 15px;
      margin-right: 10px;
      cursor: pointer;
    }
    .checkbox-container {
      margin-left: 140px;
      margin-bottom: 10px;
    }
    .demo-text {
      margin-top: 20px;
      width: 180px;
      height: 70px;
      overflow: scroll;
      border: 1px solid red;
      padding: 5px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <h1>Bank Management System</h1>
  <h3>Your Trusted Financial Partner</h3>

  <p style="font-weight: bold; font-family: Arial;">Customer Registration Form</p>
  <form>
    <div><label>Full Name:</label>
    <input type="text" /></div>
    <div><label>Date of Birth:</label>
    <input type="date" /></div>

    <div><label>Gender:</label>
      <span class="gender-options">
        <input type="radio" name="gender" /> Male
        <input type="radio" name="gender" /> Female
        <input type="radio" name="gender" /> Other
      </span>
    </div>

    <div><label>Marital Status:</label>
      <select>
        <option>Single</option>
        <option>Married</option>
      </select>
    </div>

    <div><label>Account Type:</label>
      <select>
        <option>Savings</option>
        <option>Current</option>
      </select>
    </div>

    <div>
        <label>Initial Deposit Amount:</label>
        <input type="text"/>
    </div>
    <div>
        <label>Mobile Number:</label>
        <input type="text"/>
    </div>
    <div>
        <label>Email Address:</label>
        <input type="email"/>
    </div>
    <div>
        <label>Address:</label>
        <textarea></textarea>
    </div>
    <div>
        <label>Occupation:</label>
        <input type="text"/>
    </div>
    <div>
        <label>National ID (NID):</label>
        <input type="text"/>
    </div>
    <div>
        <label>Set Password:</label>
        <input type="password"/>
    </div>
    <div>
        <label>Upload ID Proof:</label>
        <input type="file"/>
    </div>
    <div class="checkbox-container">
      <input type="checkbox"/> I agree to the terms and conditions
    </div>
    <div class="buttons">
      <button type="submit">Register</button>
      <button type="reset">Clear</button>
    </div>
  </form>

  <div class="demo-text">
    This is a demo text to show how overflow works in a small container with a vertical scrollbar.
  </div>
</body>
</html>
