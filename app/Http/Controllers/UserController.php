<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings.user.index',[
            'js' => 'settings/user/js',
        ]);
    }

    function getUsers(Request $request) {
        $query = 'SELECT u.nik,
                    u.first_name,
                    u.username,
                    r.name AS `role`,
                    d.name AS division
                FROM m_users u
                LEFT JOIN m_roles r ON u.role_id = r.id 
                LEFT JOIN m_divisions d ON u.division_id = d.id 
                ORDER BY u.created_at DESC';

        // Execute the raw query
        $users = DB::select($query);

        // Convert raw query result to Eloquent collection
        $data = User::hydrate($users);

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
