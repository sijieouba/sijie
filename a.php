<?php
header('Content-Type:text/html; charset=utf-8;');

//for循环实现：循环3次 hello world
//
//for($i=1;$i<=3;$i++){
//    echo 'hello world<br/>';
//
//        }
//        echo $i;
//        /*无条件执行一次$i=1;
//         * $i<=3   -->  true
//          * echo 'hello world<br/>';
//           * $i++  -->  $i=2
//            * $i<=3  -->   true
//             * echo 'hello world<br/>';
//              * $i++  -->$i=3
//               * $3<=3  -->  true
//                * $i++ --> $i=4
//                 * $i<=3  -->  false
//                  * */
//
//                  echo '<hr/>';
//
//                  //  输入3次good  $i=3 开始
//
//                  for($i=3;$i<=5;$i++){
//                      echo 'good<br/>';
//                      }
//                      echo $i;
//
//                      echo '<hr/>';
//
//                      //输入三次happy $i=3  步长减减 $i--
//
//                      for($i=3;$i>=1;$i--){
//                          echo 'happy<br/>';
//                          }
//                          echo '<hr/>';
//
//                          //有变量参与的输出    1-10数
//                          for($i=1; $i <= 10;$i++){
//                              echo '第'.$i.'行<br/>';
//                              }
//                              // 输出 h1~h6
//                              for($i=1; $i<=6; $i++){
//                                  echo '<h'.$i.'>内容<h'.$i.'>';
//                                  }
//                                  echo '<hr/>';
//
//                                  // 带条件的控制输出或是更改步长来让我们实现有规律的输出
//
//                                  //1-10的偶数
//                                  for($i=1;$i<=10;$i++){
//                                      if($i%2==0){
//                                          echo $i .'<br/>';
//                                              }
//                                              }
//                                              echo '<br/>';
//                                              //1-10的奇数
//
//                                              for($i=1;$i<=10;$i++){
//                                                  if($i%2!=0){
//                                                          echo $i.'<br/>';
//                                                              }
//                                                              }
//
//                                                              echo '<hr/>';
//
//
//                                                              for($i=1;$i<=10;$i+=2){
//                                                                  echo $i.'<br/>';
//                                                                  }
//                                                                  echo '<hr/>';
//
//                                                                  //输出 3 8 13 18 23 18 33
//                                                                  for($i=3;$i<=33;$i+=5){
//                                                                      echo $i. '<br/>';
//                                                                      }
//                                                                      echo '<hr/>';
//                                                                      //输出 3 6 12 14 48 96 192
//
//                                                                      for($i=3;$i<=192;$i*=2){
//                                                                          echo $i.'<br/>';
//                                                                          }
//                                                                          echo '<hr/>';
//                                                                          // 输出1-100中能被5和7整除的数
//                                                                          for($i=1;$i<=100;$i++){
//                                                                              if($i%5 ==0 && $i%7==0){
//                                                                                      echo $i.'<br/>';
//                                                                                          }
//                                                                                          }
//                                                                                          echo '<hr/>';
//
//                                                                                          // 累加算法 1+2+3+...+100的和
//                                                                                          $sum = 0;
//                                                                                          for($i = 1;$i<=100; $i++){
//                                                                                              $sum+=$i;
//                                                                                              }
//                                                                                              echo $sum;
//
//                                                                                              /* $sum =   0
//                                                                                               * $sum = $sum  +  $i
//                                                                                                *   1  =   0   +  1
//                                                                                                 *   3  =   1   +  2
//                                                                                                  *   6  =   3   +  3
//                                                                                                   *         ....
//                                                                                                    * */
//
//
//
//
//
//
//
//
//
//
