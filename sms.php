    <?php
    // Include the PHP Twilio library. You need to download the library from 
        // twilio.com/docs/libraries, and move it into the folder containing this 
        // file.
        require "Services/Twilio.php";
     
        // set our AccountSid and AuthToken - from www.twilio.com/user/account
        $AccountSid = "AC817c97f844ba0e5fdbea92dbeb633dfa";
        $AuthToken = "5b4c43d63824822bb74df0ad94786b1e";
     
        // instantiate a new Twilio Rest Client
        $client = new Services_Twilio($AccountSid, $AuthToken);
     
        // make an associative array of people we know, indexed by phone number. Feel
        // free to change/add your own phone number and name here.
        $people = array(
            "+601123159383" => "Ali Omran",
            
            
        );
     
        // iterate over all our friends. $number is a phone number above, and $name 
        // is the name next to it
        foreach ($people as $number => $name) {
     
            // Send a new outgoing SMS */
            $sms = $client->account->sms_messages->create(
                // the number we are sending from, must be a valid Twilio number
                "YYY-YYY-YYYY", 
     
                // the number we are sending to - Any phone number
                $number,
     
                // the sms body
                "Hey $name, Monkey Party at 6PM. Bring Bananas!"
            );
     
            // Display a confirmation message on the screen
            echo "Sent message to $name";
        }
    ?>