<?php

require_once 'index.php';
/*
 *  My calendar for weekly appointments -
 *  i.  days free
 *  ii. days booked
 */
class BookMyCalendar {
    public $free = array();
    public $booked = array();

    public function __construct($week = 'now') {
        $start = new DateTime($week);
        $start->modify('Monday this week midnight');
        $end = clone $start;
        $end->modify('Friday this week midnight');
        $interval = new DateInterval('P1D');
        foreach (new DatePeriod($start, $interval, $end) as $freeTime) {
            $this->free[] = $freeTime;
        }
    }

    public function bookAppointment(DateTime $date, $note) {
        $this->booked[] = array('date' => $date->modify('midnight'), 'note' => $note);
    }

    public function checkAvailability() {
        return array_udiff($this->free, $this->booked, array($this, 'customCompare'));
    }
    
    public function customCompare($free, $booked) {
        if (is_array($free)) $a = $free['date'];
        else $a = $free;
        if (is_array($booked)) $b = $booked['date'];
        else $b = $booked;
        if ($a == $b) {
            return 0;
        } elseif ($a > $b) {
            return 1;
        } else {
            return -1;
        }
    }
}

// Create a calendar for weekly appointments
$bookMyCalendar = new BookMyCalendar;

// Book some appointments for this week
$bookMyCalendar->bookAppointment(new DateTime('Monday this week'), "Cleaning GoogleGuy's apartment.");
$bookMyCalendar->bookAppointment(new DateTime('Wednesday this week'), "Going on a snowboarding trip.");
$bookMyCalendar->bookAppointment(new DateTime('Friday this week'), "Fixing buggy code.");

// Check availability of days by comparing $booked dates against $free dates
echo "I'm available on the following days this week...<br /><br />";
foreach ($bookMyCalendar->checkAvailability() as $free) {
    echo $free->format('l'), "<br />"; 
}
echo "<br /><br />";
echo "I'm busy on the following days this week...<br /><br />";
foreach ($bookMyCalendar->booked as $booked) {
    echo $booked['date']->format('l'), ": ", $booked['note'], "<br />"; 
}


