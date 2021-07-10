<?php 
    require 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todo App server side</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="add-note">
        <form action="src/add.php" method="get">
            <input type="text" name="note" placeholder="add new note" autocomplete="off">
            <button type="submit" name="add">ADD</button>
        </form>
        </div>
        <?php 
            $notes = $conn->query("SELECT * FROM notes order by creation_date desc");
        ?>
        <div class="note-holder">
            <?php if($notes->rowCount() == 0){ ?>
                <div class="empty">
                    <h4>empty, add note</h4>
                </div>        
            <?php }else{ ?>
                <?php foreach ($notes as $note) { ?>
                    <div class="note">
                        <span class="note-id" style="display:none;" name="qq"><?php echo $note['id'];?></span>
                        <?php if($note['checked']){ ?>
                            <input type="checkbox" name="checked"  onChange="test2(this.parentNode)" checked>
                            <h3 class="checked"><?php echo $note['title'];?></h3>
                            <?php }else{ ?>
                                <input type="checkbox" name="checked" onChange="test(this.parentNode)">
                                <h3><?php echo $note['title'];?></h3> 
                            <?php } ?>
                        <small><?php echo $note['creation_date'] ;?></small>
                        <span class="close" onClick="getId(this.parentNode.childNodes[1].innerHTML)" alt="close"> x</span>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <footer id="a">
            <h3>created by necib seyf eddine</h3>
        </footer>
        <script src="./js/script.js"></script>
    </div>
</body>
</html>