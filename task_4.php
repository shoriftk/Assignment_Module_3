<?php

function calculateAverageGrades($studentGrades) {

    foreach ($studentGrades as $student => $grades) {
        $total = 0;

        foreach ($grades as $subject => $grade) {
            $total += $grade;
        }

        $average = $total / count($grades);

        echo "Average grade for $student: $average\n";
    }
}

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 90, 'Science' => 78),
    'Student2' => array('Math' => 92, 'English' => 88, 'Science' => 95),
    'Student3' => array('Math' => 78, 'English' => 85, 'Science' => 92)
);

calculateAverageGrades($studentGrades);

