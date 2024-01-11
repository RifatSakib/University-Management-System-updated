
<?php 
 session_start();    
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

          

        function get_data() { 

            $datae = array(); 

            $datae[] = array( 

                'Name' => $_POST['name'] ,  

                  'email' => $_POST['email'] ,  
				 
                  'username' => $_POST['username'], 
				    
                  'password' => $_POST['password'],
           'confirmpassword' => $_POST['confirmpassword'],  				  
 

            ); 

            return json_encode($datae); 

        } 

          

               $name = "iqbal"; 

        $file_name = $name . '.json'; 

       

              if(file_put_contents( 

            "$file_name", get_data())) { 

                echo $file_name .' file created'; 

            } 

        else { 

            echo 'There is some error'; 

        } 

    } 
?> 