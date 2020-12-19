<?php


//use Dotenv\Dotenv;

require 'vendor\autoload.php';
require  'vendor\vlucas\phpdotenv\src\Dotenv.php';

       

    class SendEmail{

        public static function SendMail($to, $subject, $content){

                    //variable key stores API
                    //use Dotenv\Dotenv;   
                                    
                    //Dotenv::load(__DIR__);
                    //$key=getenv('INTERNATIONAL_MENS_APP_API_KEY');
                                                            
                                       
                    //email object calling a new object of SendGrid
                    $email = new \SendGrid\Mail\Mail();
                    $email->setFrom("noreply@internationalmensretreat.com","Orace Mundle" );
                    $email->setSubject($subject);
                    $email->addTo($to);
                    $email->addContent("text/plain", $content);
                    // $email->addContent("text/html", $content);

                    //instantiating sendgrid object
                    $sendgrid = new \SendGrid(getenv('INTERNATIONAL_MENS_APP_API_KEY'));
                    //$sendgrid = new \SendGrid($key);

                    try {
                        //call function send stored in respomse
                        $response = $sendgrid->send($email);
                        return $response;



                    } catch (Exception $e) {
                        //throw $th;
                        echo 'Email Exception Caught : ', $e->getMessage() . "\n";
                        return false;

                    }



        }

    }


?>