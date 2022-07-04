<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>TestFonction</title>
</head>
<body>
    <h1>Affichage</h1>
    <?php

    define("PI",3.14,false);
    echo" PI=",PI,"<br/>";
    if(define("SITE","https://www.ensah.ma/",false))
    echo"<a href=",SITE,">ENSAH</a>";


    echo "<br/>";
    // *******************************
    echo "<br/>";


    $tab=array(
        ['langage' =>'PHP','execution'=>'Coté serveur','heures'=>60],
        ['langage' =>'CSS','execution'=>'Coté client','heures'=>21],
        ['langage' =>'HTML','execution'=>'Coté client','heures'=>20]
    );
        
    for($i=0;$i<3;$i++){
        echo " langage :",$tab[$i]['langage']," <br />";
        echo " execution :",$tab[$i]['execution']," <br />";
        echo " heures :",$tab[$i]['heures']," <br />";
        }
       
        
     echo "<br/>";
     // *******************************
     echo "<br/>";

     $tab=[
        ['Etudiant'=>'Etudiant1','N1'=>12,'N2'=>18,'N3'=>13,'N4'=>15,'N5'=>6,'N6'=>11],
        ['Etudiant'=>'Etudiant2','N1'=>13,'N2'=>5,'N3'=>15,'N4'=>4,'N5'=>12,'N6'=>14],
        ];
    ?>
    <table>
        <tr>
            <td>Etudiant</td>
            <td>N1</td>
            <td>N2</td>
            <td>N3</td>
            <td>N4</td>
            <td>N5</td>
            <td>N6</td>
        </tr>
    
    <?php
    foreach ($tab as $value){
        echo "<tr><td>".$value['Etudiant']."</td>";
        for($i=1;$i<=6;$i++)
        if($value['N'.$i]<10)
        echo"<td class='rouge'>".$value['N'.$i]."</td>";
        else
        echo"<td>".$value['N'.$i]."</td>";
        echo"</tr>";
    }
    ?>
    </table>



    <?php
    
    echo "<br/>";
     // *******************************
    echo "<br/>";


    // $file1=fopen('01-03-2022.txt','a+');
    // $content1=fread($file1,filesize('01-03-2022.txt'));
    // echo $content1;
    
    // $file ="01-03-2022.txt";
    // $donnee=file($file);
    // echo $donnee[0]." - ".$donnee[1]." - ".$donnee[2];

    // echo "<br>";
    // echo "<br>";

    // $file ="02-03-2022.txt";
    // $donnee=file($file);
    // echo $donnee[0]." - ".$donnee[1]." - ".$donnee[2];

    // echo "<br>";
    // echo "<br>";

    // $file ="03-03-2022.txt";
    // $donnee=file($file);
    // echo $donnee[0]." - ".$donnee[1]." - ".$donnee[2];

    $nom_file="";
    $d=0;
    $j=0;
    $tab=[
        ['Etudiant'=>'Etudiant1','Absence'=>0],
        ['Etudiant'=>'Etudiant2','Absence'=>0],
        ['Etudiant'=>'Etudiant3','Absence'=>0],
        ['Etudiant'=>'Etudiant4','Absence'=>0],
        ['Etudiant'=>'Etudiant5','Absence'=>0]
    ];
    while(strcmp($nom_file,"03-03-2022.txt")){
        $d++;
        $nom_file='0'.$d."-03-2022.txt";
        if(file_exists($nom_file)){
            $donnee=file($nom_file);
            $j=0;
            while($j<=count($donnee)-1){
                for($i=0;$i<5;$i++){
                    if(trim($donnee[$j])==$tab[$i]['Etudiant'])
                        $tab[$i]['Absence']++;
                }
                $j++;
            } 
        }
    }

    foreach($tab as $value){
        echo"Etudiant : ".$value['Etudiant']." Absence : ".$value['Absence']."</br>";
    }
    ?>

</body>
</html>