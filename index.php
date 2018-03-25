<?php include 'view/headermain.php'; ?>
<meta http-equiv="refresh" content="0; url=view" />


<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/materialize.js"></script>
<script type="text/javascript" src="./js/init.js"></script>
<?php include 'view/footer.php'; ?>

<?php
require_once('model/fields.php');
require_once('model/validate.php');

$validate = new Register\Validate();
$fields = $validate->getFields();
$fields->addField('email', 'Must be a valid email address.');
$fields->addField('password', 'Must be at least 8 characters.');
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':
        $email = '';
        $password = '';
       
        
        include 'view/register.php';
        break;
    case 'register':
        // Copy form values to local variables
        $email = trim(filter_input(INPUT_POST, 'email'));
        $password = filter_input(INPUT_POST, 'password');
        $verify = filter_input(INPUT_POST, 'verify');
       
        // Validate form data
        $validate->email('email', $email);
        $validate->password('password', $password);
      

        // Load appropriate view based on hasErrors
        if ($fields->hasErrors()) {
            include 'view/register.php';
        } else {
            include 'view/success.php';
        }
        break;
}
?>