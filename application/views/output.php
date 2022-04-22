<main class="container-fluid m-auto">
      <div class="container-md">
          <table class="table table-success table-striped align-center">
              <Tr>
                <td>
                    <p>Hasil Output : </p>
                            <?php
                            error_reporting(E_ERROR | E_PARSE);
                            $n = $_POST['n'];
                            $m = $_POST['metode'];

                            if (is_null($n) && is_null($m)) {
                                echo"Maaf Output error karena Tidak ada variabel yang masuk";
                            }

                            else{
                            if ($m == "31") {
                                echo"Bilangan Fibonacci <br>";
                                $x = 0;    
                                $y = 1; 
                            
                                for($i=0;$i<=$n;$i++)    
                                {    
                                    $z = $x + $y;    
                                    echo $z.", ";         
                                    $x=$y;       
                                    $y=$z;     
                                }   
                            }
                            elseif ($m == "32") {
                                echo"Bilangan Prima <br>";
                                for( $i = 2; $i <= $n; $i++ )
                                {
                                    for( $k = 2; $k < $i; $k++ )
                                    {
                                        if( $i % $k == 0 )
                                    {
                                    break;
                                    }
                            
                                    }
                                    if( $k == $i )
                                    echo $i.", ";
                                }
                            }
                            }
?> 
</td>
</Tr>
</table>
      </div>
</main>
