<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Http\Requests\EmployeeFormRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee :: all();

        return view('pages.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeFormRequest $request)
    {
        $data = $request -> all();

        $newEmployee = new Employee();

        $newEmployee -> firstname = $data['firstname'];
        $newEmployee -> lastname = $data['lastname'];
        $newEmployee -> fiscal_code = $data['fiscal_code'];
        $newEmployee -> salary = $data['salary'];

        $newEmployee -> save();

        return redirect() -> route('users.show', $newEmployee -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee :: find($id);

        return view('pages.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee :: find($id);

        return view('pages.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeFormRequest $request, $id)
    {
        $employee = Employee :: find($id);

        $data = $request -> all();
        // $data = $request -> validate(
        //     $this -> getValidationRules(),
        //     $this -> getValidationMessages()
        // );

        // dd($employee, $data);

        $employee -> firstname = $data['firstname'];
        $employee -> lastname = $data['lastname'];
        $employee -> fiscal_code = $data['fiscal_code'];
        $employee -> salary = $data['salary'];

        $employee -> save();

        return redirect() -> route('users.show', $employee -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee :: find($id);
        $employee -> delete();

        return redirect() -> route('users.index');
    }

    private function getValidationRules() {

        return [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'fiscal_code' => 'required|string|min:10|max:20',
            'salary' => 'required|numeric',
        ];
    }
    private function getValidationMessages() {

        return [
            'firstname.min' => "Il nome non puo' essere minore di 3 caratteri"
        ];
    }
}
