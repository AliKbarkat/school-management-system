<?php

namespace App\Repositry;
interface StudentRepositryInterface
{
    public function getAllStudent();

    public function studentStore($request);

    public function craeteStudent();

    public function editStudent($id);

    public function studentUpdate($request);

    public function destroyStudent($request);
    public function showStudent($id);

    public function uploadFile($request);
    public function downloadAttach($file_name,$student_name);
    public function deleteAttach($request);
}