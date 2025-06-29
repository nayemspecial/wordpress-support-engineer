<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style1.css">
    <title>Basic Form with Table Output</title>
</head>
<body>
        <div class="container">
        <div class="header">
            <h2>Student Information</h2>
        </div>
        <?php
        // ফর্ম সাবমিশন প্রসেসিং
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $newStudent = [
                'name' => htmlspecialchars($_POST['name']),
                'email' => htmlspecialchars($_POST['email']),
                'phone' => htmlspecialchars($_POST['phone'])
            ];
            
            // ডিফল্ট ডাটার সাথে নতুন ডাটা যোগ
            $students = [
                ['name' => 'Student Name 1', 
                'email' => 'student1@example.com', 
                'phone' => '123-456-7890'],
                ['name' => 'Student Name 2', 
                'email' => 'student2@example.com', 
                'phone' => '234-567-8901'],
                $newStudent // নতুন সাবমিশন যোগ হচ্ছে
            ];
        } else {
            // ডিফল্ট ডাটা
            $students = [
                ['name' => 'Student Name 1', 
                'email' => 'student1@example.com', 
                'phone' => '123-456-7890'],
                ['name' => 'Student Name 2', 
                'email' => 'student2@example.com', 
                'phone' => '234-567-8901']
            ];
        }
        ?>

        <div class="form-container">
            <form method="post" action="">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                
                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>


        <h3>Submitted Data:</h3>

        <table class="data-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Student Name 1</td>
                <td>student1@example.com</td>
                <td>123-456-7890</td>
            </tr>
            <tr>
                <td>Student Name 2</td>
                <td>student2@example.com</td>
                <td>234-567-8901</td>
            </tr>
            <tr>
                <td>Student Name 3</td>
                <td>student3@example.com</td>
                <td>345-678-9012</td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>