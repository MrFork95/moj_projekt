<?php
namespace App\Controller;
 
use Symfony\Component\HttpFoundation\Response;
/**
 * @author Rafał
 */
class LuckyController {
    public function number() {
        $number = random_int(0, 100);
        return new Response('<html><body>Lucky number:'.$number.' </body></html>');
        
    }
    //put your code here
}
