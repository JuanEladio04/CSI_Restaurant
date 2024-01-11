 function authenticateWithTwitter() {

    let options = {
        method: "POST",
        mode: "cors",
        oauth_callback: "http%3A%2F%2Flocalhost%2Fsign-in-with-twitter%2F",
        oauth_consumer_key: "Wk5WM3JtbmpZcENNejh5VGg3TE86MTpjaQ",
        oauth_signature_method: "HMAC-SHA1",
        oauth_timestamp: "1300228849",
        oauth_signature: "1292156552-OfVTTFrZJWEO0dH38ckLcXvRsy6L1de13di2fwU",
        oauth_version: "1.0"
    }
    respuesta = fetch("https://cors-anywhere.herokuapp.com/https://api.twitter.com/oauth/request_token", options);
  
}