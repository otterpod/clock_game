<html>
<?php
                $user = 'csc390_fa18_abel';
        $pass = 'T9PrGWAjpTD4Jqwy';
        $dbh = new PDO('mysql:host=localhost;dbname=csc390_fa18_abel', $user, $pass);
        //$checkemail = $_POST['email'];
                $sql = 'SELECT * FROM prize order by RAND() limit 1 '; //pull this from database
                $query = $dbh->prepare($sql);  //prepare
                $query->execute();                         //execute

                // Get the results! This will return one row. If no row was found for the ID they gav$
                $row = $query->fetch(PDO::FETCH_ASSOC);

                // Getting values out of the data structure returned by the database.
                $name = $row['title'];
                $description = $row['description'];
                $min_price = $row['min_price'];
                $max_price = $row['max_price'];
                $url = $row['image_url'];
               
                echo $url;

?>

</html>

