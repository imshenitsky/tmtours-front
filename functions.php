<?php
function api_url() {
  return (php_env() == 'development') ? 'http://localhost:3000/api' : 'https://tmtours-admin.herokuapp.com/api';
}

function php_env() {
  if (isset($_GET['env']) && $_GET['env'] == 'production') {
    return 'production';
  }

  if ($_SERVER['HTTP_HOST'] == 'tmtours.local') {
    return 'development';
  }
  return 'production';
}

function print_arr($arr) {
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}

?>