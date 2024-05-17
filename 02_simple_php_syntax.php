<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SYNTAX</title>
</head>
<body>
    <p><center><?php 
        // TASK #1
        $name = 'Name:<strong> SHERELYN G. CUANAN</strong>'; 
        $age = 'Age: 20 yrs old';
        $address = 'Address: Larlin Village, Apalit, Pampanga';
        $hobbies = 'Hobbies: Listening to music and watching movies';
        $pet_peeve = 'Pet Peeve: Loud chewers';

        echo $name, '<br>'; 
        echo $age, '<br>'; 
        echo $address, '<br>'; 
        echo $hobbies, '<br>'; 
        echo $pet_peeve, '<br>','<br>','<hr>'; 


        // TASK #2
        // echo $hobbies, '<br>'; 
        // echo $pet_peeve, '<br>'; 


        // TASK #3
        define('NAME','Sherelyn Cuanan');
        define('AGE','20 yrs old');
        define('ADDRESS','Pampanga City');
        define('HOBBIES','Listening to music and watching movies');
        define('PET_PEEVE','Loud chewers');

        echo NAME, '<br>';
        echo AGE, '<br>';
        echo ADDRESS, '<br>';
        echo HOBBIES, '<br>';
        echo PET_PEEVE, '<br>','<br>', '<hr>';


        // TASK #4
        echo '<pre>';
        var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE);
        echo '</pre>';


        /* TASK #5
        I hate hearing loud chews, it bothers and distracts me :)   */
        ?>
    </center></p>
</body>
</html>