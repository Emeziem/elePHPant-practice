<?php
$studentName  = array('Dorla Landin', 'Donnette Lapp', 'Bryce Schwandt', 'Minna Amend',
                      'Zack Flavell', 'Marcella Karst', 'Sharla Pelzer', 'Brett Sams',
                      'Leanora Montz', 'Madelene Lamp', 'Petrina Hohn', 'Saran Scholze',
                      'Keila Lanphear', 'Ariel Durst', 'Deja Burpo', 'Amelia Gamache',
                      'Betty Brumley', 'Noah Damelio', 'Desirae Wattley', 'Sana Mclead',
                      'Anjelica Mendenhall', 'Deana Cozad', 'Genia Huneke', 'Deetta Mcnamee',
                      'Ginette Adelson', 'Trang Pitchford', 'Janell Halle', 'Easter Szabo',
                      'Birgit Nembhard', 'Annette Matthias'
                    );

$arrayID = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
                21, 22, 23, 24, 25, 26, 27, 28, 29, 30
                );

                sort ($studentName);
                $count = array_merge ($arrayID, $studentName);
                print_r ($count);
?>