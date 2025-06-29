<?php 
    if( isset($_GET['accept_cookie']) ) {
        setcookie('cookie_accepted', 'yes', time() + ( 86400 * 30 ), "/");
        exit;
    }

?>

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
        $name = $email = $phone = $student_id = $group = $dob = $gender = $address = $photo = '';
        $students = [];
        $errors = [];
        $success = "";

        if( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
           $name = $_POST['name'];
           $email = $_POST['email'];
           $phone = $_POST['phone'];
           $student_id = $_POST['student_id'];
           $group = $_POST['group'];
           $dob = $_POST['dob'];
           $gender = $_POST['gender'] ?? '';
           $address = $_POST['address'];
           $photo = $_FILES['photo']['name'];

           if(session_status() == PHP_SESSION_NONE){
                session_start();
           }

           if( !isset($_SESSION['students'])){
                $_SESSION['students'] = [];
           }

           if( !empty($name) && !empty($email) && !empty($phone) ){
                $newStudent = [
                    'name' => $name,
                    'email'=> $email,
                    'phone'=> $phone,
                    'student_id'=> $student_id,
                    'group'=> $group,
                    'dob'=> $dob,
                    'gender'=> $gender,
                    'address'=> $address,
                    'photo'=> $photo
           ];

                array_push($_SESSION['students'], $newStudent);
           }
           
           if( isset($_SESSION['students'] )){
                $students = $_SESSION['students'];
           }

            if ( empty($name) ) $errors['name'] = "Name is required";

            if ( empty($email) ) $errors['email'] = "Email is required";
            elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) $errors['email'] = "Invalid email format";

            if ( empty($phone) ) $errors['phone'] = "Phone number is required";

            if ( empty($errors) && !empty($name) && !empty($email) && !empty($phone) ) $success = "New student added successfully!";
           


        }


        
        ?>

        <div class="form-container">

            <?php if ( isset($success) ): ?>
                <p style="color: green;"><?php echo $success ?></p>
            <?php endif; ?>

            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
                </div>

                <?php if ( isset($errors['name']) ): ?>
                    <p style="color:red;"><?php echo $errors['name']; ?></p>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>

                <?php if ( isset($errors['email']) ): ?>
                    <p style="color:red;"><?php echo $errors['email']; ?></p>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                </div>

                <?php if ( isset($errors['phone']) ): ?>
                    <p style="color:red;"><?php echo $errors['phone']; ?></p>
                <?php endif; ?>

                <!-- Student ID -->
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" id="student_id" name="student_id" value="<?php echo htmlspecialchars($student_id); ?>">
                </div>

                <!-- Group -->
                <div class="form-group">
                    <label for="group">Group</label>
                    <select id="group" name="group">
                        <option value="">-- Select Group --</option>
                        <option value="Science" <?php if( $group == 'Science' ) echo 'selected'; ?> >Science</option>
                        <option value="Commerce" <?php if( $group == 'Commerce' ) echo 'selected'; ?> >Commerce</option>
                        <option value="Arts" <?php if( $group == 'Arts' ) echo 'selected'; ?>>Arts</option>
                    </select>
                </div>

                <!-- Date of Birth -->
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>">
                </div>

                <!-- Gender -->
                <div class="form-group md-0">
                    <label>Gender</label><br>
                    <input type="radio" id="male" name="gender" value="Male" <?php if( $gender == "Male" ) echo 'checked'; ?> >
                    <label class="inline" for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="Female" <?php if( $gender == "Female" ) echo 'checked'; ?> >
                    <label class="inline" for="female">Female</label>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" value="<?php echo htmlspecialchars($address); ?>"></textarea>
                </div>

                <!-- Photo -->
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" id="photo" name="photo">
                </div>

                
                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>

        

        <div class="header">
            <h2>Submitted Data</h2>
        </div>
        <table class="data-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Student ID</th>
                <th>Group</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php if( empty($students) ): ?>
                <tr>
                    <td>Student Name 2</td>
                    <td>student2@example.com</td>
                    <td>234-567-8901</td>
                    <td>2023001</td>
                    <td>Science</td>
                    <td>2005-01-01</td>
                    <td>Male</td>
                    <td>Dhaka</td>
                    <td>studentA.jpg</td
                </tr>
                <tr>
                    <td>Student Name 3</td>
                    <td>student3@example.com</td>
                    <td>345-678-9012</td>
                    <td>2023002</td>
                    <td>Arts</td>
                    <td>2004-12-10</td>
                    <td>Female</td>
                    <td>Khulna</td>
                    <td>studentB.png</td>
                </tr>
            <?php else: ?>
                <?php foreach( $students as $student ): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($student['name']); ?></td>
                        <td><?php echo htmlspecialchars($student['email']); ?></td>
                        <td><?php echo htmlspecialchars($student['phone']); ?></td>
                        <td><?php echo htmlspecialchars($student['student_id']); ?></td>
                        <td><?php echo htmlspecialchars($student['group']); ?></td>
                        <td><?php echo htmlspecialchars($student['dob']); ?></td>
                        <td><?php echo htmlspecialchars($student['gender']); ?></td>
                        <td><?php echo htmlspecialchars($student['address']); ?></td>
                        <td><?php echo htmlspecialchars($student['photo']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
        </table>
    </div>
	
    <?php if( !isset($_COOKIE['cookie_accepted']) ): ?>
        <!-- Cookie Box -->
        <div class="cookie-box" id="cookieBox">
            <div>
                <p>
                    আমরা Cookie ব্যবহার করি যাতে আপনি আমাদের ওয়েবসাইটে ভালো এক্সপেরিয়েন্স পান। আপনি কি সম্মতি দিচ্ছেন?
                </p>
            </div>
            <div>
                <button onclick="acceptCookie()">Allow</button>
            </div>
        </div>
    <?php endif; ?>

    <script>
        function acceptCookie() {
            fetch('?accept_cookie=true').then(() => {
                document.getElementById('cookieBox').style.display = 'none';
            });
        }
    </script>

</body>
</html>