<h1>MD5 Cracker</h1>
<p>This application takes an MD5 hash of four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
<pre>
    <?php 
        $goodtext = "Not found";
        echo("Hi");

        if (isset($_GET['md5'])) {
            $time_pre = microtime(true);
            $md5 = $_GET['md5'];

            $num = "1234";
            $show = 15;

            for($i=0; $i<strlen($num); $i++ ) {
                $ch1 = $num[$i];
                print "$ch1";
                
                for($j=0; $j<strlen($num); $i++ ) {
                    $ch2 = $num[$j];
                }

                $try = $ch1.$ch2;

                $check = hash('md5', $try);
            }
        }
    ?>
</pre>