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
        // ভেরিয়েবল ডিফাইন করা
        $name = $email = $phone = '';
        $students = [];
        
        // ফর্ম সাবমিট হলে ডাটা প্রসেসিং
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            // ফর্ম ডাটা ভ্যালিডেশন ও স্যানিটাইজেশন
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            
            // সেশন শুরু করা (যদি আগে না শুরু হয়ে থাকে)
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            
            // সেশনে স্টুডেন্ট অ্যারে তৈরি করা
            if (!isset($_SESSION['students'])) {
                $_SESSION['students'] = [];
            }
            
            // নতুন স্টুডেন্ট যোগ করা
            if (!empty($name) && !empty($email) && !empty($phone)) {
                $newStudent = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone
                ];
                
                array_push($_SESSION['students'], $newStudent);
            }
        }
        
        // সেশন থেকে স্টুডেন্ট ডাটা লোড করা
        if (isset($_SESSION['students'])) {
            $students = $_SESSION['students'];
        }
        ?>

        <div class="form-container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required>
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
                <?php
                // ডিফল্ট ডাটা (যদি কোনো সাবমিশন না থাকে)
                if (empty($students)) {
                    echo '
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
                    </tr>';
                } else {
                    // সাবমিট করা ডাটা দেখানো
                    foreach ($students as $student) {
                        echo '
                        <tr>
                            <td>'.$student['name'].'</td>
                            <td>'.$student['email'].'</td>
                            <td>'.$student['phone'].'</td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>