<?php
  header('Content-Type: text/plain; charset=UTF-8');
  echo '[iThreads Ghoster]'.PHP_EOL;
  echo '! Title: iThreads Ghoster'.PHP_EOL;
  echo '! Expires: 2 hours'.PHP_EOL.PHP_EOL;
  foreach(file('threads.txt') as $line) {
    echo 'ivelt.com#?#LI:-abp-has(>DL>DT>DIV>A:-abp-contains('.trim($line).'))'.PHP_EOL;
  }
?>
