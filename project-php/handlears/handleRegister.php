

<?php 

session_start();
include '../core/functions.php' ;
include '../core/validatons.php' ;

$erorrs =[];

if (checkReaquestMethod("POST") && checkPostInput('name') ){
   

    foreach($_POST as $key => $value){
        // $$key . " : " .$value . '<br>';
        $$key =  sanitizeInput($value);

    }
    //  echo $name ;

    //Validation 
    //name => required , min:3 , max:25 

   if(! requiredVal($name)){
    $erorrs[]= 'name is required' ;
   }elseif(! minVal($name,3)){
    $erorrs[]=  'name must be grater than 3 chars' ;

   }elseif(! maxVal($name,25)){
    $erorrs[]= 'name must be smaller  than 25 chars' ;

   } 


    //email => required , email 

   if(! requiredVal($email)){
    $erorrs[]= 'email is required' ;
   }elseif(! emailVal($email)){
    $erorrs[]=  'plz type a valid email' ;

   } 


      //password => required , min: 6, max:20

   if(! requiredVal($password)){
    $erorrs[]= 'password is required' ;
   }elseif(! minVal($password,6)){
    $erorrs[]=  'password must be grater than 6 chars' ;

   }elseif(! maxVal($password,20)){
    $erorrs[]= 'password must be smaller  than 20 chars' ;

   } 


 

   if(empty($erorrs)){

   //to save data in users.csv
    $users_file = fopen('../data/users.csv','a+');
    $data =[$name,$email,sha1($password)];
    fputcsv($users_file,$data);

    // redirect 
    $_SESSION['auth'] = true;
    //$_SESSION['auth'] = [$name,$email]; 
    $_SESSION['auth'] = [$name,$email];

    redirect("../index.php");
    die();




   }else{
    $_SESSION['errors'] = $erorrs;
        redirect('../register.php');
        die;
   }


   

   //var_dump($erorrs);
}


