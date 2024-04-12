<?php 

namespace App\Interfaces ;

interface CategoryInterface {

    public function index();

    public function store($request);

    public function show($id);

    public function update($category ,$request);

    public function delete($id);

}