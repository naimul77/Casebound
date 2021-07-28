<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ChartsController extends Controller
{
    public function show() 
    {
        $area = $this->area();
        $pie = $this->pie();
        $donut = $this->donut();
        $radial = $this->radial();
        $polarea = $this->polarea(); 
        $line = $this->line();
        $bar = $this->bar();
        $hbar = $this->hbar();

        return Inertia::render('Dashboard', compact('area', 'pie', 'donut', 'radial', 'polarea', 'line', 'bar', 'hbar'));
    }

    public function area() 
    {
        $title = "Teacher to Student Ratio";
        $key1 = 'Number of Students'; 
        $dataset1 = [10, 30, 25];
        $key2 = 'Number of Teachers';
        $dataset2 = [5, 15, 35];
        $colors = ['#ffc63b', '#ff6384'];

        return (new LarapexChart)
                ->areaChart()
                ->setTitle($title)
                ->addArea($key1, $dataset1)
                ->addArea($key2, $dataset2)
                ->setColors($colors)
                ->setGrid()
                ->toVue();
    }
    
    public function pie() 
    {
        $title = "Top 10 Subjects in teh CSE Department"; 
        $subtitle = "Spring 2021"; 
        $numOfStudents = [20, 24, 30]; 
        $topSubjects = ['Numerical Methods', 'Introduction to Mathematical Modeling', 'Software Architecture'];

        return (new LarapexChart)
                ->pieChart()
                ->setTitle($title)
                ->setSubtitle($subtitle)
                ->addData($numOfStudents)
                ->setLabels($topSubjects)
                ->toVue();
    }
    
    public function donut() 
    {
        $title = "Top 10 Subjects in teh CSE Department"; 
        $subtitle = "Spring 2021"; 
        $numOfStudents = [20, 24, 30]; 
        $topSubjects = ['Numerical Methods', 'Introduction to Mathematical Modeling', 'Software Architecture'];

        return (new LarapexChart)
                ->donutChart()
                ->setTitle($title)
                ->setSubtitle($subtitle)
                ->addData($numOfStudents)
                ->setLabels($topSubjects)
                ->toVue();
    }
    
    public function radial() 
    {
        $title = "Exam Success Comparison";
        $subtitle = "Final vs Mid";
        $data = [60, 75];
        $labels = ['Final', 'Mid'];
        $colors = ['#D32F2F', '#03A9F4'];
        
        return (new LarapexChart)
                ->radialChart()
                ->setTitle($title)
                ->setSubtitle($subtitle)
                ->addData($data)
                ->setLabels($labels)
                ->setColors($colors)
                ->toVue(); 
    }
    
    public function polarea() 
    {
        $title = "Top 3 Students of the Semester Term";
        $subtitle = "Autumn 2020";
        $data = [97.5, 94.1, 93.6];
        $labels = ['Valedictorian', 'Salutatorian', 'Summa Cum Laude'];
        
        return (new LarapexChart)
                ->polarAreaChart()
                ->setTitle($title)
                ->setSubTitle($subtitle)
                ->addData($data)
                ->setLabels($labels)
                ->toVue();
    }
    
    public function line() 
    {
        $title = "Progression of Academic Achievements over the Past Decade";
        $subtitle = "Outcome Achievements vs Outcomes Attempted";
        $dataLabel1 = "Attempted Outcomes";
        $dataset1 = [42, 97, 45, 61, 36, 109];
        $dataLabel2 = "Outcomes Achieved";
        $dataset2 = [40, 93, 35, 42, 18, 82];
        $xAxis = ['PLO1', 'PLO3', 'PLO4', 'PLO6', 'PLO8', 'PLO11'];

        return (new LarapexChart) 
                ->lineChart()
                ->setTitle($title)
                ->setSubtitle($subtitle)
                ->addLine($dataLabel1, $dataset1)
                ->addLine($dataLabel2, $dataset2)
                ->setXAxis($xAxis)
                ->setGrid()
                ->toVue(); 
    }
    
    public function bar() 
    {
        $title = "Course Evaluation by Section";
        $subtitle = "Average Student Score";
        $dataLabel1 = "Section 1";
        $dataset1 = [18, 22, 30, 44, 27];
        $dataLabel2 = "Section 2";
        $dataset2 = [17, 25, 29, 42, 28];
        $dataLabel3 = "Section 2";
        $dataset3 = [20, 24, 30, 38, 30];
        $xAxis = ['Q1', 'Q2', 'Q3', 'Q4', 'Project'];

        return (new LarapexChart)
                ->barChart()
                ->setTitle($title)
                ->setSubtitle($subtitle)
                ->addData($dataLabel1, $dataset1)
                ->addData($dataLabel2, $dataset2)
                ->addData($dataLabel3, $dataset3)
                ->setXAxis($xAxis)
                ->setGrid()
                ->toVue();
    }
    
    public function hbar() 
    {     
        $title = "Course Evaluation by Section";
        $subtitle = "Average Student Score";
        $dataLabel1 = "Section 1";
        $dataset1 = [18, 22, 30, 44, 27];
        $dataLabel2 = "Section 2";
        $dataset2 = [17, 25, 29, 42, 28];
        $dataLabel3 = "Section 2";
        $dataset3 = [20, 24, 30, 38, 30];
        $xAxis = ['Q1', 'Q2', 'Q3', 'Q4', 'Project'];

        return (new LarapexChart)
                ->horizontalBarChart()
                ->setTitle($title)
                ->setSubtitle($subtitle)
                ->addData($dataLabel1, $dataset1)
                ->addData($dataLabel2, $dataset2)
                ->addData($dataLabel3, $dataset3)
                ->setXAxis($xAxis)
                ->setGrid()
                ->toVue();
    }
}
