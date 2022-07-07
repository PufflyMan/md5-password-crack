<h1>MD5 Cracker</h1>
<p>This application takes an MD5 hash of four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
<pre>
    <?php 
        $goodtext = "Not found";

        if (isset($_GET['md5'])) {
            $time_pre = microtime(true);
            $md5 = $_GET['md5'];

            $num = "1234";
            $show = 15;

            for($i=0; $i<strlen($num); $i++ ) {
                $ch1 = $num[$i];
                
                for($j=0; $j<strlen($num); $j++ ) {
                    $ch2 = $num[$j];

                    for ($k=0; $k < strlen($num); $k++ ) {
                        $ch3 = $num[$k];

                        for ($r=0; $r < strlen($num); $r++) {
                            $ch4 = $num[$r];

                            
                            $try1 = $ch1.$ch2;
                            $try2 = $ch3.$ch4;
                            $try = $try1.$try2;

                            $check = hash('md5', $try);

                            if ($check == $md5) {
                                $goodtext = $try;
                                break;
                            }

                            if ($show > 0) {
                                print "$check $try \n";
                                $show = $show - 1;
                            }
                        }
                    }
                }

            }

            $time_post = microtime(true);
            print "Elapsed time: ";
            print $time_post - $time_pre;
            print "\n";
        }
    ?>
</pre>
<p>
    PIN: <?= htmlentities($goodtext); ?>
</p>
<form>
    <input type="text" name="md5" size="60" />
    <input type="submit" value="Crack MD5" />
</form>