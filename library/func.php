<?php
//class database
class Database
{
    //property link penerapan prinsip enkapsulasi
    protected $link;
    //method construct agar selalu terhubung ke database
    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'schools');
    }
}

//class students
class Students extends Database
{
    //method utk menampilkan data student
    public function showDataStudent()
    {
        $query = "SELECT * FROM students";
        $result = mysqli_query($this->link, $query);
        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }
}

//class studentclasses
class StudentClasses extends Database
{
    //method utk menampikan data student classes
    public function showDataStudentClasses()
    {
        $query = "SELECT * FROM student_classes";
        $result = mysqli_query($this->link, $query);
        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }
}

//class student dg signature AJ
class StudentAJ extends Database
{
    //method utk menampilkan data
    public function showDataStudent()
    {
        $query = "SELECT * FROM students where signature = 'AJ'";
        $result = mysqli_query($this->link, $query);
        $array = array();
        while ($row = mysqli_fetch_array($result)) {
            $array[] = $row;
        }
        return $array;
    }
}
