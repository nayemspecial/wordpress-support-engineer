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
        $name = $email = $phone = '';
        $students = [];

        if( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
           $name = $_POST['name'];
           $email = $_POST['email'];
           $phone = $_POST['phone'];

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
                    'phone'=> $phone
           ];

                array_push($_SESSION['students'], $newStudent);
           }
           
           if( isset($_SESSION['students'] )){
                $students = $_SESSION['students'];
           }
        }


        
        ?>

        <div class="form-container">

            <form method="POST" action="">
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

        

        <div class="header">
            <h2>Submitted Data</h2>
        </div>
        <table class="data-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php if( empty($students) ): ?>
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
            <?php else: ?>
                <?php foreach( $students as $student ): ?>
                    <tr>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td><?php echo $student['phone']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
        </table>
    </div>
</body>
</html>