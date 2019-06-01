<?php

class Stu
{
    private $id;        // private instance variables
    private $stu_name;
    private $midterm;
    private $final;
    private $avg;
    private $grade;

    public function __construct($id, $stu_name, $midterm, $final)
    {
        $this->id = $id;
        $this->stu_name = $stu_name;
        $this->midterm = $midterm;
        $this->final = $final;
    }

    public function get_stu_name()
    {
        return $this->stu_name;
    }

    public function get_midterm()
    {
        return $this->midterm;
    }

    public function get_final()
    {
        return $this->final;
    }

    public function finalGrade($midterm =0, $final=0)
    {
        $avg = round(($this->final + $this->midterm) / 2);
        if ($avg >= 90) {
            $grade = "A";
        } elseif ($avg >= 80 && $avg <= 89) {
            $grade = "B";
        } elseif ($avg >= 70 && $avg <= 79) {
            $grade = "C";
        } elseif ($avg >= 60 && $avg <= 69) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        return $grade;
    }
}
