<?php

class ResumeDetails
{
    public $name;
    public $email;
    public $phone;
    public $home;

    function schools() {
      $array = array("University of Makati", "San Antonio National High School", "F. Ma. Guerrero Elem. School");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }

    function hard_skills() {
      $array = array("PHP","MYSQL", "OS Cloning", "BIOS Beep Codes", "Asset Inventory");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }

    function soft_skills() {
      $array = array("Engling communication", "Empathy", "Work under pressure");
      $count = count($array);

      for ($i=0; $i<$count; $i++) {
        echo "- ".$array[$i]."\n";
      }
    }
}

$resume = new ResumeDetails();

$resume->name = "Raven Love C. Riel";
$resume->email = "ravenlove.riel@gmail.com";
$resume->phone = "(+63)999 986 0866";
$resume->home = "2374 Alabastro St. San Andres Bukid, Manila, Metro Manila, 1017";

$resume->college = "University of Makati";
$resume->course = "Information Technology Service Management";
$resume->schoolyear = "2016 - 2020";
$resume->attainment = "Baccalaureate Degree in Information Technology Service Management";

echo "\n*****RESUME DETAILS:*****\n\n";
echo "Name: \t\t" . $resume->name . "\n";
echo "Email Address: \t" . $resume->email . "\n";
echo "Phone Number: \t" . $resume->phone . "\n";
echo "Home Address: \t" . $resume->home . "\n";

echo "\nEducation:\n";
echo "College: \t" . $resume->college . "\n";
echo "Course: \t" . $resume->course . "\n";
echo "School Year: \t" . $resume->schoolyear . "\n";
echo "Attainment: \t" . $resume->attainment . "\n";

echo "\nSchools Attended:\n";
echo $resume->schools();

echo "\nHard Skills:\n";
echo $resume->hard_skills();

echo "\nSoft Skills:\n";
echo $resume->soft_skills();

