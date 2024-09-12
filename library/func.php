<?php
class Database
{
    protected $link;
    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'schools');
    }
}

class Students extends Database
{
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

class StudentClasses extends Database
{
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

class StudentAJ extends Database
{
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
