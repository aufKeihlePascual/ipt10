<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(0, 92, 120);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            width: 80%;
            max-width: 1000px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .left-side {
            flex: 1;
            background: #ececec;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .left-image {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transform: scaleY(1.55);
            margin-top: -500px;
        }
        .right-side {
            flex: 1;
            /* background: rgb(0, 105, 137), #5a67d8; */
            background: rgb(48, 68, 99);
            color: white;
            padding: 10px 0 0 30px;
            position: relative;
            
        }
        .right-side h1 {
            display: flex;
            justify-content: center;
        }
        .logo {
            max-width: 50px;
            display: block;
            margin: 0 auto 20px;
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: 90%;
            padding: 8px;
            border-radius: 4px;
            border: none;
            margin-bottom: 10px;
        }
        .gender {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 30px;
        }
        .gender label {
            margin-right: 80px;
            margin-bottom: 0;
            cursor: pointer;
        }
        .gender input {
            margin-right: -25px;
            cursor: pointer;
        }
        button {
            width: 30%;
            padding: 10px;
            background: rgb(255, 95, 0);
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            margin-right: 20px;
            font-weight: bold;
        }
        .button-group {
            display: flex;
            justify-content: center;
        }
        button:hover {
            background: rgb(255, 178, 0);
            transform: scale(1.1);
        }
        a {
            color: #cbd5e0;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="left-side">
            <img src="https://pbs.twimg.com/media/GLRb_qhaAAAuOvC.jpg" alt="Image" class="left-image">
        </div>
        <div class="right-side">
            <img src="https://www.auf.edu.ph/images/auf-logo.png" alt="AUF Logo" class="logo">
            <h1>Registration Form</h1>
            <form action="summary.php" method="POST">
                <div class="form-group">
                    <label for="name">Name <span style="color: red;">*</span></label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob">
                </div>

                <div class="form-group">
                    <label>Sex</label>
                    <div class="gender">
                        <label><input type="radio" name="sex" value="male"> Male</label>
                        <label><input type="radio" name="sex" value="female"> Female</label>
                        <label><input type="radio" name="sex" value="other"> Other</label>
                    </div>
                    
                </div>

                <div class="form-group">
                    <label for="email">Email <span style="color: red;">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="department">College Department</label>
                    <select id="department" name="department">
                        <option value="computer_science">Computer Science</option>
                        <option value="mathematics">Mathematics</option>
                        <option value="engineering">Engineering</option>
                        <option value="biology">Biology</option>
                        <option value="chemistry">Chemistry</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="program">Program</label>
                    <input type="text" id="program" name="program">
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" id="mobile" name="mobile">
                </div>

                <div class="form-group">
                    <div class="button-group">
                        <button type="reset">Reset</button>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        
    </div>
    
</body>
</html>