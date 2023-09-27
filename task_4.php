<?php
//Create a multidimensional array

$studentGrades = array(
    array(
        'student_name' => 'Student 1',
        'grades' => array(
            'Math' => 85,
            'English' => 90,
            'Science' => 78
        )
    ),
    array(
        'student_name' => 'Student 2',
        'grades' => array(
            'Math' => 92,
            'English' => 77,
            'Science' => 76
        )
    ),
    array(
        'student_name' => 'Student 3',
        'grades' => array(
            'Math' => 78,
            'English' => 86,
            'Science' => 65
        )
    )
);

// Function to calculate and print the average grade for each student
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student) {
        $grades = $student['grades'];
        $average = array_sum($grades) / count($grades);
        printf("%s's Average Grade: %.2f\n", $student['student_name'], $average);
    }
}

// Call the function to calculate and print average grades
calculateAverageGrades($studentGrades);