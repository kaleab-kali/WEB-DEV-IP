<html>
<head>
<style><?php include 'style.css' ?></style>

</head>


<body>
            <?php 
             include 'header.php';
            ?>

    <main>
        <div class="readtext">
        <?php
            
            // using only readfile function
            echo readfile("sam_harris.txt");
            echo "<br/><br/>";
            // using fopen, fread, fclose function
            $myfile = fopen("sam_harris.txt", 'r') or die("unable to open file");

            echo fread($myfile, filesize("sam_harris.txt"));

            fclose($myfile);

            echo "<br/><br/>";
            // using fgets, fgetc, feof function
            $myfile = fopen("sam_harris.txt", 'r') or die("unable to open file");

            echo fgets($myfile);
            echo "<br/>";
            echo fgets($myfile);
            fclose($myfile);
            echo "<br/><br/>";
            //using loops
            $myfile = fopen("sam_harris.txt", 'r') or die("unable to open file");
            while(!feof($myfile)) {
                echo fgets($myfile) . "<br>";
            }
            fclose($myfile);
            //using fgetc


            echo "<br/><br/>";
        ?>


        </div>
        
        <div class="count">
            page counter: 
            <?php 
             //page text counter
            // Part 1
                $filename = "counter.txt";
                $count = file_get_contents($filename);
                if ($count == null){
                    $count = 0;
                }
                echo $count;
            // Part 2
                $count++;
                $update = fopen($filename, "w");
                    fwrite($update, $count);
                fclose($update);
            ?>
        </div>

    </main>
    <footer>
        <h4>END of IP2 LAB3 excersice</h4>
    </footer>

</body>
</html>

