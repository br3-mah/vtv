var apiKey = '47455521';
var sessionId = '1_MX40NzQ1NTUyMX5-MTY0NTc3MjczOTg4OX5EbS9Qek4yMnRVRUtTeVpSdjlqbUVDUyt-fg';
var token = 'T1==cGFydG5lcl9pZD00NzQ1NTUyMSZzaWc9OTE5YmU1ZjJiNGZiNjIxNmNmN2JiZjlhNTRlMTIyZmFlZDVmNWUyNTpzZXNzaW9uX2lkPTFfTVg0ME56UTFOVFV5TVg1LU1UWTBOVGMzTWpjek9UZzRPWDVFYlM5UWVrNHlNblJWUlV0VGVWcFNkamxxYlVWRFV5dC1mZyZjcmVhdGVfdGltZT0xNjQ1Nzc0Mzk2Jm5vbmNlPTAuMTY0MzA5MDg3Mzg0MzE0MDUmcm9sZT1wdWJsaXNoZXImZXhwaXJlX3RpbWU9MTY0NjM3OTE5NSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PQ==';

// connect to session
var session = OT.initSession(apiKey, sessionId);
var publisher = OT.initPublisher();
session.connect(token, function(err) {
    // publish publisher
    session.publish(publisher);
});
    
// create subscriber
session.on('streamCreated', function(event) {
    session.subscribe(event.stream);
});