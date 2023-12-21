<?php

namespace App\Repositry;
interface TeacherRepositryInterface
{ 
  public function getAllTeacher();

  public function getGender();

  public function getSpecialization();

  public function teacherStore($request);

  public function editTeacher($id);

  public function teacherUpdate($request);

  public function deleteTeacher($id);
}