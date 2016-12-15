<?php include('header.php'); 



    $id = $_GET['id'];

    $sql = " SELECT * FROM functions
                WHERE function_id = $id "  ;
   

    $objQuery = mysql_query($sql);
    $row = mysql_fetch_array($objQuery);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Menu</title>

    
</head>

<body>

    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Change Menu</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post"  action="function/change_menu.php">
                            <fieldset>
                                <input type="hidden" class="form-control input-md" placeholder="id" name="id" id="id" value="<?=$id ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" placeholder="Name_TH" name="txtName_TH" id="txtName_TH" value="<?=$row['name'] ?>">
                                </div>
                                <div class="form-group">
                                   <input type="text" class="form-control input-md" placeholder="Name_EN" name="txtName_EN" id="txtName_EN" value="<?=$row['name_en'] ?>" >
                                </div>
								<div class="form-group">
                                   <input type="text" class="form-control input-md" placeholder="URL" name="function_uri" id="function_uri" value="<?=$row['function_uri'] ?>" >
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                 <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
                             
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
