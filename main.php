<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src = "img/1288500561397.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Я из города', ' ', $city;   
                        // очень устал с этим всем разбираться ;  тяжело в учении - легко в бою  
                    ?>                                    
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>
                
            <div class="knowledge">
                               
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        $c++;
                        $c-=21;
                        $pont = $c == $a ? ', $c и $a равны' : ', $c и $a неравны';
                        echo $c ;  
                        echo $pont; 
                                   
                        ?>   <br>                
                     <?php
                        echo $d
                        /* незнаю что ещё сказать,
                        так что ничего я вам не скажу.
                        */ 
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Боль сама по себе очень больна
                    Я считаю крайне болезненным отказываться объяснять свою боль. Это весело для удовольствия с некоторыми неприятностями!
                    Мы можем быть менее мудры, восхваляя наиболее достойных рождения и избрания, но обвиняя в этом всю семью.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>