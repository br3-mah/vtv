var apiKey = '47455521';
var sessionId = '1_MX40NzQ1NTUyMX5-MTY0NTc3MjczOTg4OX5EbS9Qek4yMnRVRUtTeVpSdjlqbUVDUyt-fg';
var token = 'T1==cGFydG5lcl9pZD00NzQ1NTUyMSZzaWc9OTE5YmU1ZjJiNGZiNjIxNmNmN2JiZjlhNTRlMTIyZmFlZDVmNWUyNTpzZXNzaW9uX2lkPTFfTVg0ME56UTFOVFV5TVg1LU1UWTBOVGMzTWpjek9UZzRPWDVFYlM5UWVrNHlNblJWUlV0VGVWcFNkamxxYlVWRFV5dC1mZyZjcmVhdGVfdGltZT0xNjQ1Nzc0Mzk2Jm5vbmNlPTAuMTY0MzA5MDg3Mzg0MzE0MDUmcm9sZT1wdWJsaXNoZXImZXhwaXJlX3RpbWU9MTY0NjM3OTE5NSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PQ==';

// Handling all of our errors here by alerting them
function handleError(error) {
    if (error) {
      alert(error.message);
    }
}


// (optional) add server code here
initializeSession();

function initializeSession() {
    var session = OT.initSession(apiKey, sessionId);
  
    // Subscribe to a newly created stream
    session.on('streamCreated', function(event) {
        session.subscribe(event.stream, 'subscriber', {
          insertMode: 'append',
          width: '100%',
          height: '100%'
        }, handleError);
      });

    // Create a publisher
    var publisher = OT.initPublisher('publisher', {
      insertMode: 'append',
      width: '100%',
      height: '100%'
    }, handleError);
  
    // Connect to the session
    session.connect(token, function(error) {
      // If the connection is successful, publish to the session
      if (error) {
        handleError(error);
      } else {
        session.publish(publisher, handleError);
      }
    });
}
