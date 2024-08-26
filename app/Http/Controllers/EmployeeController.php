<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

use function PHPUnit\Framework\isEmpty;

class EmployeeController extends Controller
{
    public function createEmployee()
    {
        // $state = City::all();
        return view('employee.create ');
    }
    public function uploadEmployee(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->gender = $request->gender;
        $employee->address = $request->address;
        $employee->department = $request->department;
        $employee->status = $request->status;
        if ($request->hasFile('image')) {


            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $image = $file->move(public_path('employees'), $filename);
            $employee->image = $filename;
        }
        $employee->save();
        return redirect()->route('employeedashboard');
    }
    public function index(Request $request)
    {
        $search = $request->search;
        $message = '';
        if (!empty($search)) {
            $data = Employee::where('name', 'LIKE', "%$search%")->paginate(5);
            if ($data->isEmpty()) {
                $message = 'Data Not Found';
            }
        } else {

            $data = Employee::orderby('id', 'desc')->paginate(5);
        }

        return view('employee.employeedashboard ', compact('data', 'message'));
    }
    public function editEmployee($id)
    {
        $data = Employee::find($id);
        // dd($data);


        return view('employee.edit ', compact('data'));
    }
    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->gender = $request->gender;
        $employee->address = $request->address;
        $employee->department = $request->department;
        $employee->status = $request->status;
        if ($request->hasFile('image')) {


            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $image = $file->move(public_path('employees'), $filename);
            $employee->image = $filename;
        }
        $employee->save();
        return redirect()->route('employeedashboard')->with('message', 'Data Inserted Successfully');
    }
    public function deleteEmployee($id)
    {
        $data = Employee::find($id);

        if ($data) {
            $data->delete();
            return response()->json(['success' => 'Your data has been deleted successfully']);
        }

        return response()->json(['error' => 'Record not found'], 404);
    }
    public function updateStatus(Request $request, $id)
    {
        $employee = Employee::find($id);

        if ($employee) {
            $employee->status = $employee->status === 'active' ? 'deactive' : 'active';
            $employee->save();

            return response()->json([
                'success' => 'Status updated successfully.',
                'status' => $employee->status
            ]);
        }

        return response()->json(['error' => 'Employee not found'], 404);
    }
}
