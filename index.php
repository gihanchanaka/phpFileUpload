<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <form class="container" enctype="multipart/form-data" action="index.php" method="post">

        <div class="computation">
            <input id="op-code" name="op-code" type="textarea" value="" placeholder="Operation here. eg: C = A+B"/>
            <br>
            <input id="btnCompute" type="submit" value="Compute" name="submit"/>
        </div>

        <div class="container-variables">
            <div class="variable-list">
            <ul>
                <li>
                    <fieldset class="field-group">
                        <input class="input-fields" id="var-name" name="var-name" type="text" value="" placeholder="Variable Name"/>
                        <input class="btn-input-file" id="file-1" name="file-1" type="file" value="" placeholder="Variable File"/>
                    </fieldset>
                </li>
                 <li>
                    <fieldset class="field-group">
                        <input class="input-fields" id="var-name" name="var-name" type="text" value="" placeholder="Variable Name"/>
                        <input id="file-2" name="file-2" type="file" value="" placeholder="Variable File"/>
                    </fieldset>
                </li>
            </ul>
        </div>

        <button id="btnAppendList" type="button">Add new Variable</button>
        </div>
    </form>
</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/index.js"></script>

</html>

<?php

if(isset($_POST['submit'])) {
    $target = "uploads/";

    $x = 1;

		// need to fix the counter to get no of variable user added
    while($x < 3){

            $file_name = $_FILES["file-{$x}"]['name'];
            $tmp_dir = $_FILES["file-{$x}"]['tmp_name'];

 						// change this to the file type you need
            if(!preg_match('/(txt|xml)$/i', $file_name)){
                echo "sorry that file type is not allowed";
            } else {
                move_uploaded_file($tmp_dir, $target . $file_name);
                echo "The file was uploaded successfully<br><br>";
            }

        $x++;

        }

}

?>
