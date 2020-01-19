<?php

class Job {
  public $title;
  public $description;
  public $achievements;
  public $visible;
}

$job1 = new Job();

$job1->title = 'PHP Developer';
$job1->description = 'D1-1';
$job1->achievements = ['a1', 'a2', 'a3'];
$job1->visible = true;

$jobs = [
  $job1
];

// $jobs = [
//   [
//     'title' => 'PHP Developer',
//     'description' => 'D1-1',
//     'achievements' => 'a1', 'a2', 'a3',
//     'visible' => true
//   ],
//   [
//     'title' => 'Python Developer',
//     'description' => 'D1-2',
//     'achievements' => 'b1', 'b2', 'b3',
//     'visible' => true
//   ],
//   [
//     'title' => 'DevOps',
//     'description' => 'D1-3',
//     'achievements' => 'c1', 'c2', 'c3',
//     'visible' => true
//   ],
//   [
//     'title' => 'Prueba',
//     'description' => 'D1-4',
//     'achievements' => 'd1', 'd2', 'd3',
//     'visible' => true
//   ]
// ];