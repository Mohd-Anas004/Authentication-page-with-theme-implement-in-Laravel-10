<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ManagerController extends Controller
{
    public function createManager()
    {
        // $state = City::all();
        return view('manager.create ');
    }
    public function uploadManager(Request $request)
    {
        $manager = new Manager();
        $manager->name = $request->name;
        $manager->email = $request->email;
        $manager->age = $request->age;
        $manager->gender = $request->gender;
        $manager->address = $request->address;
        $manager->status = $request->status;
        if ($request->hasFile('image')) {


            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $image = $file->move(public_path('images'), $filename);
            $manager->image = $filename;
        }
        $manager->save();
        return redirect()->route('managerdashboard');
    }
    public function index(Request $request)
    {
        $search = $request->search;
        $message = '';
        if (!empty($search)) {
            $data = Manager::Where('name', 'LIKE', "%$search%")->paginate(7);

            if ($data->isEmpty()) {
                $message = 'Data not found';
            }
        } else {

            $data = Manager::orderby('id', 'desc')->paginate(5);
        }

        return view('manager.managerdashboard ', compact('data', 'message'));
    }
    public function editManager($id)
    {
        $data = Manager::find($id);
        // dd($data);


        return view('manager.edit ', compact('data'));
    }
    public function updateManager(Request $request, $id)
    {
        $manager = Manager::find($id);
        $manager->name = $request->name;
        $manager->email = $request->email;
        $manager->age = $request->age;
        $manager->gender = $request->gender;
        $manager->address = $request->address;
        $manager->status = $request->status;
        if ($request->hasFile('image')) {


            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $image = $file->move(public_path('images'), $filename);
            $manager->image = $filename;
        }
        $manager->save();
        return redirect()->route('managerdashboard');
    }
    public function deleteManager($id)
    {



        $data = Manager::find($id);

        if ($data) {
            $data->delete();
            return response()->json(['success' => 'Your data has been deleted successfully']);
        }

        return response()->json(['error' => 'Record not found'], 404);
    }
    public function updateStatus(Request $request, $id)
    {
        $manager = Manager::find($id);

        if ($manager) {
            $manager->status = $manager->status === 'active' ? 'deactive' : 'active';
            $manager->save();

            return response()->json([
                'success' => 'Status updated successfully.',
                'status' => $manager->status
            ]);
        }

        return response()->json(['error' => 'Employee not found'], 404);
    }
}
