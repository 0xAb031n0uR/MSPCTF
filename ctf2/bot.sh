while sleep 1; do OPENSSL_CONF=/etc/ssl/ phantomjs --ignore-ssl-errors=true --local-to-remote-url-access=true --web-security=false --ssl-protocol=any ctf2-bot.js; done;
