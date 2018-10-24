<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'f4e14530aedbfaf9a062',
    'bc737c796bc6b3121a68',
    '574548',
    $options
  );

  $data['message'] = 'hello world for Pusher';
  $pusher->trigger('my-channel', 'my-event', $data);
?>
