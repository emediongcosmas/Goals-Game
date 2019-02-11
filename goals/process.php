<?php

    $positive_responses = array(
        "You're gonna make it big!",
        "Let's go make this money",
        "You can do it!",
        "Then, work towards it",
        "Wow... You got this"
    );

    $negative_responses = array(
        "Are you sure you wanna do this?",
        "Oops! I think you should review your goals",
        "I'm not in support of this!",
        "I don't think this is possible",
        "You gotta do more!"
    );

    $positive = array_rand($positive_responses);
    $negative = array_rand($negative_responses); 

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // This checks if the fields are set, if set, the if statement executes
        if(isset($_POST['name']) 
        && isset($_POST['age'])
        && isset($_POST['gender']) 
        && isset($_POST['books_2018']) 
        && isset($_POST['books_2019']) 
        && isset($_POST['skills_2018']) 
        && isset($_POST['skills_2019']) 
        && isset($_POST['earning_2018']) 
        && isset($_POST['earning_2019']) 
        && isset($_POST['current_salary']) 
        && isset($_POST['hardwork']))
        {

            // This assigns the various $_POST fields to variables for readabilty
            $name           = htmlspecialchars($_POST['name']);
            $age            = htmlspecialchars($_POST['age']);
            $age            = intval($age); // This converts age to a numeric value
            $gender         = $_POST['gender'];
            $books_2018     = $_POST['books_2018'];
            $books_2019     = $_POST['books_2019'];
            $skills_2018    = $_POST['skills_2018'];
            $skills_2019    = $_POST['skills_2019'];
            $earning_2018   = $_POST['earning_2018'];
            $earning_2019   = $_POST['earning_2019'];
            $current_salary = $_POST['current_salary'];
            $hardwork       = $_POST['hardwork'];
            
                if (!empty($name) &&  
                    !empty($age) &&  
                    !empty($gender) &&  
                    !empty($books_2018) &&  
                    !empty($books_2019) && 
                    !empty($skills_2018) && 
                    !empty($skills_2019) && 
                    !empty($earning_2018) && 
                    !empty($earning_2019) && 
                    !empty($current_salary) && 
                    !empty($hardwork)
                    ) {

                        if (is_numeric($age)) {
                            // This is an array to hold the work rate
                            $hardwork_array = ['Hard', 'Very hard', 'Sometimes'];
                            // Type casting string to int
                            $earning_2018_int = intval($earning_2018);
                            $earning_2019_int = intval($earning_2019);

                    // Conditions for positivity 
                                $effort = ( ($books_2018 < $books_2019 ) && 
                                            ($skills_2018 > $skills_2019 || $skills_2018 < $skills_2019) && 
                                            ($earning_2018_int < $earning_2019_int) && 
                                            ($hardwork == $hardwork_array[0] || $hardwork == $hardwork_array[1]) 
                                          );

                               $reading = ( ($books_2018 < $books_2019) && 
                                            ($skills_2018 > $skills_2019) && 
                                            ($earning_2018_int < $earning_2019_int) && 
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1]) 
                                          );

                                $skills = ( ($books_2018 == $books_2019 || $books_2018 < $books_2019) && 
                                            ($skills_2018 > $skills_2019) && 
                                            ($earning_2018_int < $earning_2019_int) && 
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1]) 
                                          );

                         $equal_earning = ( ($books_2018 > $books_2019) &&
                                            ($skills_2018 < $skills_2019) &&
                                            ($earning_2018_int == $earning_2019_int) &&
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1] || $hardwork == $hardwork_array[2]) 
                                          );

                                $madeIt = ( ($books_2018 < $books_2019) &&
                                            ($skills_2018 > $skills_2019) &&
                                            ($earning_2018_int == $earning_2019_int) &&
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1]) 
                                          );

                         $earningChance = ( ($books_2018 < $books_2019) &&
                                            ($skills_2018 <= $skills_2019) &&  
                                            ($earning_2018_int < $earning_2019_int) &&
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1])
                                          );

                         $totalEquality = ( ($books_2018 == $books_2019) &&
                                            ($skills_2018 == $skills_2019) &&  
                                            ($earning_2018_int == $earning_2019_int) &&
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1] ||
                                             $hardwork == $hardwork_array[0] || $hardwork == $hardwork_array[1])
                                          );


                    // Conditions for negativity
                          $justHardwork = ( ($books_2018 > $books_2019) &&
                                            ($skills_2018 > $skills_2019) &&
                                            ($earning_2018_int > $earning_2019_int) && 
                                            ($hardwork == $hardwork_array[0] || $hardwork == $hardwork_array[1]) 
                                          );

                              $laziness = ( ($books_2018 < $books_2019) &&
                                            ($skills_2018 < $skills_2019) &&  
                                            ($earning_2018_int > $earning_2019_int) &&
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1])
                                          );

                           $lessEarning = ( ($books_2018 < $books_2019) &&
                                            ($skills_2018 > $skills_2019) && 
                                            ($earning_2018_int > $earning_2019_int) && 
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1] ||$hardwork == $hardwork_array[0] || $hardwork == $hardwork_array[1]) 
                                          );

                             $ambitions = ( ($books_2018 > $books_2019) &&
                                            ($skills_2018 < $skills_2019) &&
                                            ($earning_2018_int < $earning_2019_int) &&
                                            ($hardwork != $hardwork_array[0] || $hardwork != $hardwork_array[1]) 
                                          );


                                    switch ($age) {
                                            case $effort:
                                                $success = $positive_responses[$positive];
                                                break;

                                            case $reading:
                                                $success = $positive_responses[$positive];
                                                break;

                                            case $skills:
                                                $success = $positive_responses[$positive];
                                                break;

                                            case $equal_earning:
                                                $success = $positive_responses[$positive];
                                                break;

                                            case $madeIt:
                                                $success = $positive_responses[$positive];
                                                break;
                                            
                                            case $earningChance:
                                                $success = $positive_responses[$positive];
                                                break;

                                            case $totalEquality:
                                                $success = $positive_responses[$positive];
                                                break;

                                            case $justHardwork:
                                                $success = $negative_responses[$negative];
                                                break;
                                            
                                            case $laziness:
                                                $success = $negative_responses[$negative];
                                                break;

                                            case $lessEarning:
                                                $success = $negative_responses[$negative];
                                                break;

                                            case $ambitions:
                                                $success = $negative_responses[$negative];
                                                break;
                                        
                                        default:
                                            $message = "Oops! Please take the test again";
                                            break;
                                    } 
                        
                        } else{
                            $message = "Please enter a valid age";
                        }

                }else {
                    $message = "Please complete the form";
                }
        }
    } 

?>
