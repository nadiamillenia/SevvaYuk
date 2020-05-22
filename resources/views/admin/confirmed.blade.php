<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Application</title>
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('3067b9ef191eaeba0df3', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('status-confirmed');
    channel.bind('status-confirmed', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
  </head>
  <body>      
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>status-confirmed</code>
    with event name <code>status-confirmed</code>.
  </p>
    </body>
</html>