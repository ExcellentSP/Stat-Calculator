<?php
/**
 * Get build points
 * Compare build points to current points and available points for level
 * Provide percent based distribution results
 */

class Stat_Calculator
{

    //Set skill point progression per level
    private $xenoverse_skillpoints = [
        0, //1
        2, //2
        3, //3
        3, //4
        3, //5
        3, //6
        3, //7
        3, //8
        3, //9
        3, //10
        3, //11
        3, //12
        3, //13
        3, //14
        3, //15
        3, //16
        3, //17
        3, //18
        3, //19
        4, //20
    ];

    //Set default for character stats
    private $character = [
        'health' => 0,
        'ki' => 0,
        'stamina' => 0,
        'basicattacks' => 0,
        'strikesupers' => 0,
        'kisupers' => 0,
    ];

    public function __construct(){

        //set build array
        $this->build = $_GET['build'];

        //Set character level
        $this->character_level = $_GET['character']['level'];

    }

    public function show_level_proposition() {

        $proportional_distribution = $this->distribute_points();

        echo $this->formulate_result( $proportional_distribution, $this->character_level );

    }

    /**
     * @return array[string]
     */
    private function distribute_points(){

        for($i = 0; $i < $this->character_level; $i++){

            for( $j = 0; $j <= $this->xenoverse_skillpoints[$i]; $j++){

                $character_percentages = $this->calculate_percents( $this->character );

                $build_percentages = $this->calculate_percents( $this->build );

                $diffs = $this->calculate_diffs( $character_percentages, $build_percentages );

                $min_key = array_keys( $diffs, min( $diffs ) );

                $this->character[$min_key[0]]++;

            }

        }

        return $this->character;

    }

    /**
     * @param array[string] $stats
     * @return array[string]
     */
    private	function calculate_percents( $stats ) {

        $stat_sum = array_sum( $stats );

        foreach( $stats as $attribute => $points ) {

            $stat_percents[$attribute] = $points / $stat_sum;

        }

        return $stat_percents;

    }

    /**
     * @param array[string] $initial
     * @param array[string] $less
     * @return array[string]
     */
    private function calculate_diffs( $initial, $less ){

        foreach( $initial as $attribute => $points ) {

            $stat_percents[$attribute] = $points - $less[$attribute];

        }

        return $stat_percents;

    }

    /**
     * @param array[string] $stats
     * @param array[string] $level
     * @return string
     */
    private function formulate_result( $stats, $level ) {

        $result = "<h1>Level: " . $level . "</h1>" .
        "<h3>Max Health: " . $stats[ 'health' ] . "</h3>" .
        "<h3>Max Ki: " . $stats[ 'ki' ] . "</h3>" .
        "<h3>Max Stamina: " . $stats[ 'stamina' ] . "</h3>" .
        "<h3>Basic Attacks: " . $stats[ 'basicattacks' ] . "</h3>" .
        "<h3>Strike Supers: " . $stats[ 'strikesupers' ] . "</h3>" .
        "<h3>Ki Blast Supers: " . $stats[ 'kisupers' ] . "</h3>";

        return $result;

    }

}

$stat_tracker = new Stat_Calculator();
$stat_tracker->show_level_proposition();