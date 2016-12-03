<?php
class billing {
	
	Public function Payment_calc($prize,$num_of_rooms,$days)
        {
            $total_ammount=$prize*$num_of_rooms*$days;
            return $total_ammount;
        	//$response_guest=see_request($con);	
        }






}